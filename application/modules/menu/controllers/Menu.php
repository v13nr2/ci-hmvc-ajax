<?php
class Menu extends BaseController 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    	
    }
    public function get_menu(){
    	//get modules by profile id
		
		$this->load->model('Menu_model'); 
		$profile_id = $this->session->userdata('id_perfil');
		$data['menu'] = $this->Menu_model->get_Module($profile_id);
		$data['menu2'] = $this->Menu_model->get_Module2($profile_id);
		$data['menu3'] = $this->Menu_model->get_Module($profile_id);
	
    }

}