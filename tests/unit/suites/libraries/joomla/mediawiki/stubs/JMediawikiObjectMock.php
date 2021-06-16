<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Application
 *
<<<<<<< HEAD
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
=======
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
>>>>>>> upstream/staging
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * JMediawikiObjectMock class.
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
class JMediawikiObjectMock extends JMediawikiObject
{
	/**
	 * Method to build and return a full request URL for the request.  This method will
	 * add appropriate pagination details if necessary and also prepend the API url
	 * to have a complete URL for the request.
	 *
	 * @param   string  $path  URL to inflect
	 *
	 * @return  string   The request URL.
	 *
<<<<<<< HEAD
	 * @since   12.3
=======
	 * @since   3.1.4
>>>>>>> upstream/staging
	 */
	public function fetchUrl($path)
	{
		return parent::fetchUrl($path);
	}

	/**
	 * Method to build request parameters from a string array.
	 *
	 * @param   array  $params  string array that contains the parameters
	 *
	 * @return  string   request parameter
	 *
<<<<<<< HEAD
	 * @since   12.3
=======
	 * @since   3.1.4
>>>>>>> upstream/staging
	 */
	public function buildParameter(array $params)
	{
		return parent::buildParameter($params);
	}

	/**
	 * Method to validate response for errors
	 *
<<<<<<< HEAD
	 * @param   JHttpresponse  $response  reponse from the mediawiki server
	 *
	 * @return  Object
	 *
	 * @since   12.3
=======
	 * @param   JHttpresponse  $response  response from the mediawiki server
	 *
	 * @return  Object
	 *
	 * @since   3.1.4
>>>>>>> upstream/staging
	 */
	public function validateResponse($response)
	{
		return parent::validateResponse($response);
	}
}
