<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_book_publishers extends MY_Model
{

	function __construct()
	{
		parent::__construct();

		$this->primary_column   = 'publisher_id';
		$this->primary_table    = TABLE_BOOK_PUBLISHERS;
	}

#	============================================================================
#	CREATE
	public function create( $post = array() ) {

		# Conver POST array to variables
		$post = array_map('trim', $post);
		extract( $post );

		if ( !isset($publisher_name) || empty($publisher_name) ) {
			return array('status' => FALSE, 'publisher_name_message' => 'This field can`t be empty');
		}

		if ( !isset($country_id) || empty($country_id) ) {
			return array('status' => FALSE, 'country_id_message' => 'You must choice Country!');
		} else if ( !$this->checkByCountryId($country_id) ) {
			return array('status' => FALSE, 'country_id_message' => 'This country is not exists!');
		}

		if ( !isset($publisher_city) || empty($publisher_city) ) {
			return array('status' => FALSE, 'publisher_city_message' => 'You must choice City!');
		}

		if ( !isset($publisher_address) || empty($publisher_address) ) {
			return array('status' => FALSE, 'publisher_address_message' => 'You must choice Address!');
		}

		if ( !isset($publisher_postcode) || empty($publisher_postcode) ) {
			return array('status' => FALSE, 'publisher_postcode_message' => 'You must choice Postcode!');
		}

		if ( !isset($publisher_email) || empty($publisher_email) ) {
			return array('status' => FALSE, 'publisher_email_message' => 'You must choice Email!');
		}

		if ( !isset($publisher_phone) || empty($publisher_phone) ) {
			return array('status' => FALSE, 'publisher_phone_message' => 'You must choice Phone!');
		}

		if ( !isset($publisher_domain) || empty($publisher_domain) ) {
			return array('status' => FALSE, 'publisher_domain_message' => 'You must choice Domain!');
		} else if ( $this->checkByDomain($publisher_domain) ) {
			return array('status' => FALSE, 'publisher_domain_message' => 'This domain already exists!');
		}

		if ( !isset($publisher_bulstat) || empty($publisher_bulstat) ) {
			return array('status' => FALSE, 'publisher_bulstat_message' => 'You must choice Bulstat!');
		}

		if ( !isset($administrator_id) || empty($administrator_id) ) {
			return array('status' => FALSE, 'administrator_id_message' => 'You must choice Administrator!');
		} else if ( !$this->checkByAdministratorId($administrator_id) ) {
			return array('status' => FALSE, 'administrator_id_message' => 'Don`t exists administrator with this name!');
		}

		#	Insert
		$insert = array(
			'country_id'					=> $country_id,
			'publisher_name'				=> $publisher_name,
			'publisher_city'				=> $publisher_city,
			'publisher_address'				=> $publisher_address,
			'publisher_postcode'			=> $publisher_postcode,
			'publisher_email'				=> $publisher_email,
			'publisher_phone'				=> $publisher_phone,
			'publisher_domain'				=> $publisher_domain,
			'publisher_bulstat'				=> $publisher_bulstat,
			'administrator_id'				=> $administrator_id,
			'created'				        => date( 'Y-m-d H-i-s' ),
			'status'                        => 1
		);

		return $this->dbInsert( $this->primary_table, $insert );

	}

	#	============================================================================
	#	UPDATE
	public function update( $post = array(), $id = 0 ) {

		# Conver POST array to variables
		$post = array_map('trim', $post);
		extract( $post );

		if ( isset($publisher_id) && !empty($publisher_id) ) {
			$publisher_id = intval($publisher_id);
		}

		if ( isset($country_id) && !empty($country_id) ) {
			$country_id = intval($country_id);
		}

		if ( isset($publisher_name) && !empty($publisher_name) ) {
			$publisher_name = trim($publisher_name);
		}

		if ( isset($publisher_city) && !empty($publisher_city) ) {
			$publisher_city = trim($publisher_city);
		}

		if ( isset($publisher_address) && !empty($publisher_address) ) {
			$publisher_address = trim($publisher_address);
		}

		if ( isset($publisher_postcode) && !empty($publisher_postcode) ) {
			$publisher_postcode = trim($publisher_postcode);
		}

		if ( isset($publisher_email) && !empty($publisher_email) ) {
			$publisher_email = trim($publisher_email);
		}

		if ( isset($publisher_phone) && !empty($publisher_phone) ) {
			$publisher_phone = trim($publisher_phone);
		}

		if ( isset($publisher_domain) && !empty($publisher_domain) ) {
			$publisher_domain = trim($publisher_domain);
		}

		if ( isset($publisher_bulstat) && !empty($publisher_bulstat) ) {
			$publisher_bulstat = trim($publisher_bulstat);
		}

		if ( isset($administrator_id) && !empty($administrator_id) ) {
			$administrator_id = intval($administrator_id);
		}

		#	Insert
		$update = array(
			'country_id'					=> $country_id,
			'publisher_name'				=> $publisher_name,
			'publisher_city'				=> $publisher_city,
			'publisher_address'				=> $publisher_address,
			'publisher_postcode'			=> $publisher_postcode,
			'publisher_email'				=> $publisher_email,
			'publisher_phone'				=> $publisher_phone,
			'publisher_domain'				=> $publisher_domain,
			'publisher_bulstat'				=> $publisher_bulstat,
			'administrator_id'				=> $administrator_id,
		);

		var_dump('test');

		return $this->update( $this->primary_table , $update , array( $this->primary_column => $publisher_id ) );
		return array('status'=>true,'message'=>'<p>Success</p>');

	}


#	============================================================================
#	SEARCH
	public function search( $url = "" , $per_page = 10 , $cur_page = 1 ) {

		# Convert GET array to variables
		extract( $_GET );

		$this->db->select( '*' );
		$this->db->from( $this->primary_table );
		$this->db->join(TABLE_COUNTRIES, TABLE_COUNTRIES . '.country_id = ' . $this->primary_table . '.country_id' , 'left');
		$this->db->join(TABLE_ADMINISTRATORS, TABLE_ADMINISTRATORS . '.administrator_id = ' . $this->primary_table . '.administrator_id' , 'left');


		if ( isset($publisher_id) &&  !empty($publisher_id) && count($publisher_id) > 0 ) {
			$publisher_id = intval($publisher_id);
			$this->db->where($this->primary_table . '.' . $this->primary_column, $publisher_id);
		}

		if ( isset($publisher_name) &&  !empty($publisher_name)) {
			$publisher_name = trim($publisher_name);
			$this->db->like($this->primary_table . '.publisher_name', $publisher_name);
		}

		if ( isset($country_id) &&  !empty($country_id) && count($country_id) > 0 ) {
			$country_id = intval($country_id);
			$this->db->where($this->primary_table . '.country_id', $country_id);
		}

		if ( isset($publisher_city) &&  !empty($publisher_city)) {
			$publisher_city = trim($publisher_city);
			$this->db->like($this->primary_table . '.publisher_city', $publisher_city);
		}

		if ( isset($publisher_address) &&  !empty($publisher_address)) {
			$publisher_address = trim($publisher_address);
			$this->db->like($this->primary_table . '.publisher_address', $publisher_address);
		}

		if ( isset($publisher_bulstat) &&  !empty($publisher_bulstat)) {
			$publisher_bulstat = trim($publisher_bulstat);
			$this->db->like($this->primary_table . '.publisher_bulstat', $publisher_bulstat);
		}

		if ( isset($publisher_postcode) &&  !empty($publisher_postcode)) {
			$publisher_postcode = trim($publisher_postcode);
			$this->db->like($this->primary_table . '.publisher_postcode', $publisher_postcode);
		}

		if ( isset($publisher_phone) &&  !empty($publisher_phone)) {
			$publisher_phone = trim($publisher_phone);
			$this->db->like($this->primary_table . '.publisher_phone', $publisher_phone);
		}

		if ( isset($publisher_email) &&  !empty($publisher_email)) {
			$publisher_email = trim($publisher_email);
			$this->db->like($this->primary_table . '.publisher_email', $publisher_email);
		}

		if ( isset($publisher_domain) &&  !empty($publisher_domain)) {
			$publisher_domain = trim($publisher_domain);
			$this->db->like($this->primary_table . '.publisher_domain', $publisher_domain);
		}

		if ( isset($administrator_id) &&  !empty($administrator_id)) {
			$administrator_id = trim($administrator_id);
			$this->db->like($this->primary_table . '.administrator_id', $administrator_id);
		}

		if ( isset($sort_by) &&  !empty($sort_by) && isset($order_by) &&  !empty($order_by) ) {
			$this->db->order_by($this->primary_table . '.' . $sort_by, $order_by);
		}

		$this->db->where( $this->primary_table . '.status', 1 );
		//$this->db->order_by( $this->primary_table . '.publisher_name ASC' );

		#	order
		$this->db->order_by( $this->primary_table . '.' . $this->primary_column . ' asc' );

		#	limit, offset
		//$this->db->limit($per_page, $cur_page);

		$result     = $this->db->get(); //echo $this->db->last_query();
		$rows       = ( $result->num_rows() > 0 ) ? array_slice( $result->result_array(), $cur_page, $per_page ) : FALSE;
		$total_rows	= $result->num_rows();//$this->count_search();

		return $this->preparePagination ( $url , $rows , $total_rows , $per_page , $cur_page );

	}

#	============================================================================
#	GET
	public function getById( $id = 0 ) {

		$this->db->select( '*' );
		$this->db->from( $this->primary_table );
		$this->db->where( $this->primary_table . '.' . $this->primary_column, $id );

		$result = $this->db->get();
		if ( $result->num_rows() > 0 )
		{
			$row = $result->row_array();
			return $row;
		}
		return false;

	}

#	============================================================================
#	GET
	public function checkByDomain( $domain ) {

		if ( !isset($domain) && empty($domain) ) {
			return FALSE;
		}

		$this->db->select( '*' );
		$this->db->from( $this->primary_table );
		$this->db->where( $this->primary_table . '.publisher_domain', trim($domain) );

		$result = $this->db->get(); //echo $this->db->last_query(); exit;
		return ( $result->num_rows() > 0 ) ? TRUE : FALSE;

	}

	public function checkByCountryId( $country_id ) {

		if ( !isset($country_id) && empty($country_id) && intval($country_id) <= 0 ) {
			return FALSE;
		}

		$this->db->select( '*' );
		$this->db->from( $this->primary_table );
		$this->db->where( $this->primary_table . '.country_id', intval($country_id) );

		$result = $this->db->get(); //echo $this->db->last_query(); exit;
		return ( $result->num_rows() > 0 ) ? TRUE : FALSE;

	}

	public function checkByAdministratorId( $administrator_id ) {

		if ( !isset($administrator_id) && empty($administrator_id) && intval($administrator_id) <= 0 ) {
			return FALSE;
		}

		$this->db->select( '*' );
		$this->db->from( $this->primary_table );
		$this->db->where( $this->primary_table . '.administrator_id', intval($administrator_id) );

		$result = $this->db->get(); //echo $this->db->last_query(); exit;
		return ( $result->num_rows() > 0 ) ? TRUE : FALSE;

	}


}