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
			$query = $this->db->get_where('nng_rekening',array('id' <> 0));
			return $query->result_array();
		}
		
		$query = $this->db->get_where('nng_rekening', array('id' => $id));
		return $query->row_array();
	}
	
}