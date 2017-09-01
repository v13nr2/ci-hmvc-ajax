<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Menu_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	public function get_Module($profile_id)
	{
			$query = $this->db->query("SELECT * FROM nng_menu WHERE parent_id = 0 AND status = 1");
			return $query->result_array();
		
	}
	
	public function get_Module2($profile_id)
	{
			$query = $this->db->query("SELECT * FROM nng_menu WHERE parent_id != 0 and file='' and status =1");
			return $query->result_array();
		
	}

	public function get_Module3($profile_id)
	{
			$query = $this->db->query("SELECT * FROM nng_menu WHERE parent_id != 0 and file !='' and status =1 ORDER BY menu_order");
			return $query->result_array();
		
	}
	

	public function todo($profile_id)
	{
			$query = $this->db->query("SELECT * FROM nng_todo WHERE status =1 ORDER BY id");
			return $query->result_array();
		
	}
	public function get_user_total(){
		
		$this->db->select('id, count(*) as total');
		$this->db->from('nng_users');        
		//$this->db->join('tblProduct', 'tblSaler.SalerID = tblProduct.SalerID'); 
		//$this->db->where('no_inst',$x);       
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function get_berita_total(){
		
		$this->db->select('id, count(*) as total');
		$this->db->from('nng_news');            
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function get_foto_total(){
		
		$this->db->select('id, count(*) as total');
		$this->db->from('nng_gallery');            
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
	public function get_todo_total(){
		
		$this->db->select('id, count(*) as total');
		$this->db->from('nng_todo');            
		$query = $this->db->get();
		return $query->result_array();
	}
	
}
