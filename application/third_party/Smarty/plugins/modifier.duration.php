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
function smarty_modifier_duration( $duration = false )
{
	
	$dtF = new DateTime("@0");
    $dtT = new DateTime("@$duration");
    return $dtF->diff($dtT)->format('<strong>%H</strong>h. <strong>%I</strong>min. <strong>%s</strong>sec.');
   // return $dtF->diff($dtT)->format('%a days, %h hours, %i minutes and %s seconds');
	
	//echo gmdate("H : i : s.", $duration);
	
	$f = ":";
	
	if( !isset($duration) || empty($duration) ) {
		return "";
	}
	
	return sprintf("%02d%s%02d%s%02d", floor($duration/3600), $f, ($duration/60)%60, $f, $duration%60);
	
	//	http://stackoverflow.com/questions/3172332/convert-seconds-to-hourminutesecond
} 

?>