<?php
class Home extends BaseController 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    	$this->load->model('Menu_model'); 
		$profile_id = $this->session->userdata('id_perfil');
		$data['menu'] = $this->Menu_model->get_Module($profile_id);
		
		

		$this->load->view('home',$data);
		    	
    }
}