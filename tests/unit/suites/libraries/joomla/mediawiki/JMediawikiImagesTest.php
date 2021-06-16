<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Mediawiki
 *
<<<<<<< HEAD
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
=======
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
>>>>>>> upstream/staging
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Test class for JMediawikiImages.
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
class JMediawikiImagesTest extends \PHPUnit\Framework\TestCase
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
	 * @var    JMediawikiImages  Object under test.
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

		$this->object = new JMediawikiImages($this->options, $this->client);
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
	 * Tests the getImages method
	 *
	 * @return void
	 */
	public function testGetImages()
	{
		$returnData = new stdClass;
		$returnData->code = 200;
		$returnData->body = $this->sampleString;

		$this->client->expects($this->once())
			->method('get')
			->with('/api.php?action=query&prop=images&titles=Main Page&format=xml')
			->will($this->returnValue($returnData));

		$this->assertThat(
			$this->object->getImages(array('Main Page')),
			$this->equalTo(simplexml_load_string($this->sampleString))
		);
	}

	/**
	 * Tests the getImagesUsed method
	 *
	 * @return void
	 */
	public function testGetImagesUsed()
	{
		$returnData = new stdClass;
		$returnData->code = 200;
		$returnData->body = $this->sampleString;

		$this->client->expects($this->once())
			->method('get')
			->with('/api.php?action=query&generator=images&prop=info&titles=Main Page&format=xml')
			->will($this->returnValue($returnData));

		$this->assertThat(
			$this->object->getImagesUsed(array('Main Page')),
			$this->equalTo(simplexml_load_string($this->sampleString))
		);
	}

	/**
	 * Tests the getImageInfo method
	 *
	 * @return void
	 */
	public function testGetImageInfo()
	{
		$returnData = new stdClass;
		$returnData->code = 200;
		$returnData->body = $this->sampleString;

		$this->client->expects($this->once())
			->method('get')
			->with('/api.php?action=query&prop=imageinfo&format=xml')
			->will($this->returnValue($returnData));

		$this->assertThat(
			$this->object->getImageInfo(),
			$this->equalTo(simplexml_load_string($this->sampleString))
		);
	}

	/**
	 * Tests the enumerateImages method
	 *
	 * @return void
	 */
	public function testEnumerateImages()
	{
		$returnData = new stdClass;
		$returnData->code = 200;
		$returnData->body = $this->sampleString;

		$this->client->expects($this->once())
			->method('get')
			->with('/api.php?action=query&list=allimages&format=xml')
			->will($this->returnValue($returnData));

		$this->assertThat(
			$this->object->enumerateImages(),
			$this->equalTo(simplexml_load_string($this->sampleString))
		);
	}
}
