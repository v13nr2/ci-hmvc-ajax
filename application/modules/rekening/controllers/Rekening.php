<?php
class Rekening extends BaseController 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

		$this->load->view('rekening/rekening_v.php');
		    	
    }
	
	public function utama(){
		
	}
}
