<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller Extends CI_Controller {

	protected $json			= array("status"=>false,"message"=>"Error technique");
	protected $url			= false;
	protected $page			= false;
	protected $compte		= false;
	protected $controller	= false;

	public function __construct() {
		
		parent::__construct();
		
		//$this->output->enable_profiler(TRUE);
		
		$this->controller = $this -> router -> fetch_class();
		
		$this->load->driver('cache');
		
	}
}