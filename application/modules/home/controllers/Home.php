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
		$data['menu2'] = $this->Menu_model->get_Module2($profile_id);
		$data['menu3'] = $this->Menu_model->get_Module3($profile_id);
		$data['totaluser'] = $this->Menu_model->get_user_total();
		
		$this->load->model('Grafik_model');
		$data["dt_koleksi"] = $this->Grafik_model->dt_koleksi();
		$data["dt_barangkantor"] = $this->Grafik_model->dt_barangkantor();
		$data["dt_tahunan"] = $this->Grafik_model->tahunan();
		$data["dt_tahunanBK"] = $this->Grafik_model->tahunanBK();
		$data["dt_tahunanPK"] = $this->Grafik_model->tahunanPK();
		
		//$this->load->view('home/header', $data);
		$this->load->view('home/home.php', $data);
		//$this->load->view('home/footer');
		    	
    }
	
	public function utama(){
		
		$this->load->view('home/home.php');
	}
}