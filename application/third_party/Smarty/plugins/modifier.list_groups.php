<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsModifier
 */
 
/**
 * Smarty truncate modifier plugin
 * 
 * Type:     modifier<br>
 * Name:     truncate<br>
 * Purpose:  Truncate a string to a certain length if necessary,
 *               optionally splitting in the middle of a word, and
 *               appending the $etc string or inserting $etc into the middle.
 * 
 * @link http://smarty.php.net/manual/en/language.modifier.truncate.php truncate (Smarty online manual)
 * @author Monte Ohrt <monte at ohrt dot com> 
 * @param string  $string      input string
 * @param integer $length      length of truncated text
 * @param string  $etc         end string
 * @param boolean $break_words truncate at word boundary
 * @param boolean $middle      truncate in the middle of text
 * @return string truncated string
 */
function smarty_modifier_list_groups($group_arr = array(), $columns = 4) {
    $html = '';
	if (empty($group_arr))
		return $html;
	
	$cnt_group = count($group_arr);
	$per_column = floor($cnt_group / $columns);
	$overage = $cnt_group % $columns;
	
	$width_pct = number_format(100 / $columns, 2);
	
	$br = 0;
	$end_flag = false;
	$html .= '<ul style="float: left; width: '.$width_pct.'%;">';
	foreach ($group_arr as $key => $group) {
		$br++;
		
		if ($end_flag) {
			$html .= '<li>'.$group['equipement_name'].'</li>';
			$overage--;
			$br--;
			$html .= '</ul><ul style="float: left; width: '.$width_pct.'%;">';
			$end_flag = false;
			continue;
		}
		
		$html .= '<li>'.$group['equipement_name'].'</li>';		
		
		if ($br % $per_column == 0) {
			if ($overage > 0) {
				$end_flag = true;
				continue;
			}
			
			if (!($cnt_group-1 == $key))
				$html .= '</ul><ul style="float: left; width: '.$width_pct.'%;">';
		}
		
	}
	$html .= '</ul>';
	
	return $html;
} 

?>