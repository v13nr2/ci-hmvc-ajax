<?php
class Publik extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Model_publik');
    }

   public function index()
    {
		
		$data['title'] = 'Halaman Publik';
		$data["sosmed"] = $this->Model_publik->sosmed();
		$data["menu_1"] = $this->Model_publik->get_menu_1();
		$data["menu_2"] = $this->Model_publik->get_menu_2();
		$data["banner"] = $this->Model_publik->banner();
		$data["config"] = $this->Model_publik->config();
		$this->load->view("publik/cms/head.php", $data);
		$this->load->view('publik/cms/index', $data);
		$this->load->view("publik/cms/foot.php");
    }



	
}