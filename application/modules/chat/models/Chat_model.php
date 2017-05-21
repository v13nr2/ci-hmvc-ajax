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
 * @author agung
 */
class Chat_model extends CI_Model {

    function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->postTable = 'lab_peralatan';
    }

    public function get_chat() {
        $query = $this->db->get_where('nng_chat',array('status' => 1));
		return $query->result_array();
    }
	
	public function addChat($id = 0)
	{
		$this->load->helper('url');
		
		$data = array(
			'usename' => $_SESSION["email"],
			'teks' => $this->input->post('teks'),
			'status' => 1,
		);
		
		if ($id === 0) {
		
			return $this->db->insert('nng_chat', $data);
		
		}
		else {
		
			$this->db->where('id', $id);
			return $this->db->update('nng_chat', $data);
		
		}
		
		
	}
	
}