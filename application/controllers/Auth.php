<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{ 
		   $this->load->library('form_validation');
		 
		   $this->form_validation->set_rules('username', 'Username', 'trim|required');
		   $this->form_validation->set_rules('password', 'Password', 'trim|required');
		 
		    if( $this->session->userdata('isLoggedIn') ) {
				redirect('home');
			} else {
				redirect('login');
			}		
	}
    public function register(){
		$this->load->model('Register');  
		$simpan = $this->Register->set_data();
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
	function show_login( $show_error = false ) {
		$data['error'] = $show_error;

		$this->load->helper('form');
		$this->load->view('login',$data);
	}
	
	public function login()
	{
		$this->load->model('User');  
		$email = $this->input->post('username');
		$pass  = $this->input->post('password');
		if( $email && $pass && $this->User->validate_user($email,$pass)) {
			$result = array(
				'success' => true,
				'message' => "Welcome to Proyecto."
			);
		  } else {
			$result = array(
				'success' => false,
				'message' => "User or Password not match."
			);
		  }
		  echo json_encode($result);
    }

        
        public function logout()
	{
			$this->session->unset_userdata('isLoggedIn');
			$this->session->unset_userdata('username');
            redirect('auth');
	}
	
	  function login_user() {
		  // Create an instance of the user model
		  $this->load->model('User');

		  // Grab the email and password from the form POST
		  $email = $this->input->post('username');
		  $pass  = $this->input->post('password');

		  //Ensure values exist for email and pass, and validate the user's credentials
		  if( $email && $pass && $this->User->validate_user($email,$pass)) {
			  // If the user is valid, redirect to the main view
			  redirect('home');
		  } else {
			  // Otherwise show the login screen with an error message.
			  redirect('login');
		  }
	  }
}
