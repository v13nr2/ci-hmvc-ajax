<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_frame extends BaseController {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->load->view('data_frame/frame');
	}

	
}
