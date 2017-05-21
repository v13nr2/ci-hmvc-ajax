<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*

 */
class Todo_model extends CI_Model {

    public $limit;
    public $offset;

    function __construct() {
        parent::__construct();
		$this->postTable = 'nng_todo';
    }

    
    public function get_todo($user = 0)
	{
		if ($user === 0)
		{
			$query = $this->db->get_where('nng_todo',array('status' => 1));
			return $query->result_array();
		}
	
	}
	
	public function set_data($id = 0)
	{
		$this->load->helper('url');

		$data = array(
			'todo' => $this->input->post('todo')
		);
		
		if ($id === 0) {
		
			return $this->db->insert('nng_todo', $data);
		
		}
		else {
		
			$this->db->where('nng_todo', $id);
			return $this->db->update('users', $data);
		
		}
		
		
	}
	
	public function delete($kode){
		$this->db->where('id', $kode);
		$this->db->delete('nng_todo');
		return $this->db->affected_rows();
	}
	
}

/* End of file barang_model */