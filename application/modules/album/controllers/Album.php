<?php
class Album extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('publik/Model_publik');
		$this->load->helper('tanggal_helper');
    }

   public function index()
    {
	}
	
	public function siswa(){
		
		$data['judul'] = 'ALBUM SISWA';
		$data["album"] = $this->Model_publik->album('Siswa');
		$data["config"] = $this->Model_publik->config();
		$data["sosmed"] = $this->Model_publik->sosmed();
		$data["menu_1"] = $this->Model_publik->get_menu_1();
		$data["menu_2"] = $this->Model_publik->get_menu_2();
		$this->load->view("publik/cms/album.php", $data);
	}
	
	
	public function guru(){
		
		$data['judul'] = 'ALBUM GURU';
		$data["album"] = $this->Model_publik->album('Guru');
		$data["config"] = $this->Model_publik->config();
		$data["sosmed"] = $this->Model_publik->sosmed();
		$data["menu_1"] = $this->Model_publik->get_menu_1();
		$data["menu_2"] = $this->Model_publik->get_menu_2();
		$this->load->view("publik/cms/album.php", $data);
	}
	
	
}