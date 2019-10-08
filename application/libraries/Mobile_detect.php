<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH."third_party/MobileDetect/Mobile_Detect.php";

class CI_Mobile_detect extends Mobile_Detect {
	
	function __construct()
	{
		parent::__construct();
	}
}
