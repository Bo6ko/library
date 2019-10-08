<?php
/**
 * Smarty plugin
 * 
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty french day
 */
function smarty_modifier_french_phone($str)
{
	$new_str = '';
	$str = str_replace(" ", "", $str);
	$str_arr = str_split($str);
	if ( is_array($str_arr) && count($str_arr) ) {
		$br = 0;
		foreach ($str_arr as $char) {
			$new_str .= $char;
			$br++;
			
			if ( $br % 2 == 0 ) {
				$new_str .= " ";
				$br = 0;
			}
		}
	}
	
	return trim($new_str);
} 

?>