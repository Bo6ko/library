<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH."third_party/Twitter/twitter_proxy.class.php";

class Twitter extends TwitterProxy {
	
	function __construct()
	{
		parent::__construct();
	}
}
