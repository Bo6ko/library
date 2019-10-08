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
function smarty_modifier_bold_match($string, $query)
{
	$string = str_replace($query, '<strong>'.$query.'</strong>', $string);
	
	return $string;
} 

?>