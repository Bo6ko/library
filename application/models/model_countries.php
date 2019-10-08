<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_countries extends MY_Model
{

	function __construct()
	{
		parent::__construct();

		$this->primary_column   = 'country_id';
		$this->primary_table    = TABLE_COUNTRIES;
	}

#	============================================================================
#	GET
	public function getAll( ) {

		$this->db->select( '*' );
		$this->db->from( $this->primary_table );

		$result = $this->db->get();
		return ( $result->num_rows() > 0 ) ? $result->result_array() : FALSE;

	}
}