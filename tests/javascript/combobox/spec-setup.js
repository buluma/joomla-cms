/**
 * @package     Joomla.Tests
 * @subpackage  JavaScript Tests
 *
<<<<<<< HEAD
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
=======
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
>>>>>>> upstream/staging
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * @since       3.6.3
 * @version     1.0.0
 */

define(['jquery', 'text!testsRoot/combobox/fixtures/fixture.html', 'libs/combobox'], function ($, fixture) {
	$('body').append(fixture);

	$('div.combobox').ComboTransform({updateList : true});
});
