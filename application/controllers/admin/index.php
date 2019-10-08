<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index() {
		//	smarty variables

		$this -> smarty -> assign('content', $this -> smarty -> fetch('admin/' . $this -> router -> fetch_class() . '/index.htm'));
		$this -> smarty -> display('admin/main.htm');
	}
	
}