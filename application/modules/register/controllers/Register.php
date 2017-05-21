<?php
class Register extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		$this->load->view('register');  	
    }
	
		
	public function register(){
		//$this->load->model('Register');  
		//$simpan = $this->Register->data();
		if($simpan){
		  die("{\"total\":1, \"status\": \"Sukses\","
				. "\"results\":[{"
				. "\"message\":\"Data Telah Terekam. \""
				. "}]}");
			
		}else{
		  die("{\"total\":1, \"status\": \"Sukses\","
				. "\"results\":[{"
				. "\"message\":\"Data Gagal Terekam. \""
				. "}]}");
		}		
	}
	
}