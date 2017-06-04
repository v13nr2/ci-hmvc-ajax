<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends BaseController {
	
	var $data = array();
	
	public function __construct(){
		parent::__construct();
        // Cek Session Di Sini
		$this->setPage();
    }
	
	public function index(){
		$this->load->view('template',$this->data);
	}
	
	public function getBarang(){
		if($this->input->is_ajax_request()){
			$dtL = $this->input->post('term');
			$dt = array();
			$this->load->model('mbarang');
			$dtBrg = $this->mbarang->getLike($dtL);
			foreach($dtBrg as $row){
				$dt[] = array(
					'id' => $row->kd_barang,
					'value' => $row->nm_barang,
					'label' => $row->kd_barang . " : " . $row->nm_barang
				);
			}
			echo json_encode($dt);
		}else{
			show_404();
		}
	}
	
	public function getRuang(){
		if($this->input->is_ajax_request()){
			$dtL = $this->input->post('term');
			$dt = array();
			$this->load->model('rack_model');
			$dtBrg = $this->rack_model->getLike($dtL);
			foreach($dtBrg as $row){
				$dt[] = array(
					'id' => $row->kodebarang,
					'value' => $row->namabarang,
					'label' => $row->namabarang
				);
			}
			echo json_encode($dt);
		}else{
			show_404();
		}
	}
	
	public function getParam(){
		if($this->input->is_ajax_request()){
			$dtL = $this->input->post('term');
			$kodebarang = $this->input->post('barang');
			$dt = array();
			$this->load->model('mbarang');
			$dtBrg = $this->mbarang->getLikeParam($dtL, $kodebarang);
			foreach($dtBrg as $row){
				$dt[] = array(
					'id' => $row->parameter,
					'value' => $row->parameter,
					'label' => $kodebarang . " : " . $row->parameter
				);
			}
			echo json_encode($dt);
		}else{
			show_404();
		}
	}
	
	private function setPage(){
		$this->data['pgTitle'] = 'Data Barang';
		$this->data['pgTitleDesc'] = 'Data Barang';
	}
}
