<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbarang extends CI_Model {
	
	public function getAll(){
		$res = $this->db->get('nng_barang');
		return $res->result();
	}
	
	public function getLike($dt){
		$this->db->like('nm_barang', $dt);
		$this->db->from('nng_barang');
		$res = $this->db->get();
		return $res->result();	
	}
	
	public function getLikeParam($dt, $kodebarang){
		$this->db->like('parameter', $dt);
		$this->db->like('kd_barang', $kodebarang);
		$this->db->from('brg_param');
		$res = $this->db->get();
		return $res->result();	
	}
	
	public function getByKode($kode){
		$this->db->select('*');
		$this->db->from('nng_barang');
		$this->db->where('kd_barang',$kode);
		$res = $this->db->get();
		return $res->result();
	}
	
	public function save($data){
		$this->db->insert('nng_barang',$data);
        return $this->db->affected_rows();
	}
	
	public function update($data,$kode){
		$this->db->where('kd_barang', $kode);
		$this->db->update('nng_barang', $data);
		return $this->db->affected_rows();
	}
	
	public function delByKode($kode){
		$this->db->where('kd_barang', $kode);
		$this->db->delete('nng_barang');
		return $this->db->affected_rows();
	}
	
	public function delAll(){
		$this->db->empty_table('nng_barang');
		return $this->db->affected_rows();
	}
}
