<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Feed
 *
<<<<<<< HEAD
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
=======
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
>>>>>>> upstream/staging
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Test class for JFeedPerson.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Feed
 * @since       3.1.4
 */
class JFeedPersonTest extends TestCase
{
	/**
	 * Tests the JFeedPerson::__construct() method.
	 *
	 * @return  void
	 *
	 * @since   3.1.4
	 */
	public function testConstruct()
	{
		$person = new JFeedPerson('Name', 'eMail', 'URI', 'test');

		$this->assertEquals($person->name, 'Name');
		$this->assertEquals($person->email, 'eMail');
		$this->assertEquals($person->uri, 'URI');
		$this->assertEquals($person->type, 'test');
	}
}
