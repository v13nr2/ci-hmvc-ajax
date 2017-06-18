<?php
class rekening_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}



	public function get_rekening($cari = "")
	{
		if ($cari == "")
		{
			$query = $this->db->get_where('nng_rekening',array('parent_id' => 0));
			$this->db->order_by("kode");
			return $query->result_array();
		}
		
		$query = $this->db->get_where('nng_rekening', array('id' => $id));
		return $query->row_array();
	}
	


	public function get_rekening2($cari)
	{
		$query = $this->db->get_where('nng_rekening', array('parent_id' => $cari, 'parent_id !=' => 0));
		return $query->result_array();
	}
	

	public function get_rekening3($cari)
	{
		$query = $this->db->get_where('nng_rekening', array('parent_id' => $cari, 'parent_id !=' => 0));
		return $query->result_array();
	}

	public function get_rekening4($cari)
	{
		$query = $this->db->get_where('nng_rekening', array('parent_id' => $cari, 'parent_id !=' => 0));
		return $query->result_array();
	}
	
	public function loadx($id)
	{
		$query = $this->db->query("SELECT A.*,B.nama AS induk,B.kode AS kodeinduk FROM nng_rekening A, nng_rekening B WHERE B.id = A.parent_id AND A.id = '$id'");
		return $query->result_array();
	}
	
}