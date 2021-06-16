<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Client
 *
<<<<<<< HEAD
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
=======
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
>>>>>>> upstream/staging
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

require_once __DIR__ . '/stubs/JMediawikiObjectMock.php';

/**
 * Test class for JMediawikiCategories.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Mediawiki
 *
<<<<<<< HEAD
 * @since       12.3
=======
 * @since       3.1.4
>>>>>>> upstream/staging
 */
class JMediawikiObjectTest extends \PHPUnit\Framework\TestCase
{
	/**
	 * @var    JRegistry  Options for the Mediawiki object.
<<<<<<< HEAD
	 * @since  12.3
=======
	 * @since  3.1.4
>>>>>>> upstream/staging
	 */
	protected $options;

	/**
	 * @var    JMediawikiHttp  Mock client object.
<<<<<<< HEAD
	 * @since  12.3
=======
	 * @since  3.1.4
>>>>>>> upstream/staging
	 */
	protected $client;

	/**
	 * @var    JMediawikiCategories  Object under test.
<<<<<<< HEAD
	 * @since  12.3
=======
	 * @since  3.1.4
>>>>>>> upstream/staging
	 */
	protected $object;

	/**
	 * @var    string  Sample xml string.
<<<<<<< HEAD
	 * @since  12.3
=======
	 * @since  3.1.4
>>>>>>> upstream/staging
	 */
	protected $sampleString = '<a><b></b><c></c></a>';

	/**
	 * @var    string  Sample xml error message.
<<<<<<< HEAD
	 * @since  12.3
=======
	 * @since  3.1.4
>>>>>>> upstream/staging
	 */
	protected $errorString = '<message>Generic Error</message>';

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @access protected
	 *
	 * @return void
	 */
	protected function setUp()
	{
		$this->options = new JRegistry;
		$this->client = $this->getMockBuilder('JMediawikiHttp')->setMethods(array('get', 'post', 'delete', 'patch', 'put'))->getMock();

		$this->object = new JMediawikiObjectMock($this->options, $this->client);
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 *
	 * @return void
	 *
	 * @see     \PHPUnit\Framework\TestCase::tearDown()
	 * @since   3.6
	 */
	protected function tearDown()
	{
		unset($this->options, $this->client, $this->object);
	}

	/**
	 * Tests the buildParameter method
	 *
	 * @return void
	 */
	public function testBuildParameter()
	{
		$this->assertThat(
			$this->object->buildParameter(array('Joomla', 'Joomla', 'Joomla')),
			$this->equalTo('Joomla|Joomla|Joomla')
		);
	}
}
