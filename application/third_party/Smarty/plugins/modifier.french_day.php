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
function smarty_modifier_french_day($datetime)
{
	if(!isset($datetime) || empty($datetime) || $datetime == '0000-00-00 00:00:00')
	{
		return "";
	}
	
	//	get unixtime
	$time = strtotime( $datetime );
		
	//	get month number
	$d = (int)date('w', $time);
		
	$days = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
	
	return $days[$d];
} 

?>