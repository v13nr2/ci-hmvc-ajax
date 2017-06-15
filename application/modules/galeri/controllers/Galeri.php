<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends BaseController {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('gallery');

		if(! file_exists(FCPATH.'assets/uploads/')){
			mkdir(FCPATH.'assets/uploads/');
		}
		$config['upload_path']          = FCPATH.'assets/uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$this->load->library('upload', $config);
	}

	public function index()
	{
		$data['imagePath'] = base_url().'assets/uploads/';
		$data['images'] = $this->gallery->getGallery();
		$this->load->view('galeri_v', $data);
	}

	public function upload(){
		try {

			if (!$this->input->is_ajax_request()) {
				exit('No direct script access allowed');
			}

			if (!$this->upload->do_upload('file')) {
				$error = array('error' => $this->upload->display_errors());
				header('Content-Type: application/json');
				echo json_encode(['code' => 0, 'data' => $error]);
				exit;
			} else {
				$data = array('upload_data' => $this->upload->data());
				$name = $data['upload_data']['file_name'];
				$pathInfo = pathinfo($data['upload_data']['full_path']);
				$thumbName = $pathInfo['filename'] . '_thumb.' . $pathInfo['extension'];
				$this->initThumb($data['upload_data']['full_path']);
				if (!$this->image_lib->resize()) {
					echo $this->image_lib->display_errors();
				} else {
					$this->gallery->save(array('name' => $name, 'thumb' => $thumbName));
					header('Content-Type: application/json');
					echo json_encode(['code' => 1, 'data' => $data]);
					exit;
				}
			}
		}
		catch (Exception $e){
			header('Content-Type: application/json');
			echo json_encode(['code' => 0, 'data' => $e->getMessage()]);
			exit;
		}
	}

	public function reset(){
		$dir = FCPATH.'assets/uploads';
			if (is_dir($dir)) {
				$objects = scandir($dir);
				foreach ($objects as $object) {
					if ($object != "." && $object != "..") {
						if (is_dir($dir."/".$object))
							rrmdir($dir."/".$object);
						else
							unlink($dir."/".$object);
					}
				}
				rmdir($dir);
			}

		$this->gallery->reset();
		redirect(base_url('index.php/home'));
	}

	public function initThumb($file){
		$config['image_library'] = 'gd2';
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width']         = 75;
		$config['height']       = 50;
		$config['source_image'] = $file;
		$this->load->library('image_lib', $config);
	}
}
