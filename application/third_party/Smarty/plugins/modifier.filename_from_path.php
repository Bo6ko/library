<?php
/**
 * Smarty plugin
 * 
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty filename from path
 */
function smarty_modifier_filename_from_path($path)
{
	$last_break_position = strripos($path, "/"); //position of last "/"
	if ( $last_break_position === false )
	{
		$filename = $path;
	}
	else
	{
		$last_break_position = $last_break_position + 1; //skip also "/"
		$filename = substr($path, $last_break_position);
	}
	
	return $filename;
} 

?>