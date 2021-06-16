<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Plugin
 *
<<<<<<< HEAD
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
=======
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
>>>>>>> upstream/staging
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

use Joomla\Registry\Registry;

/**
 * Stub plugin class for unit testing
 *
 * @package     Joomla.UnitTest
 * @subpackage  Plugin
 * @since       3.1
 */
class PlgSystemPrivate extends JPlugin
{
	/**
	 * Application object
	 *
	 * @var    JApplicationBase
	 * @since  3.1
	 */
	private $app;

	/**
	 * Database object
	 *
	 * @var    JDatabaseDriver
	 * @since  3.1
	 */
	private $db;

	/**
	 * Constructor
	 *
	 * @since   3.1
	 */
	public function __construct()
	{
		$this->autoloadLanguage = true;

		// Config array for JPlugin constructor
		$config = array();
		$config['name']   = 'Private';
		$config['type']   = 'System';
		$config['params'] = new Registry;

		$dispatcher = JEventDispatcher::getInstance();

		// Call the parent constructor
		parent::__construct($dispatcher, $config);
	}
}
