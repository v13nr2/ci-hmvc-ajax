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
class Register extends CI_Model {

    public $limit;
    public $offset;

    function __construct() {
        parent::__construct();
		$this->postTable = 'nng_users';
    }

    
	public function set_data($id = 0)
	{
		

		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		
		if ($id === 0) {
		
			return $this->db->insert('nng_users', $data);
		
		}
		else {
		
			$this->db->where('username', $id);
			return $this->db->update('nng_users', $data);
		
		}
		
		
	}
	
	
}

/* End of file barang_model */