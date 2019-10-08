<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH."third_party/Smarty/Smarty.class.php";

class CI_Smarty extends Smarty {
	
	function __construct()
	{
		parent::__construct();
		
		$this->template_dir		= SMARTY_TEMPLATE_DIR;
		$this->compile_dir		= SMARTY_COMPILE_DIR;
		$this->cache_dir		= SMARTY_CACHE_DIR;
	}
}
