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

		$this->load->model('rekening/rekening_model'); 
			$simpan = $this->rekening_model->set_coa();
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
		$no = 1;
		foreach($data['list'] as $row)
        {	
			echo "<tr class='appendx'> 
				<td align='left' width='5%'>".$no."</td>
				<td align='left' width='15%'>".$row["norek"]."</td>
				<td align='left' width='30%'>".$row["namarek"]."</td>
				<td align='center' width='10%'>".$row["saldonormal"]."</td>
				<td align='center' width='10%'>
				<button class='btn btn-danger btn-sm' onclick=\"deletex('".$row["norek"]."')\"><i class='fa fa-trash-o'></i></button>
				<button class='btn btn-yellow btn-sm' onclick=\"editx('".$row["norek"]."')\"><i class='fa fa-edit'></i></button>
				</td>
			</tr>"; 
			$no++;
			
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
		$this->load->model('rekening/rekening_model');
		$data = $this->rekening_model->loadx( $this->input->post('id') );
		//die($this->db->last_query());
		$result = array(
    		'success' => true,
    		'data' => $data
    	);

    	echo json_encode($result);
	}
}