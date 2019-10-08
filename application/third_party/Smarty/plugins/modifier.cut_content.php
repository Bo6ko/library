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
function smarty_modifier_cut_content($string, $query)
{
//	$string = str_replace(array("’"), array("'"), $string);
	
	$pos = strpos($string, $query);
	$prepend_str = "<strong>...</strong>";
	$append_str = "...";
	$max_chars = 230;
	
	if ($pos !== false) {		
		$pos_start = $pos - ($max_chars / 2);
		$pos_end = $pos + ($max_chars / 2);


		if ($pos_start < 0) {
			$pos_start = 0;
			$pos_end = $max_chars;
			$prepend_str = "";
		}
		
		if ($pos_end > (strlen($string) - 1)) {
			$pos_end = strlen($string) - 1;
			$append_str = "";
		}


		return $prepend_str . mb_substr($string, $pos_start, $max_chars) . $append_str;
	}
	
	return mb_substr($string, 0, $max_chars) . $append_str;
} 

?>