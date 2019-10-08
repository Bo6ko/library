<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty replace modifier plugin
 * 
 * Type:     modifier<br>
 * Name:     replace<br>
 * Purpose:  simple search/replace
 * 
 * @link http://smarty.php.net/manual/en/language.modifier.replace.php replace (Smarty online manual)
 * @author Monte Ohrt <monte at ohrt dot com> 
 * @author Uwe Tews 
 * @param string $string  input string
 * @param string $search  text to search for
 * @param string $replace replacement text
 * @return string 
 */
function smarty_modifier_phone($string, $separator_char = " ")
{
	$ret_str = '';
	
	$str_arr = str_split($string);
	$numbers_arr = array();
	if ($str_arr && is_array($str_arr) && count($str_arr) > 0) {
		foreach ($str_arr as $str) {
			if (is_numeric($str))
				$numbers_arr[] = $str;
		}
		
		if (count($numbers_arr) > 0) {
			$br = 0;
			foreach ($numbers_arr as $key => $num) {
				$br++;
				$ret_str .= $num;
				
				if ($br % 2 == 0)
					$ret_str .= $separator_char; 
			}
			
			if (substr($ret_str, -strlen($separator_char)) == $separator_char)
				$ret_str = substr($ret_str, 0, -strlen($separator_char));
		}
	}
	
	return $ret_str; 
} 

?>