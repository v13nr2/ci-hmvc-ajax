<?php
class Todo extends BaseController 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    { 	
    }
	
		
	public function insert(){
		$this->load->model('Todo_model');  
		$simpan = $this->Todo_model->set_data();
		if($simpan){
		  die("{\"total\":1, \"status\": \"Sukses\","
				. "\"results\":[{"
				. "\"message\":\"Data Telah Terekam. \""
				. "}]}");
			
		}else{
		  die("{\"total\":1, \"status\": \"Sukses\","
				. "\"results\":[{"
				. "\"message\":\"Data Gagal Terekam. \""
				. "}]}");
		}		
	}
	
		
	public function delete(){
		$this->load->model('Todo_model');  
		$id = $this->input->post('id');
		$del = $this->Todo_model->delete($id);
		if($del){
		  die("{\"total\":1, \"status\": \"Sukses\","
				. "\"results\":[{"
				. "\"message\":\"Data Telah Dihapus. \""
				. "}]}");
			
		}else{
		  die("{\"total\":1, \"status\": \"Sukses\","
				. "\"results\":[{"
				. "\"message\":\"Data Gagal Dihapus. \""
				. "}]}");
		}		
	}
	
	

	function getTodo(){
		$this->load->model('Todo_model');  
		$data['list'] = $this->Todo_model->get_todo();
		foreach($data['list'] as $row)
        {	
			echo '<li>
					  <!-- drag handle -->
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <!-- checkbox -->
					  <input type="checkbox" value="">
					  <!-- todo text -->
					  <span class="text">'.$row["todo"].'</span>
					  <!-- Emphasis label -->
					  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
					  <!-- General tools such as edit or delete-->
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"  onclick="delTodo('.$row["id"].');" ></i>
					  </div>
					</li>';
        } 
	}

	
}