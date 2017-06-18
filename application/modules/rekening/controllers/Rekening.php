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
			$group = $row["group"] == "Y" ? "<img src='".base_url()."/assets/images/add.gif' onclick='nextCOA();'>" : "";
			echo "<tr class='appendx'> 
				<td align='left' width='5%'>".$group."</td>
				<td align='left' width='15%'>".$row["kode"]."</td>
				<td align='left' width='30%'>".$row["nama"]."</td>
				<td align='center' width='10%'>".$row["transaksi"]."</td>
				<td align='center' width='10%'>
				<button class='btn btn-danger btn-sm' onclick=\"deletex('".$row["id"]."')\"><i class='fa fa-trash-o'></i></button>
				<button class='btn btn-yellow btn-sm' onclick=\"editx('".$row["id"]."')\"><i class='fa fa-edit'></i></button>
				</td>
			</tr>"; 
			$data2['list2'] = $this->rekening_model->get_rekening2($row["id"]);
			foreach($data2['list2'] as $row2)
			{	
				$group2 = $row2["group"] == "Y" ? "<img src='".base_url()."/assets/images/add.gif' onclick='nextCOA();'>" : "";
				echo "<tr class='appendx'> 
					<td align='left' width='5%'>".$group2."</td>
					<td align='left' width='15%'>".$row2["kode"]."</td>
					<td align='left' width='30%'>".$row2["nama"]."</td>
					<td align='center' width='10%'>".$row2["transaksi"]."</td>
					<td align='center' width='10%'>
					<button class='btn btn-danger btn-sm' onclick=\"deletex('".$row2["id"]."')\"><i class='fa fa-trash-o'></i></button>
					<button class='btn btn-yellow btn-sm' onclick=\"editx('".$row2["id"]."')\"><i class='fa fa-edit'></i></button>
					</td>
				</tr>"; 
			
				$data3['list3'] = $this->rekening_model->get_rekening3($row2["id"]);
				foreach($data3['list3'] as $row3)
				{	
					$group3 = $row3["group"] == "Y" ? "<img src='".base_url()."/assets/images/add.gif' onclick='nextCOA();'>" : "";
					echo "<tr class='appendx'> 
						<td align='left' width='5%'>".$group3."</td>
						<td align='left' width='15%'>".$row3["kode"]."</td>
						<td align='left' width='30%'>".$row3["nama"]."</td>
						<td align='center' width='10%'>".$row3["transaksi"]."</td>
						<td align='center' width='10%'>
						<button class='btn btn-danger btn-sm' onclick=\"deletex('".$row3["id"]."')\"><i class='fa fa-trash-o'></i></button>
						<button class='btn btn-yellow btn-sm' onclick=\"editx('".$row3["id"]."')\"><i class='fa fa-edit'></i></button>
						</td>
					</tr>"; 
						$data4['list4'] = $this->rekening_model->get_rekening4($row3["id"]);
						foreach($data4['list4'] as $row4)
						{	
							$group4 = $row4["group"] == "Y" ? "<img src='".base_url()."/assets/images/add.gif' onclick='nextCOA();'>" : "";
							echo "<tr class='appendx'> 
								<td align='left' width='5%'>".$group4."</td>
								<td align='left' width='15%'>".$row4["kode"]."</td>
								<td align='left' width='30%'>".$row4["nama"]."</td>
								<td align='center' width='10%'>".$row4["transaksi"]."</td>
								<td align='center' width='10%'>
								<button class='btn btn-danger btn-sm' onclick=\"deletex('".$row4["id"]."')\"><i class='fa fa-trash-o'></i></button>
								<button class='btn btn-yellow btn-sm' onclick=\"editx('".$row4["id"]."')\"><i class='fa fa-edit'></i></button>
								</td>
							</tr>"; 
						}

				}
			}
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
}