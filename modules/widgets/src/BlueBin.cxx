/*------------------------------------------------------------------------------

    Copyright (c) 2004 Media Development Loan Fund
 
    This file is part of the LiveSupport project.
    http://livesupport.campware.org/
    To report bugs, send an e-mail to bugs@campware.org
 
    LiveSupport is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.
  
    LiveSupport is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with LiveSupport; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 
 
    Author   : $Author: maroy $
    Version  : $Revision: 1.3 $
    Location : $Source: /home/paul/cvs2svn-livesupport/newcvsrepo/livesupport/modules/widgets/src/BlueBin.cxx,v $

------------------------------------------------------------------------------*/

/* ============================================================ include files */

#ifdef HAVE_CONFIG_H
#include "configure.h"
#endif

#include <iostream>

#include "LiveSupport/Widgets/BlueBin.h"


using namespace LiveSupport::Core;
using namespace LiveSupport::Widgets;

/* ===================================================  local data structures */


/* ================================================  local constants & macros */


/* ===============================================  local function prototypes */


/* =============================================================  module code */

/*------------------------------------------------------------------------------
 *  Constructor.
 *----------------------------------------------------------------------------*/
BlueBin :: BlueBin(unsigned int                 backgroundColor,
                   Ptr<CornerImages>::Ref       cornerImages)
                                                                    throw ()
{
    set_flags(Gtk::NO_WINDOW);

    this->cornerImages = cornerImages;

    child = 0;
    
    bgColor = Gdk::Color();
    unsigned int    red   = (backgroundColor & 0xff0000) >> 8;
    unsigned int    green = (backgroundColor & 0x00ff00);
    unsigned int    blue  = (backgroundColor & 0x0000ff) << 8;
    bgColor.set_rgb(red, green, blue);
    Glib::RefPtr<Gdk::Colormap> colormap = get_default_colormap();
    colormap->alloc_color(bgColor);
}


/*------------------------------------------------------------------------------
 *  Destructor.
 *----------------------------------------------------------------------------*/
BlueBin :: ~BlueBin(void)                            throw ()
{
}


/*------------------------------------------------------------------------------
 *  Handle the size request event.
 *----------------------------------------------------------------------------*/
void
BlueBin :: on_size_request(Gtk::Requisition* requisition)       throw ()
{
    *requisition = Gtk::Requisition();

    int     width  = 0;
    int     height = 0;

    if (child) {
        Gtk::Requisition  childRequisition = child->size_request();
        width  = childRequisition.width;
        height = childRequisition.height;
    }

    requisition->width  = width
                        + cornerImages->leftImage->get_width()
                        + cornerImages->rightImage->get_width();
    requisition->height = height
                        + cornerImages->topImage->get_height()
                        + cornerImages->bottomImage->get_height();
}


/*------------------------------------------------------------------------------
 *  Handle the size allocate event.
 *  We will not be given heights or widths less than we have requested,
 *  though we might get more.
 *----------------------------------------------------------------------------*/
void
BlueBin :: on_size_allocate(Gtk::Allocation& allocation)        throw ()
{
    set_allocation(allocation);

    if (gdkWindow) {
        gdkWindow->move_resize( allocation.get_x(), 
                                allocation.get_y(), 
                                allocation.get_width(), 
                                allocation.get_height() );
    }

    if (child) {
        Gtk::Allocation     childAlloc;

        childAlloc.set_x(cornerImages->leftImage->get_width());
        childAlloc.set_y(cornerImages->topImage->get_height());
        childAlloc.set_width(allocation.get_width()
                           - cornerImages->leftImage->get_width()
                           - cornerImages->rightImage->get_width());
        childAlloc.set_height(allocation.get_height()
                            - cornerImages->topImage->get_height()
                            - cornerImages->bottomImage->get_height());

        child->size_allocate(childAlloc);
    }

    Gtk::Bin::on_size_allocate(allocation);
}


/*------------------------------------------------------------------------------
 *  Execute a function on all the children.
 *----------------------------------------------------------------------------*/
void
BlueBin :: forall_vfunc(gboolean    includeInternals,
                       GtkCallback callback,
                       gpointer    callbackData)               throw ()
{
    if (child) {
        callback(child->gobj(), callbackData);
    }
}


/*------------------------------------------------------------------------------
 *  Handle the add child widget event.
 *----------------------------------------------------------------------------*/
void
BlueBin :: on_add(Gtk::Widget* child)                           throw ()
{
    if (!this->child) {
        this->child = child;
        this->child->set_parent(*this);
    }
}


/*------------------------------------------------------------------------------
 *  Handle the remove child widget event.
 *----------------------------------------------------------------------------*/
void
BlueBin :: on_remove(Gtk::Widget* child)                        throw ()
{
    if (this->child == child) {
        this->child = 0;
        bool visible = child->is_visible();
        child->unparent();
        if (visible) {
            queue_resize();
        }
    }
}


/*------------------------------------------------------------------------------
 *  Return what kind of widgets can be added to this container.
 *----------------------------------------------------------------------------*/
