<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Model Extends CI_Model {

	protected $compte		= false;
	protected $manager		= false;

	public $primary_id;
	public $primary_table;

	public function __construct() {

		parent::__construct();

		$this->load->driver('cache');

	}


	#	===========================================================================================
	#   DATABASE helpers
	public function dbInsert( $table, $insert ) {

		$this->db->insert( $table, $insert );

		if ( $this->db->affected_rows() > 0 ) {

			$insert_id = $this->db->insert_id();

			return array( 'id' => $insert_id, 'message' => 'success' );

		}

		return array( 'id' => FALSE, 'message' => FALSE );

	}

	public function preparePagination ( $url = "" , $rows = 0 , $total_rows = 0 , $per_page = 0 , $cur_page = 1 ) {

		if ( $per_page === 0 ) {
			return  array('total'=>$total_rows,'pagination'=>false,'data'=>$rows);
		}

		if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
		$config['base_url']		= base_url().$url;
		$config['total_rows']	= $total_rows;
		$config['per_page']		= $per_page;
		$config['cur_page']		= $cur_page;
		$config['uri_segment']	= 5;
		$config['num_links']	= 3;
		$config['first_url']	= $config['base_url'].'?'.http_build_query($_GET);
		$this->pagination->initialize( $config );
		$pagination = $this->pagination->create_links();

		#	--------------------------
		if ( $total_rows > 0 ) {

			$cur_page		= ( !isset($cur_page) || empty($cur_page) ) ? 0 : intval($cur_page);
			if ( $rows ) {
				return  array('total'=>$total_rows,'pagination'=>$pagination,'data'=>$rows);
			}else{
				return  array('total'=>$total_rows,'pagination'=>$pagination,'data'=>false);
			}
		}

		return  array('total'=>$total_rows,'pagination'=>false,'data'=>false);
	}

}