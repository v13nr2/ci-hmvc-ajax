<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * barang_model
 *
 * Created on Feb 21, 2011, 10:57:01 PM
 */

/**
 *
 * @author Nanang Deh
 */
class Model_publik extends CI_Model {
	
	
    public function news($i) {
        $query = $this->db->get_where('nng_news',array('kategori_id' => $i, 'tampil'=>'Ya'));
		return $query->result_array();
    }
	
    public function get_menu_1() {
        $query = $this->db->get_where('nng_menu_publik',array('parent_id' => 0));
		return $query->result_array();
    }
	

	
    public function get_menu_2() {
        $query = $this->db->get_where('nng_menu_publik',array('parent_id !=' => 0));
		return $query->result_array();
    }
	
	
    public function banner() {
        $query = $this->db->get_where('nng_banner',array('id !=' => 0));
		return $query->result_array();
    }
	
    public function bannersamping() {
        $query = $this->db->get_where('nng_banner_samping',array('id !=' => 0));
		return $query->result_array();
    }
	
	
    public function config() {
        $query = $this->db->get_where('nng_config',array('id !=' => 0));
		return $query->result_array();
    }
	
}
?>