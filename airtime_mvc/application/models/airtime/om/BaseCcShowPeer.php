<?php


/**
 * Base static class for performing query and update operations on the 'cc_show' table.
 *
 * 
 *
 * @package    propel.generator.airtime.om
 */
abstract class BaseCcShowPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'airtime';

	/** the table name for this class */
	const TABLE_NAME = 'cc_show';

	/** the related Propel class for this table */
	const OM_CLASS = 'CcShow';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'airtime.CcShow';

	/** the related TableMap class for this table */
	const TM_CLASS = 'CcShowTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 14;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'cc_show.ID';

	/** the column name for the NAME field */
	const NAME = 'cc_show.NAME';

	/** the column name for the URL field */
	const URL = 'cc_show.URL';

	/** the column name for the GENRE field */
	const GENRE = 'cc_show.GENRE';

	/** the column name for the DESCRIPTION field */
	const DESCRIPTION = 'cc_show.DESCRIPTION';

	/** the column name for the COLOR field */
	const COLOR = 'cc_show.COLOR';

	/** the column name for the BACKGROUND_COLOR field */
	const BACKGROUND_COLOR = 'cc_show.BACKGROUND_COLOR';

	/** the column name for the LIVE_STREAM_USING_AIRTIME_AUTH field */
	const LIVE_STREAM_USING_AIRTIME_AUTH = 'cc_show.LIVE_STREAM_USING_AIRTIME_AUTH';

	/** the column name for the LIVE_STREAM_USING_CUSTOM_AUTH field */
	const LIVE_STREAM_USING_CUSTOM_AUTH = 'cc_show.LIVE_STREAM_USING_CUSTOM_AUTH';

	/** the column name for the LIVE_STREAM_USER field */
	const LIVE_STREAM_USER = 'cc_show.LIVE_STREAM_USER';

	/** the column name for the LIVE_STREAM_PASS field */
	const LIVE_STREAM_PASS = 'cc_show.LIVE_STREAM_PASS';

	/** the column name for the LINKED field */
	const LINKED = 'cc_show.LINKED';

	/** the column name for the IS_LINKABLE field */
	const IS_LINKABLE = 'cc_show.IS_LINKABLE';

	/** the column name for the IMAGE_PATH field */
	const IMAGE_PATH = 'cc_show.IMAGE_PATH';

	/**
	 * An identiy map to hold any loaded instances of CcShow objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array CcShow[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('DbId', 'DbName', 'DbUrl', 'DbGenre', 'DbDescription', 'DbColor', 'DbBackgroundColor', 'DbLiveStreamUsingAirtimeAuth', 'DbLiveStreamUsingCustomAuth', 'DbLiveStreamUser', 'DbLiveStreamPass', 'DbLinked', 'DbIsLinkable', 'DbImagePath', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('dbId', 'dbName', 'dbUrl', 'dbGenre', 'dbDescription', 'dbColor', 'dbBackgroundColor', 'dbLiveStreamUsingAirtimeAuth', 'dbLiveStreamUsingCustomAuth', 'dbLiveStreamUser', 'dbLiveStreamPass', 'dbLinked', 'dbIsLinkable', 'dbImagePath', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::NAME, self::URL, self::GENRE, self::DESCRIPTION, self::COLOR, self::BACKGROUND_COLOR, self::LIVE_STREAM_USING_AIRTIME_AUTH, self::LIVE_STREAM_USING_CUSTOM_AUTH, self::LIVE_STREAM_USER, self::LIVE_STREAM_PASS, self::LINKED, self::IS_LINKABLE, self::IMAGE_PATH, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NAME', 'URL', 'GENRE', 'DESCRIPTION', 'COLOR', 'BACKGROUND_COLOR', 'LIVE_STREAM_USING_AIRTIME_AUTH', 'LIVE_STREAM_USING_CUSTOM_AUTH', 'LIVE_STREAM_USER', 'LIVE_STREAM_PASS', 'LINKED', 'IS_LINKABLE', 'IMAGE_PATH', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'name', 'url', 'genre', 'description', 'color', 'background_color', 'live_stream_using_airtime_auth', 'live_stream_using_custom_auth', 'live_stream_user', 'live_stream_pass', 'linked', 'is_linkable', 'image_path', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('DbId' => 0, 'DbName' => 1, 'DbUrl' => 2, 'DbGenre' => 3, 'DbDescription' => 4, 'DbColor' => 5, 'DbBackgroundColor' => 6, 'DbLiveStreamUsingAirtimeAuth' => 7, 'DbLiveStreamUsingCustomAuth' => 8, 'DbLiveStreamUser' => 9, 'DbLiveStreamPass' => 10, 'DbLinked' => 11, 'DbIsLinkable' => 12, 'DbImagePath' => 13, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('dbId' => 0, 'dbName' => 1, 'dbUrl' => 2, 'dbGenre' => 3, 'dbDescription' => 4, 'dbColor' => 5, 'dbBackgroundColor' => 6, 'dbLiveStreamUsingAirtimeAuth' => 7, 'dbLiveStreamUsingCustomAuth' => 8, 'dbLiveStreamUser' => 9, 'dbLiveStreamPass' => 10, 'dbLinked' => 11, 'dbIsLinkable' => 12, 'dbImagePath' => 13, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::NAME => 1, self::URL => 2, self::GENRE => 3, self::DESCRIPTION => 4, self::COLOR => 5, self::BACKGROUND_COLOR => 6, self::LIVE_STREAM_USING_AIRTIME_AUTH => 7, self::LIVE_STREAM_USING_CUSTOM_AUTH => 8, self::LIVE_STREAM_USER => 9, self::LIVE_STREAM_PASS => 10, self::LINKED => 11, self::IS_LINKABLE => 12, self::IMAGE_PATH => 13, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NAME' => 1, 'URL' => 2, 'GENRE' => 3, 'DESCRIPTION' => 4, 'COLOR' => 5, 'BACKGROUND_COLOR' => 6, 'LIVE_STREAM_USING_AIRTIME_AUTH' => 7, 'LIVE_STREAM_USING_CUSTOM_AUTH' => 8, 'LIVE_STREAM_USER' => 9, 'LIVE_STREAM_PASS' => 10, 'LINKED' => 11, 'IS_LINKABLE' => 12, 'IMAGE_PATH' => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'name' => 1, 'url' => 2, 'genre' => 3, 'description' => 4, 'color' => 5, 'background_color' => 6, 'live_stream_using_airtime_auth' => 7, 'live_stream_using_custom_auth' => 8, 'live_stream_user' => 9, 'live_stream_pass' => 10, 'linked' => 11, 'is_linkable' => 12, 'image_path' => 13, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. CcShowPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(CcShowPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(CcShowPeer::ID);
			$criteria->addSelectColumn(CcShowPeer::NAME);
			$criteria->addSelectColumn(CcShowPeer::URL);
			$criteria->addSelectColumn(CcShowPeer::GENRE);
			$criteria->addSelectColumn(CcShowPeer::DESCRIPTION);
			$criteria->addSelectColumn(CcShowPeer::COLOR);
			$criteria->addSelectColumn(CcShowPeer::BACKGROUND_COLOR);
			$criteria->addSelectColumn(CcShowPeer::LIVE_STREAM_USING_AIRTIME_AUTH);
			$criteria->addSelectColumn(CcShowPeer::LIVE_STREAM_USING_CUSTOM_AUTH);
			$criteria->addSelectColumn(CcShowPeer::LIVE_STREAM_USER);
			$criteria->addSelectColumn(CcShowPeer::LIVE_STREAM_PASS);
			$criteria->addSelectColumn(CcShowPeer::LINKED);
			$criteria->addSelectColumn(CcShowPeer::IS_LINKABLE);
			$criteria->addSelectColumn(CcShowPeer::IMAGE_PATH);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.NAME');
			$criteria->addSelectColumn($alias . '.URL');
			$criteria->addSelectColumn($alias . '.GENRE');
			$criteria->addSelectColumn($alias . '.DESCRIPTION');
			$criteria->addSelectColumn($alias . '.COLOR');
			$criteria->addSelectColumn($alias . '.BACKGROUND_COLOR');
			$criteria->addSelectColumn($alias . '.LIVE_STREAM_USING_AIRTIME_AUTH');
			$criteria->addSelectColumn($alias . '.LIVE_STREAM_USING_CUSTOM_AUTH');
			$criteria->addSelectColumn($alias . '.LIVE_STREAM_USER');
			$criteria->addSelectColumn($alias . '.LIVE_STREAM_PASS');
			$criteria->addSelectColumn($alias . '.LINKED');
			$criteria->addSelectColumn($alias . '.IS_LINKABLE');
			$criteria->addSelectColumn($alias . '.IMAGE_PATH');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(CcShowPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			CcShowPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(CcShowPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     CcShow
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = CcShowPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return CcShowPeer::populateObjects(CcShowPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(CcShowPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			CcShowPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      CcShow $value A CcShow object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(CcShow $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getDbId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A CcShow object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof CcShow) {
				$key = (string) $value->getDbId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CcShow object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     CcShow Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to cc_show
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
		// Invalidate objects in CcShowInstancesPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		CcShowInstancesPeer::clearInstancePool();
		// Invalidate objects in CcShowDaysPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		CcShowDaysPeer::clearInstancePool();
		// Invalidate objects in CcShowRebroadcastPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		CcShowRebroadcastPeer::clearInstancePool();
		// Invalidate objects in CcShowHostsPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		CcShowHostsPeer::clearInstancePool();
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row 
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = CcShowPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = CcShowPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = CcShowPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				CcShowPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (CcShow object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = CcShowPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = CcShowPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + CcShowPeer::NUM_COLUMNS;
		} else {
			$cls = CcShowPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			CcShowPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}
	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseCcShowPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseCcShowPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new CcShowTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? CcShowPeer::CLASS_DEFAULT : CcShowPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a CcShow or Criteria object.
	 *
	 * @param      mixed $values Criteria or CcShow object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(CcShowPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from CcShow object
		}

		if ($criteria->containsKey(CcShowPeer::ID) && $criteria->keyContainsValue(CcShowPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.CcShowPeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a CcShow or Criteria object.
	 *
	 * @param      mixed $values Criteria or CcShow object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(CcShowPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(CcShowPeer::ID);
			$value = $criteria->remove(CcShowPeer::ID);
			if ($value) {
				$selectCriteria->add(CcShowPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(CcShowPeer::TABLE_NAME);
			}

		} else { // $values is CcShow object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the cc_show table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(CcShowPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(CcShowPeer::TABLE_NAME, $con, CcShowPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			CcShowPeer::clearInstancePool();
			CcShowPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a CcShow or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or CcShow object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(CcShowPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			CcShowPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof CcShow) { // it's a model object
			// invalidate the cache for this single object
			CcShowPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(CcShowPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				CcShowPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			CcShowPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given CcShow object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      CcShow $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(CcShow $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(CcShowPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(CcShowPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(CcShowPeer::DATABASE_NAME, CcShowPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     CcShow
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = CcShowPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(CcShowPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(CcShowPeer::DATABASE_NAME);
		$criteria->add(CcShowPeer::ID, $pk);

		$v = CcShowPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(CcShowPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(CcShowPeer::DATABASE_NAME);
			$criteria->add(CcShowPeer::ID, $pks, Criteria::IN);
			$objs = CcShowPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseCcShowPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCcShowPeer::buildTableMap();

