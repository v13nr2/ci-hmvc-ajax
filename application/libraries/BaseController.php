<?php
class BaseController extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('isLoggedIn')){
            $message = array(
                'success' => false,
                'message' => 'user session not found'
            );
            //$result = json_encode($message);
            //die($result);
			redirect('login');
        }
    }

}