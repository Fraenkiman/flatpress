<?php

/**
 * Project:     SmartyValidate: Form Validator for the Smarty Template Engine
 * File:        validate_criteria.isURL.php
 * Author:      Monte Ohrt <monte at newdigitalgroup dot com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @link http://www.phpinsider.com/php/code/SmartyValidate/
 * @copyright 2001-2005 New Digital Group, Inc.
 * @author Monte Ohrt <monte at newdigitalgroup dot com>
 * @package SmartyValidate
 * @version 2.6-dev
 */

/**
 * test if a value is a valid URL
 *
 * @param string $value the value being tested
 * @param bool $empty if field can be empty
 * @param array $params validate parameter values
 * @param array $formvars form var values
 * @return bool
 */
function smarty_validate_criteria_isURL($value, $empty, &$params, &$formvars) {
	if (empty($value)) {
		return $empty;
	}

	return preg_match('!^http(s)?://[\w-]+\.[\w-]+(\S+)?$!i', $value)
		|| preg_match('!^http(s)?://localhost!', $value);
			// quick and dirty hack: review  --NoWhereMan
}

?>
