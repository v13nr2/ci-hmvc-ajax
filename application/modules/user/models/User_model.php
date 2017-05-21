<?php
class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	function get_menu_sidebar() {
        //$this->db->select('*');
        //$this->db->from('menu');
        //$query = $this->db->get();
		
		$query = $this->db->get_where('menu',array('group' => 'Data Master'));
        return $result = $query->result();
    }

	function get_menu_sidebar_user_n_sistem() {
        //$this->db->select('*');
        //$this->db->from('menu');
        //$query = $this->db->get();
		
		$query = $this->db->get_where('menu',array('group' => 'User dan Sistem'));
        return $result = $query->result();
    }
	
	public function get_user($iduser = 0)
	{
		if ($iduser === 0)
		{
			$query = $this->db->get_where('nng_users',array('status' => 1,'username <>' => 'admin'));
			return $query->result_array();
		}
		
		$query = $this->db->get_where('nng_users', array('id' => $iduser));
		return $query->row_array();
	}
	
	public function loadx($iduser)
	{
		$query = $this->db->get_where('nng_users', array('id' => $iduser));
		return $query->result_array();
	}
	
	
	public function set_user()
	{
		$this->load->helper('url');
		
			$id = $this->input->post('id');
			
		
		
		if ($id == '') {
			$data = array(
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'password' => md5($this->input->post('password')),
				'status' => 1,
			);
			return $this->db->insert('nng_users', $data);
		
		}
		else {
			if($this->input->post('password')==""){
				
				$data = array(
					'username' => $this->input->post('username'),
					'nama' => $this->input->post('nama')
				);
			}else{
				$data = array(
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'password' => md5($this->input->post('password'))
				);
			}
		
			$this->db->where('id', $id);
			return $this->db->update('nng_users', $data);
		
		}
		
		
	}
	
	public function upd_password($username){
		$data = array(
			'password' => md5($this->input->post('password'))
		);
		$this->db->where('username', $username);
		return $this->db->update('users', $data);
	}
	
	public function delete_row($id){
	  $this->db->query('DELETE FROM nng_menu_akses WHERE username = (SELECT username FROM nng_users WHERE id = '.$id.')');
	  
	  $this->db->where('username !=', 'admin');	
	  $this->db->where('id', $id);
	  return $this->db->delete('nng_users');
	}

	public function completed($id)
	{
		
		$data = array(
               'completed' => 1
            );

		$this->db->where('id', $id);
		$this->db->update('todos', $data); 
	
	}
	
	
	
	public function get_user_total(){
		
		$this->db->select('id, count(*) as total');
		$this->db->from('nng_users');        
		//$this->db->join('tblProduct', 'tblSaler.SalerID = tblProduct.SalerID'); 
		//$this->db->where('no_inst',$x);       
		$query = $this->db->get();
		return $query->result_array();
	}
}