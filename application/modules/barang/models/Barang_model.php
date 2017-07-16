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
			$query = $this->db->query("SELECT A.* FROM nng_rekening A ORDER BY norek");
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
	
	
	public function set_coa()
	{
		$this->load->helper('url');
		
			$id = $this->input->post('id');
			
		
			$data = array(
				'id' => $this->input->post('id'),
				'nama' => $this->input->post('coa'),
				'kode' => $this->input->post('kodecoa'),
				'group' => $this->input->post('group'),
				'transaksi' => $this->input->post('transaksi')
			);
		
		if ($id == '') {
			return $this->db->insert('nng_rekening', $data);
		
		}
		else {
		
			$this->db->where('id', $id);
			return $this->db->update('nng_rekening', $data);
		
		}
		
		
	}
	
	
	
}