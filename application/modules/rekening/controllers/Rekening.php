<?php
class Rekening extends BaseController 
{
    public function __construct()
    {
        parent::__construct();
    }

   public function index()
    {
		
    }


	
	public function rekening_v()
	{
		
		$data['title'] = 'Form User';

		$this->load->view('rekening/rekening_v.php');
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
		
		$this->load->model('rekening_model'); 
		$data['list'] = $this->rekening_model->get_rekening();
		foreach($data['list'] as $row)
        {	
			echo "<tr class='appendx'> 
				<td align='left' width='5%'><img src='".base_url()."/assets/images/add.gif' onclick='nextCOA();'></td>
				<td align='center' width='15%'>".$row["kode"]."</td>
				<td align='left' width='30%'>".$row["nama"]."</td>
				<td align='center' width='10%'>".$row["transaksi"]."</td>
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