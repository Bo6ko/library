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
function smarty_modifier_contact_origin( $origin_concession_id )
{
	if ( empty($origin_concession_id) ) {
		return '';
	}
	
	if ( $origin_concession_id == 1 ) {
		return 'Groupe site';
	}
	
	if ( $origin_concession_id > 1 ) {
		return 'Concession site';
	}
} 

?>