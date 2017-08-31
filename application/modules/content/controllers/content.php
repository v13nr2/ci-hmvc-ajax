<?php
class Content extends CI_Controller 
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
	
	public function pg_it_alfurqon(){
		
		$data['judul'] = 'PG IT AL FURQON';
		$data["news"] = $this->Model_publik->news(1);
		$data["menu_1"] = $this->Model_publik->get_menu_1();
		$data["menu_2"] = $this->Model_publik->get_menu_2();
		$data["banner"] = $this->Model_publik->banner();
		$data["bannersamping"] = $this->Model_publik->bannersamping();
		$data["config"] = $this->Model_publik->config();
		$this->load->view("publik/cms/news.php", $data);
	}
	
	public function kunjungan(){
		
		$data['judul'] = 'KUNJUNGAN';
		$data["news"] = $this->Model_publik->news(5);
		$data["menu_1"] = $this->Model_publik->get_menu_1();
		$data["menu_2"] = $this->Model_publik->get_menu_2();
		$data["banner"] = $this->Model_publik->banner();
		$data["bannersamping"] = $this->Model_publik->bannersamping();
		$data["config"] = $this->Model_publik->config();
		$this->load->view("publik/cms/news.php", $data);
	}
	
	public function special_event(){
		
		$data['judul'] = 'SPESIAL EVENT';
		$data["news"] = $this->Model_publik->news(6);
		$data["menu_1"] = $this->Model_publik->get_menu_1();
		$data["menu_2"] = $this->Model_publik->get_menu_2();
		$data["banner"] = $this->Model_publik->banner();
		$data["bannersamping"] = $this->Model_publik->bannersamping();
		$data["config"] = $this->Model_publik->config();
		$this->load->view("publik/cms/news.php", $data);
	}
	
	public function keislaman(){
		
		$data['judul'] = 'KEISLAMAN';
		$data["news"] = $this->Model_publik->news(7);
		$data["menu_1"] = $this->Model_publik->get_menu_1();
		$data["menu_2"] = $this->Model_publik->get_menu_2();
		$data["banner"] = $this->Model_publik->banner();
		$data["bannersamping"] = $this->Model_publik->bannersamping();
		$data["config"] = $this->Model_publik->config();
		$this->load->view("publik/cms/news.php", $data);
	}
	
	public function pendidikan(){
		
		$data['judul'] = 'PENDIDIKAN';
		$data["news"] = $this->Model_publik->news(8);
		$data["menu_1"] = $this->Model_publik->get_menu_1();
		$data["menu_2"] = $this->Model_publik->get_menu_2();
		$data["banner"] = $this->Model_publik->banner();
		$data["bannersamping"] = $this->Model_publik->bannersamping();
		$data["config"] = $this->Model_publik->config();
		$this->load->view("publik/cms/news.php", $data);
	}
	
	public function tk_it_alfurqon(){
		$data["news"] = $this->Model_publik->news(1);
		
		$data['judul'] = 'TK IT AL FURQON';
		$data["menu_1"] = $this->Model_publik->get_menu_1();
		$data["menu_2"] = $this->Model_publik->get_menu_2();
		$data["banner"] = $this->Model_publik->banner();
		$data["bannersamping"] = $this->Model_publik->bannersamping();
		$data["config"] = $this->Model_publik->config();
		$this->load->view("publik/cms/news.php", $data);
	}
	
	public function sd_it_alfurqon(){
		
		$data['judul'] = 'SD IT AL FURQON';
		$data["news"] = $this->Model_publik->news(2);
		$data["menu_1"] = $this->Model_publik->get_menu_1();
		$data["menu_2"] = $this->Model_publik->get_menu_2();
		$data["banner"] = $this->Model_publik->banner();
		$data["bannersamping"] = $this->Model_publik->bannersamping();
		$data["config"] = $this->Model_publik->config();
		$this->load->view("publik/cms/news.php", $data);
	}
	
	public function smp_it_alfurqon(){
		
		$data['judul'] = 'SMP IT AL FURQON';
		$data["news"] = $this->Model_publik->news(3);
		$data["menu_1"] = $this->Model_publik->get_menu_1();
		$data["menu_2"] = $this->Model_publik->get_menu_2();
		$data["banner"] = $this->Model_publik->banner();
		$data["bannersamping"] = $this->Model_publik->bannersamping();
		$data["config"] = $this->Model_publik->config();
		$this->load->view("publik/cms/news.php", $data);
	}
	
	public function sma_it_alfurqon(){
		
		$data['judul'] = 'SMA IT AL FURQON';
		$data["news"] = $this->Model_publik->news(4);
		$data["menu_1"] = $this->Model_publik->get_menu_1();
		$data["menu_2"] = $this->Model_publik->get_menu_2();
		$data["banner"] = $this->Model_publik->banner();
		$data["bannersamping"] = $this->Model_publik->bannersamping();
		$data["config"] = $this->Model_publik->config();
		$this->load->view("publik/cms/news.php", $data);
	}
	
	public function yip_al_furqon(){
		
		$data['judul'] = 'YIP AL FURQON';
		$data["menu_1"] = $this->Model_publik->get_menu_1();
		$data["menu_2"] = $this->Model_publik->get_menu_2();
		$data["banner"] = $this->Model_publik->banner();
		$data["bannersamping"] = $this->Model_publik->bannersamping();
		$data["config"] = $this->Model_publik->config();
		$this->load->view("publik/cms/news.php", $data);
	}
	
	public function devisi_daksos(){
		
		$data['judul'] = 'DIVISI DAKSOS';
		$data["menu_1"] = $this->Model_publik->get_menu_1();
		$data["menu_2"] = $this->Model_publik->get_menu_2();
		$data["banner"] = $this->Model_publik->banner();
		$data["bannersamping"] = $this->Model_publik->bannersamping();
		$data["config"] = $this->Model_publik->config();
		$this->load->view("publik/cms/news.php", $data);
	}
	
	public function devisi_ekonomi(){
		
		$data['judul'] = 'DIVISI EKONOMI';
		$data["menu_1"] = $this->Model_publik->get_menu_1();
		$data["menu_2"] = $this->Model_publik->get_menu_2();
		$data["banner"] = $this->Model_publik->banner();
		$data["bannersamping"] = $this->Model_publik->bannersamping();
		$data["config"] = $this->Model_publik->config();
		$this->load->view("publik/cms/news.php", $data);
	}
	
}