<?php
/**
 * Smarty plugin
 * 
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty french month
 */
function smarty_modifier_french_month($datetime, $format=null)
{
	if(!isset($datetime) || empty($datetime) || $datetime == '0000-00-00 00:00:00')
	{
		return "";
	}
	
	//	get unixtime
	$time = strtotime( $datetime );
		
	//	get month number
	$m = (int)date('m', $time);
		
	$months = array( 1 => 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' );
	
	return $months[$m];
} 

?>