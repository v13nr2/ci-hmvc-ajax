<?php
class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->load->helper('form');
    $this->load->view('login');
  }

}