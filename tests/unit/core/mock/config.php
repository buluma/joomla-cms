<?php
/**
 * @package    Joomla.Test
 *
<<<<<<< HEAD
 * @copyright  Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
=======
 * @copyright  Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
>>>>>>> upstream/staging
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Class to mock JConfig.
 *
 * @package  Joomla.Test
 * @since    3.0.0
 */
class TestMockConfig
{
	/**
	 * Creates and instance of the mock JApplication object.
	 *
	 * @param   object  $test  A test object.
	 *
	 * @return  object
	 *
	 * @since   1.7.3
	 */
	public static function create($test)
	{
		// Collect all the relevant methods in JConfig.
		$methods = array(
			'get',
			'set'
		);

		// Build the mock object.
		$mockObject = $test->getMockBuilder('JConfig')
					->setMethods($methods)
					->setConstructorArgs(array())
					->setMockClassName('')
					->disableOriginalConstructor()
					->getMock();

		return $mockObject;
	}
}
