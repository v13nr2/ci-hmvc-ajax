<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends BaseController {

	public function __construct()
	{
		parent::__construct();
		
		if( !$this->session->userdata('isLoggedIn') ) {
			redirect('login');
		}
		
		$this->load->model('Chat_model');
	}
	function index(){
	}
	
	function getChat(){
		$data['list'] = $this->Chat_model->get_chat();
		foreach($data['list'] as $row)
        {	
			echo ' <div class="item"><img src="'.base_url('assets/AdminLTE-2.3.11/dist/img/avatar04.png').'" alt="user image" class="offline">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i>'.substr($row["waktu"],11,5).'</small>
                    '.$row["usename"].'
                  </a>
                  '.$row["teks"].'
                </p></div>';
				
        } 
	}
	
	function addChat(){
		
		$this->Chat_model->addChat();
	}

}
