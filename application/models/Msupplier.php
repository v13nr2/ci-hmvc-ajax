<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msupplier extends CI_Model {
	
	public function getAll(){
		$res = $this->db->get('nng_supplier');
		return $res->result();
	}
	
	public function getLike($dt){
		$this->db->like('namasupplier', $dt);
		$this->db->from('nng_supplier');
		$res = $this->db->get();
		return $res->result();
	}
	
	public function getByKode($kode){
		$this->db->select('*');
		$this->db->from('nng_supplier');
		$this->db->where('kodesupplier',$kode);
		$res = $this->db->get();
		return $res->result();
	}
	
	public function save($data){
		$this->db->insert('nng_supplier',$data);
        return $this->db->affected_rows();
	}
	
	public function update($data,$kode){
		$this->db->where('kodesupplier', $kode);
		$this->db->update('nng_supplier', $data);
		return $this->db->affected_rows();
	}
	
	public function delByKode($kode){
		$this->db->where('kodesupplier', $kode);
		$this->db->delete('nng_supplier');
		return $this->db->affected_rows();
	}
	
	public function delAll(){
		$this->db->empty_table('nng_supplier');
		return $this->db->affected_rows();
	}
}
