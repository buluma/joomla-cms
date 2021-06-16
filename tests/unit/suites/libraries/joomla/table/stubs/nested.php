<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Table
 *
<<<<<<< HEAD
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
=======
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
>>>>>>> upstream/staging
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * NestedTable class.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Table
 * @since       3.0.0
 */
class NestedTable extends JTableNested
{
	public static $unlocked = false;

	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  $db  Database driver object.
	 *
	 * @since   3.0.0
	 */
	public function __construct($db)
	{
		parent::__construct('#__categories', 'id', $db);
	}

	/**
	 * Test...
	 *
	 * @return void
	 */
	public static function mockUnlock()
	{
		self::$unlocked = true;
	}
	
	/**
	 * Method to reset the root_id
	 *
	 * @return void
	 */
	public static function resetRootId()
	{
		self::$root_id = 0;
	}
}
