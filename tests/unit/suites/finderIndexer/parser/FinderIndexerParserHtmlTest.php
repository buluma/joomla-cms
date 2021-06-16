<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  com_finder
 *
<<<<<<< HEAD
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
=======
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
>>>>>>> upstream/staging
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

require_once JPATH_ADMINISTRATOR . '/components/com_finder/helpers/indexer/parser/html.php';

/**
 * Test class for FinderIndexerParserHtml.
 * Generated by PHPUnit on 2012-06-10 at 14:44:57.
 */
class FinderIndexerParserHtmlTest extends \PHPUnit\Framework\TestCase
{
	/**
	 * @var FinderIndexerParserHtml
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new FinderIndexerParserHtml;
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
		unset($this->object);
	}

	/**
	 * Method to test the parse and process methods.
	 *
	 * @covers  FinderIndexerParserHtml::parse
	 */
	public function testParse()
	{
		$testResult = 'massa elementum. Mauris consequat';

		$input = file_get_contents(dirname(__DIR__) . '/data/parseHtml.txt');

		$this->assertContains(
			$testResult,
			$this->object->parse($input)
		);
	}

	/**
	 * Test with parsing more complex HTML.
	 *
	 * @covers  FinderIndexerParserHtml::parse
	 */
	public function testParseComplex()
	{
		$testResult1 = 'to this text or tis thext using';
		$testResult2 = 'Microsoft web browser';
		$testResult3 = 'title';
		$testResult4 = 'title immediately';

		$input = file_get_contents(dirname(__DIR__) . '/data/parseHtml2.txt');
		$output = $this->object->parse($input);

		// String $testResult1 will only be present if <span> tags are removed.
		$this->assertContains(
			$testResult1,
			$output
		);

		// String $testResult2 is contained in an HTML attribute that should be removed.
		$this->assertNotContains(
			$testResult2,
			$output
		);

		// String $testResult3 will only be present if <h1> tag is removed
		// and replaced by a space.
		$this->assertContains(
			$testResult3,
			$output
		);

		// String $testResult4 will only be present if <h1> tag is removed
		// and replaced by exactly one space.
		$this->assertContains(
			$testResult4,
			$output
		);
	}

	/**
	 * Tests the removal of unwanted HTML blocks.
	 *
	 * @covers  FinderIndexerParserHtml::parse
	 */
	public function testRemoveBlocks()
	{
		$testResult1 = 'koala';
		$testResult2 = 'No JavaScript';
		$testResult3 = 'background';
		$testResult4 = 'This is a title';
		$testResult5 = 'an invalid block';

		$input = file_get_contents(dirname(__DIR__) . '/data/parseHtml2.txt');
		$output = $this->object->parse($input);

		// String $testResult1 is contained in a <script> block that should be removed.
		$this->assertNotContains(
			$testResult1,
			$output
		);

		// String $testResult2 is contained in a <noscript> block that should be removed.
		$this->assertNotContains(
			$testResult2,
			$output
		);

		// String $testResult3 is contained in a <style> block that should be removed.
		$this->assertNotContains(
			$testResult3,
			$output
		);

		// String $testResult4 is contained in a <head> block that should be removed.
		$this->assertNotContains(
			$testResult4,
			$output
		);

		// String $testResult5 is contained in an invalid <script> block
		// where the end tag does not match the start tag.
		$this->assertContains(
			$testResult5,
			$output
		);
	}

	/**
	 * Tests the parsing of HTML tags spanning the 2Kbyte boundary.
	 *
	 * @covers  FinderIndexerParserHtml::parse
	 */
	public function testBlockBoundary()
	{
		$testResult1 = 'some';

		$input = file_get_contents(dirname(__DIR__) . '/data/parseHtml3.txt');
		$output = $this->object->parse($input);

		// String $testResult1 is beyond the 2Kb boundary with a <script> tag
		// that spans the boundary.
		$this->assertContains(
			$testResult1,
			$output
		);
	}
}
