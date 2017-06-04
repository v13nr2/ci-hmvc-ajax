<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brgmasuk extends BaseController {
	
	public function __construct(){
		parent::__construct();
    } 
	
	public function index(){
		$this->load->view('brgmasuk');
	}
	
	public function simpan(){
		if($this->input->is_ajax_request()){
			//$cek = ''
			$res = array();
			$this->load->model('mbrg_supp');
			$kdsupp = $this->input->post('txtsupp');
			$tgl = $this->input->post('tgl');
			$kdbrg = $this->input->post('txt_kdbrg');
			$jml = $this->input->post('txt_qty');
			$ket = $this->input->post('txt_ket');
			//var_dump($kdbrg);
			//echo sizeof($dt);
			for($i=0; $i<sizeof($kdbrg); $i++){
				$dt = array(
					'kd_barang' => $kdbrg[$i],
					'kd_supplier' => $kdsupp,
					'jumlah' => $jml[$i],
					'ket' => $ket[$i]
				);
				$cek = $this->mbrg_supp->save($dt);
			}
			if($cek){
				$res = array(
					'status' => TRUE,
					'msg' => 'Data Telah Tersimpan'
				);
			}else{
				$res = array(
					'status' => FALSE,
					'msg' => 'Terjadi Kesalahan Pada Saat Penyimpanan Data.'
				);
			}
			echo json_encode($res);
		}else{
			show_404();
		}
	}
	
	private function cekSession(){
		if(!isset($this->session->userdata['logged_in'])){
			redirect('login', 'refresh');
		}
	}
}