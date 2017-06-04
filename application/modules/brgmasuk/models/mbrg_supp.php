<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbrg_supp extends CI_Model {
	
	public function getAll(){
		$this->db->select('*');
		$this->db->from('brg_masuk');
		$this->db->join('tbl_barang','tbl_barang.kd_barang = brg_masuk.kd_barang');
		$this->db->join('tbl_supplier','tbl_supplier.kd_supplier = brg_masuk.kd_supplier');
		$res = $this->db->get();
		return $res->result();
	}
	
	public function getByKdBrg($kode){
		$this->db->select('*');
		$this->db->from('brg_masuk');
		$this->db->join('tbl_barang','tbl_barang.kd_barang = brg_masuk.kd_barang');
		$this->db->join('tbl_supplier','tbl_supplier.kd_supplier = brg_masuk.kd_supplier');
		$this->db->where('brg_masuk.kd_barang',$kode);
		$res = $this->db->get();
		return $res->result();
	}
	
	public function getByKdSup($kode){
		$this->db->select('*');
		$this->db->from('brg_masuk');
		$this->db->join('tbl_barang','tbl_barang.kd_barang = brg_masuk.kd_barang');
		$this->db->join('tbl_supplier','tbl_supplier.kd_supplier = brg_masuk.kd_supplier');
		$this->db->where('brg_masuk.kd_supplier',$kode);
		$res = $this->db->get();
		return $res->result();
	}
	
	public function save($data){
		$this->db->insert('nng_transaksi',$data);
        return $this->db->affected_rows();
	}
	
	public function update($data,$kode){
		$this->db->where('kd_barang', $kode);
		$this->db->update('brg_masuk', $data);
		return $this->db->affected_rows();
	}
	
	public function delByKdBrg($kode){
		$this->db->where('kd_barang', $kode);
		$this->db->delete('brg_masuk');
		return $this->db->affected_rows();
	}
	
	public function delByKdSup($kode){
		$this->db->where('kd_supplier', $kode);
		$this->db->delete('brg_masuk');
		return $this->db->affected_rows();
	}
	
	public function delAll(){
		$this->db->empty_table('brg_masuk');
		return $this->db->affected_rows();
	}
}
