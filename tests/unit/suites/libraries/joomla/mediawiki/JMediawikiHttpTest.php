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

/**
 * Test class for JMediawikiHttp.
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
class JMediawikiHttpTest extends \PHPUnit\Framework\TestCase
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
	protected $transport;

	/**
	 * @var    JMediawikiHttp  Object under test.
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
				$this->transport = $this->getMockBuilder('JHttpTransportStream')
				->setMethods(array('request'))
				->setConstructorArgs(array($this->options))
				->setMockClassName('CustomTransport')
				->disableOriginalConstructor()
				->getMock();

		$this->object = new JMediawikiHttp($this->options, $this->transport);
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
		unset($this->options, $this->transport, $this->object);
	}

	/**
	 * Tests the get method
	 *
	 * @return void
	 */
	public function testGet()
	{
		$uri = new JUri('https://example.com/gettest');

		$this->transport->expects($this->once())
			->method('request')
			->with('GET', $uri)
			->will($this->returnValue('requestResponse'));

		$this->assertThat(
			$this->object->get('https://example.com/gettest'),
			$this->equalTo('requestResponse')
		);
	}

	/**
	 * Tests the post method
	 *
	 * @return void
	 */
	public function testPost()
	{
		$uri = new JUri('https://example.com/gettest');

		$this->transport->expects($this->once())
			->method('request')
			->with('POST', $uri, array())
			->will($this->returnValue('requestResponse'));

		$this->assertThat(
			$this->object->post('https://example.com/gettest', array()),
			$this->equalTo('requestResponse')
		);
	}
}
