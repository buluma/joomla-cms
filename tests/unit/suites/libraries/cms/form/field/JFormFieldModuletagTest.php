<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Form
 *
<<<<<<< HEAD
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
=======
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
>>>>>>> upstream/staging
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Test class for JFormFieldModuletag.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Form
 * @since       3.1
 */
class JFormFieldModuletagTest extends \PHPUnit\Framework\TestCase
{
	/**
	 * Tests the getInput method.
	 *
	 * @return  void
	 *
	 * @since   3.1
	 */
	public function testGetInput()
	{
		$field = new JFormFieldModuletag;
		$field->setup(
			new SimpleXMLElement('<field name="moduletag" type="moduletag" label="Module Tag" description="Module Tag listing" />'),
			'value'
		);

		$this->assertContains(
			'<option value="nav">nav</option>',
			$field->input,
			'The getInput method should return an option with various opening tags, verify nav tag is in list.'
		);
	}
}
