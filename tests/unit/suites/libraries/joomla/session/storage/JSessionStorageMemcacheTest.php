<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Session
 *
<<<<<<< HEAD
 * @copyright  Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
=======
 * @copyright  Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
>>>>>>> upstream/staging
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Test class for JSessionStorageMemcache.
 *
<<<<<<< HEAD
 * @since  11.1
=======
 * @since  1.7.0
>>>>>>> upstream/staging
 */
class JSessionStorageMemcacheTest extends \PHPUnit\Framework\TestCase
{
	/**
	 * @var JSessionStorageMemcache
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return void
	 */
	protected function setUp()
	{
		parent::setUp();

		// Skip these tests if Memcache isn't available.
		if (!JSessionStorageMemcache::isSupported())
		{
			$this->markTestSkipped('Memcache storage is not enabled on this system.');
		}

		$this->object = JSessionStorage::getInstance('Memcache');
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 *
	 * @return void
	 */
	protected function tearDown()
	{

	}

	/**
	 * Test...
	 *
	 * @todo Implement testOpen().
	 *
	 * @return void
	 */
	public function testOpen()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement testClose().
	 *
	 * @return void
	 */
	public function testClose()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement testRead().
	 *
	 * @return void
	 */
	public function testRead()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement testWrite().
	 *
	 * @return void
	 */
	public function testWrite()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement testDestroy().
	 *
	 * @return void
	 */
	public function testDestroy()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGc().
	 *
	 * @return void
	 */
	public function testGc()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement testIsSupported().
	 *
	 * @return void
	 */
	public function testIsSupported()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}
}