GtkType
BlueBin :: child_type_vfunc() const                             throw ()
{
    return child ? G_TYPE_NONE : Gtk::Widget::get_type();
}


/*------------------------------------------------------------------------------
 *  Handle the map event.
 *----------------------------------------------------------------------------*/
void
BlueBin :: on_map()                                             throw ()
{
    Gtk::Bin::on_map();
}


/*------------------------------------------------------------------------------
 *  Handle the unmap event.
 *----------------------------------------------------------------------------*/
void
BlueBin :: on_unmap()                                           throw ()
{
    Gtk::Bin::on_unmap();
}


/*------------------------------------------------------------------------------
 *  Handle the realize event.
 *----------------------------------------------------------------------------*/
void
BlueBin :: on_realize()                                         throw ()
{
    Gtk::Bin::on_realize();

    if (!gdkWindow) {
        // create the Gdk::Window, if it didn't exist before

        GdkWindowAttr       attributes;
        memset(&attributes, 0, sizeof(attributes));

        Gtk::Allocation     allocation = get_allocation();

        // set initial position and size of the Gdk::Window
        attributes.x      = allocation.get_x();
        attributes.y      = allocation.get_y();
        attributes.width  = allocation.get_width();
        attributes.height = allocation.get_height();

        attributes.event_mask  = get_events () | Gdk::EXPOSURE_MASK; 
        attributes.window_type = GDK_WINDOW_CHILD;
        attributes.wclass      = GDK_INPUT_OUTPUT;


        gdkWindow = Gdk::Window::create(get_window(),
                                        &attributes,
                                        GDK_WA_X | GDK_WA_Y);
        unset_flags(Gtk::NO_WINDOW);
        set_window(gdkWindow);

        modify_bg(Gtk::STATE_NORMAL, bgColor);

        // make the widget receive expose events
        gdkWindow->set_user_data(gobj());
        
        // allocate a GC for use in on_expose_event()
        gc = Gdk::GC::create(gdkWindow);
    }
}


/*------------------------------------------------------------------------------
 *  Handle the unrealize event.
 *----------------------------------------------------------------------------*/
void
BlueBin :: on_unrealize()                                   throw ()
{
    gdkWindow.clear();
    gc.clear();

    Gtk::Bin::on_unrealize();
}


/*------------------------------------------------------------------------------
 *  Handle the expose event.
 *----------------------------------------------------------------------------*/
bool
BlueBin :: on_expose_event(GdkEventExpose* event)           throw ()
{
    if (event->count > 0) {
        return false;
    }  

    if (gdkWindow) {
        gdkWindow->clear();

        int     width  = get_width();
        int     height = get_height();
        int     x;
        int     maxX;
        int     y;
        int     maxY;

        renderImage(cornerImages->topLeftImage, 0, 0);

        // draw the top side as many times as necessary
        x    = cornerImages->topLeftImage->get_width();
        maxX = width - cornerImages->topRightImage->get_width();
        while (x < maxX) {
            renderImage(cornerImages->topImage, x, 0);
            x += cornerImages->topImage->get_width();
        }

        renderImage(cornerImages->topRightImage,
                    width - cornerImages->topRightImage->get_width(),
                    0);

        // draw the left side as many times as necessary
        y    = cornerImages->topLeftImage->get_height();
        maxY = height - cornerImages->bottomLeftImage->get_height();
        while (y < maxY) {
            renderImage(cornerImages->leftImage, 0, y);
            y += cornerImages->leftImage->get_height();
        }

        renderImage(cornerImages->bottomLeftImage,
                    0,
                    height - cornerImages->bottomLeftImage->get_height());

        // draw the right side as many times as necessary
        y    = cornerImages->topRightImage->get_height();
        maxY = height - cornerImages->bottomRightImage->get_height();
        while (y < maxY) {
            renderImage(cornerImages->rightImage,
                        width - cornerImages->rightImage->get_width(),
                        y);
            y += cornerImages->rightImage->get_height();
        }

        // draw the bottom side as many times as necessary
        x    = cornerImages->bottomLeftImage->get_width();
        maxX = width - cornerImages->bottomRightImage->get_width();
        while (x < maxX) {
            renderImage(cornerImages->bottomImage,
                        x,
                        height - cornerImages->bottomImage->get_height());
            x += cornerImages->bottomImage->get_width();
        }

        renderImage(cornerImages->bottomRightImage,
                    width - cornerImages->bottomRightImage->get_width(),
                    height - cornerImages->bottomRightImage->get_height());
    }

    Gtk::Bin::on_expose_event(event);

    return false;
}


/*------------------------------------------------------------------------------
 *  Render an image
 *----------------------------------------------------------------------------*/
void
BlueBin :: renderImage(Glib::RefPtr<Gdk::Pixbuf>   image,
                       int                         x,
                       int                         y)          throw ()
{
    image->render_to_drawable(gdkWindow,
                              get_style()->get_black_gc(),
                              0, 0,
                              x,
                              y,
                              image->get_width(),
                              image->get_height(),
                              Gdk::RGB_DITHER_NONE,
                              0, 0);
}

