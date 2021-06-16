<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Log
 *
<<<<<<< HEAD
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
=======
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
>>>>>>> upstream/staging
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Inspector classes for the JLog package.
 */

/**
 * JLogInspector class.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Log
 * @since       1.7.0
 */
class JLogInspector extends JLog
{
	public $configurations;

	public $loggers;

	public $lookup;

	public $queue = array();

	/**
	 * Constructor.
	 */
	public function __construct()
	{
		return parent::__construct();
	}

	/**
	 * Test...
	 *
	 * @return void
	 */
	public static function clearInstance()
	{
		JLog::$instance == null;
	}

	/**
	 * Test...
	 *
	 * @param   JLogEntry  $entry  The entry to add.
	 *
	 * @return void
	 */
	public function addLogEntry(JLogEntry $entry)
	{
		$this->queue[] = $entry;

		return parent::addLogEntry($entry);
	}

	/**
	 * Test...
	 *
	 * @param   int     $priority  Priority.
	 * @param   string  $category  Category.
	 *
	 * @return void
	 */
	public function findLoggers($priority, $category)
	{
		return parent::findLoggers($priority, $category);
	}
}
