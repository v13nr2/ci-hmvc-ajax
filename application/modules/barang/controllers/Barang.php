<?php
class Barang extends BaseController 
{
    public function __construct()
    {
        parent::__construct();
    }

   public function index()
    {
		
		$data['title'] = 'Form Barang';

		$this->load->view('barang/barang_v.php');
    }


	
	public function rekening_v()
	{
		
	}
	
	
	public function create()
	{

		$this->load->model('barang/barang_model'); 
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
		
		$this->load->model('barang_model'); 
		$data['list'] = $this->barang_model->get_barang();
		$no = 1;
		foreach($data['list'] as $row)
        {	
			echo "<tr class='appendx'> 
				<td align='left' width='5%'>".$no."</td>
				<td align='left' width='30%'>".$row["namabrg"]."</td>
				<td align='left' width='15%'>".$row["kodebrg"]."</td>
				<td align='right' width='10%'>".number_format($row["modal"])."</td>
				<td align='center' width='10%'>
				<button class='btn btn-danger btn-sm' onclick=\"deletex('".$row["kodebrg"]."')\"><i class='fa fa-trash-o'></i></button>
				<button class='btn btn-yellow btn-sm' onclick=\"editx('".$row["kodebrg"]."')\"><i class='fa fa-edit'></i></button>
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
		$result = array(
    		'success' => true,
    		'data' => $data
    	);

    	echo json_encode($result);
	}

	public function getBarang(){
		if($this->input->is_ajax_request()){
			$dtL = $this->input->post('term');
			$dt = array();
			$this->load->model('barang_model');
			$dtBrg = $this->barang_model->getLike($dtL);
			foreach($dtBrg as $row){
				$dt[] = array(
					'id' => $row->kodebrg,
					'value' => $row->namabrg,
					'label' => $row->namabrg . " : " . $row->kodebrg
				);
			}
			echo json_encode($dt);
		}else{
			show_404();
		}
	}
	
	public function getRuang(){
		if($this->input->is_ajax_request()){
			$dtL = $this->input->post('term');
			$dt = array();
			$this->load->model('rack_model');
			$dtBrg = $this->rack_model->getLike($dtL);
			foreach($dtBrg as $row){
				$dt[] = array(
					'id' => $row->kodebarang,
					'value' => $row->namabarang,
					'label' => $row->namabarang
				);
			}
			echo json_encode($dt);
		}else{
			show_404();
		}
	}
	
	public function getParam(){
		if($this->input->is_ajax_request()){
			$dtL = $this->input->post('term');
			$kodebarang = $this->input->post('barang');
			$dt = array();
			$this->load->model('mbarang');
			$dtBrg = $this->mbarang->getLikeParam($dtL, $kodebarang);
			foreach($dtBrg as $row){
				$dt[] = array(
					'id' => $row->parameter,
					'value' => $row->parameter,
					'label' => $kodebarang . " : " . $row->parameter
				);
			}
			echo json_encode($dt);
		}else{
			show_404();
		}
	}
	
	private function setPage(){
		$this->data['pgTitle'] = 'Data Barang';
		$this->data['pgTitleDesc'] = 'Data Barang';
	}
	
}