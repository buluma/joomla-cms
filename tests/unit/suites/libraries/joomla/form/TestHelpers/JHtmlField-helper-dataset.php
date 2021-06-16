<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  HTML
 *
<<<<<<< HEAD
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
=======
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
>>>>>>> upstream/staging
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Data set class for JHtmlSelect.
 *
 * @package     Joomla.UnitTest
 * @subpackage  HTML
 * @since       3.1
 */
class JHtmlFieldTest_DataSet
{
	public static $setupTest = array(
		'NameValueIdTitleLabel' => array(
			array(
				'name' => 'myName',
				'value' => 'The text field.',
				'title' => 'My Title',
				'label' => '<label id="myId-lbl" for="myId" class="hasPopover" title="My Title" data-content="The description.">My Title</label>',
				'unexisting' => null,
			),
			'<field name="myName" type="text" id="myId" label="My Title" description="The description."  value="Text Field" />',
			'The text field.',
		),

		'MultipleAttributeFormGroup' => array(
			array(
				'id' => 'params_myId',
				'name' => 'params[myName]',
				'group' => 'params',
			),
			'<field name="myName" type="text" id="myId"/>',
			'green',
			'params',
		),

		'HiddenFieldAttribute' => array(
			array(
				'hidden' => true,
			),
			'<field name="myName" type="text" hidden="true" />',
			42,
		),

		'AutoGeneratedName' => array(
			array(
				'name' => '__field1',
			),
			'<field type="text" label="Title" description="The title." />',
			'',
		),

		'NestedGroup' => array(
			array(
				'id' => 'params_subparams_comment',
				'name' => 'params[subparams][comment]',
				'group' => 'params.subparams',
			),
			'<field type="text" name="comment" />',
			'My comment',
			'params.subparams',
		),

		'DisabledReadonly' => array(
			array(
				'disabled' => true,
				'readonly' => true,
			),
			'<field type="text" name="myName" disabled="true" readonly="true" />',
			'User',
		),

		'MultipleAttribute' => array(
			array(
				'multiple' => true,
			),
			'<field name="myName" type="text" id="myId" multiple="true" />',
			'green',
		),

		'NoClass' => array(
			array(
				'class' => '',
			),
			'<field type="text" name="myName" />',
			'',
		),

		'Class:inputbox' => array(
			array(
				'class' => 'inputbox',
			),
			'<field type="text" name="myName" class="inputbox" />',
			'',
		),

		'Class:with spaces ' => array(
			array(
				'class' => 'inputbox validate-numeric',
			),
			'<field type="text" name="myName" class="     inputbox      validate-numeric     " />',
			'',
		),

		'RequiredLabel' => array(
			array(
				'required' => true,
				'label' => '<label id="myId-lbl" for="myId" class="hasPopover required" title="My Title" data-content="The description.">My Title<span class="star">&#160;*</span></label>',
			),
			'<field name="myName" type="text" id="myId" required="true" label="My Title" description="The description." />',
			'',
		),

		'AutofocusFalse' => array(
			array(
				'autofocus' => false,
			),
			'<field type="text" name="myName" />',
			'',
		),

		'AutofocusTrue' => array(
			array(
				'autofocus' => true,
			),
			'<field type="text" name="myName" autofocus="true" />',
			'',
		),

		'AutocompleteOn' => array(
			array(
				'autocomplete' => 'on',
			),
			'<field type="text" name="myName" />',
			'',
		),

		'AutocompleteOff' => array(
			array(
				'autocomplete' => false,
			),
			'<field type="text" name="myName" autocomplete="false" />',
			'',
		),

		'SpellcheckTrue' => array(
			array(
				'spellcheck' => true,
			),
			'<field type="text" name="myName"  />',
			'',
		),

		'SpellcheckFalse' => array(
			array(
				'spellcheck' => false,
			),
			'<field type="text" name="myName" spellcheck="false" />',
			'',
		),

		'Inputmode' => array(
			array(
				'inputmode' => 'latin numeric',
			),
			'<field type="text" name="myName" inputmode="latin numeric" />',
			'',
		),

		'Size' => array(
			array(
				'size' => 51,
			),
			'<field type="text" name="myName" size="51" />',
			'',
		),

		'Size-Noninteger' => array(
			array(
				'size' => 51,
			),
			'<field type="text" name="myName" size="51thhhhhhh" />',
			'',
		),

		'Size-Noninteger2' => array(
			array(
				'size' => 0,
			),
			'<field type="text" name="myName" size="foobar" />',
			'',
		),

		'Hint' => array(
			array(
				'hint' => 'Placeholder text.',
			),
			'<field type="text" name="myName" hint="Placeholder text." />',
			'',
		),

		'NoValidate' => array(
			array(
				'validate' => null,
			),
			'<field type="text" name="myName" />',
			'',
		),

		'Validate' => array(
			array(
				'validate' => 'equals',
			),
			'<field type="text" name="myName" validate="equals" />',
			'',
		),

		'onChange' => array(
			array(
				'onchange' => 'iamchanged(this);',
			),
			'<field type="text" name="myName" onchange="iamchanged(this);" />',
			'',
		),

		'onClick' => array(
			array(
				'onclick' => 'iamclicked(this);',
			),
			'<field type="text" name="myName" onclick="iamclicked(this);" />',
			'',
		),

		'translateLabel' => array(
			array(
				'translateLabel' => false,
			),
			'<field type="text" name="myName" onclick="iamclicked(this);" translateLabel="false" />',
			'',
		),

		'translate_label' => array(
			array(
				'translateLabel' => false,
			),
			'<field type="text" name="myName" onclick="iamclicked(this);" translate_label="false" />',
			'',
		),

		'translateDescription' => array(
			array(
				'translateDescription' => false,
			),
			'<field type="text" name="myName" onclick="iamclicked(this);" translateDescription="false" />',
			'',
		),

		'translate_description' => array(
			array(
				'translateDescription' => false,
			),
			'<field type="text" name="myName" onclick="iamclicked(this);" translate_description="false" />',
			'',
		),

	);
}
