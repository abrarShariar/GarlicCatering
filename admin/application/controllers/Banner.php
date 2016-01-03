<?php
class Banner extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('banner_model');
		$this->load->library('image_lib');
	}

	public function index(){
		$error = array('error' => $this->upload->display_errors());
		$data['banner_data'] = $this->banner_model->read_data();
		$this->load->view('banner', $error);
		$this->load->view('success/banner', $data);
	}
	
	public function do_upload(){
		$config['upload_path']          = './images/';
		$config['allowed_types']        = 'gif|jpg|png|JPG|jpeg|JPEG';
		$config['max_size']             = 200;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		if (! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('banner', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->banner_model->insert_data();
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('banner', $error);
			$data['banner_data'] = $this->banner_model->read_data();
			$this->load->view('success/banner', $data);
		}

	}
}
?>