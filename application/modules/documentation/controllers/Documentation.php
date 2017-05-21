<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentation extends BaseController {

	public function __construct()
	{
		parent::__construct();
		
		
	}
	function index(){
		$this->load->view('documentation/index');
	}
	

}
