<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
        // Cek Session Di Sini
    }
	
	public function index(){
		if( !$this->session->userdata('isLoggedIn') ) {
			redirect('login');
		}
	}
	
	public function getSupplier(){
		if($this->input->is_ajax_request()){
			$dtL = $this->input->post('term');
			$dt = array();
			$this->load->model('msupplier');
			$dtSupp = $this->msupplier->getLike($dtL);
			foreach($dtSupp as $row){
				$dt[] = array(
					'id' => $row->kodesupplier,
					'value' => $row->namasupplier,
					'label' => $row->kodesupplier . " : " . $row->namasupplier
				);
			}
			echo json_encode($dt);
		}else{
			show_404();
		}
	}
}
