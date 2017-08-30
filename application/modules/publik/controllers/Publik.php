<?php
class Publik extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

   public function index()
    {
		
		$data['title'] = 'Form Barang';
		$this->load->view('publik/cms/index');
    }



	
}