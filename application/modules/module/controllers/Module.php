<?php
class Module extends BaseController 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_modules(){
    	//get modules by profile id
		
		$this->load->model('Menu_model'); 
		 
    	$result = array(
    		'success' => true,
    		'data' => $data
    	);

    	echo json_encode($result);
    }

}