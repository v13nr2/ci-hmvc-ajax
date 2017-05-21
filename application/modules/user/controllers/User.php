<?php
class User extends BaseController 
{
    public function __construct()
    {
        parent::__construct();
		$this->load->library('session');
    }

    public function index()
    {
    }

	public function changePassword(){
		
		$this->load->model('user/User_model'); 
		$user_id = $this->session->userdata('id');
		$newpass = $this->input->post('newpass');
		$oldpass = $this->input->post('old');
		$dataVerified = $this->User_model->cekPasswd($user_id, $oldpass);
		if($dataVerified){
			$data = $this->User_model->updPasswd($user_id, $newpass, $oldpass);
		} else {
			$data = "";
			$dataVerified ="";
		}
		
		 
    	$result = array(
    		'success' => true,
    		'dataVerified' => $dataVerified,
    		'data' => $data
    	);
		
		echo json_encode($result);
	}
	
	public function user_v()
	{
		
		$data['title'] = 'Form User';

		$this->load->view('user/user_v.php');
	}
	
	
	public function create()
	{

		$this->load->model('user/User_model'); 
			$simpan = $this->User_model->set_user();
			if($simpan){
			die("{\"total\":1, \"status\": \"Gagal\","
					. "\"results\":[{"
					. "\"message\":\"Data Telah Tersimpan. \""
					. "}]}");
				
			}

	}
	public function upd_password()
	{
		$this->load->model('user/User_model'); 
			$username = $this->input->post('username');
			$simpan = $this->User_model->upd_password($username);
			if($simpan){
			die("{\"total\":1, \"status\": \"Gagal\","
					. "\"results\":[{"
					. "\"message\":\"Password Telah Terupdate. \""
					. "}]}");
				
			}

	}
	function deletex(){
		$this->load->model('user/User_model'); 
		$user_id = $this->input->post('id');
		$hapus = $this->User_model->delete_row($user_id);
		if($hapus){
			die("{\"total\":1, \"status\": \"Gagal\","
					. "\"results\":[{"
					. "\"message\":\"Data Telah Dihapus. \""
					. "}]}");
				
			}
	}
	function display(){
		
		$this->load->model('user/User_model'); 
		$data['list'] = $this->User_model->get_user();
		foreach($data['list'] as $row)
        {	
			echo "<tr class='appendx'> 
				<td align='left' width='20%'>".$row["username"]."</td>
				<td align='left' width='20%'>".$row["nama"]."</td>
				<td align='center' width='10%'>
				<button class='btn btn-danger btn-sm' onclick=\"deletex('".$row["id"]."')\"><i class='fa fa-trash-o'></i></button>
				<button class='btn btn-yellow btn-sm' onclick=\"editx('".$row["id"]."')\"><i class='fa fa-edit'></i></button>
				</td>
			</tr>"; 
        } 
	}

	public function update()
	{
			$this->load->model('user/User_model');
			$simpan = $this->Barang_model->set_user( $this->input->post('id') );
			if($simpan){
			die("{\"total\":1, \"status\": \"Sukses\","
					. "\"results\":[{"
					. "\"message\":\"Data Telah Tersimpan. \""
					. "}]}");
				
			}

	}
	
	public function loadx(){
		$this->load->model('user/User_model');
		$data = $this->User_model->loadx( $this->input->post('id') );
		$result = array(
    		'success' => true,
    		'data' => $data
    	);

    	echo json_encode($result);
	}
}