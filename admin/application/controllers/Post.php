<?php
class Post extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
		$this->load->library('image_lib');
	}
	public function index(){
		$error = array('error' => $this->upload->display_errors());
		$this->load->view('admin_panel', $error);
	}
	public function do_upload(){
		// create new post
		$config['upload_path']          = './images/';
		$config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
		$config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		if (! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin_panel', $error);

		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->post_model->insert_data();
			$this->load->view('success/upload');
		}
	}
		// READ recent post
	public function recent_post()
	{
		$data['post_data'] = $this->post_model->read_data();
		$this->load->view('recent', $data);
	}
	// REAd all posts
	public function post_archive(){
		$data['post_archive'] = $this->post_model->archive_data();
		$this->load->view('archive', $data);
	}
	// DELETE recent post
	public function delete_post(){
		$id=$_REQUEST['id'];
		$this->post_model->post_delete($id);
		$this->load->view('success/delete');

	}
	// EDIT recent post
	public function edit_post(){
		$id=$_REQUEST['id'];
		$data['edit_post'] = $this->post_model->edit_post();
		$this->load->view('edit', $data);
	}

	// UPDATE
	public function update_post(){
		$id=$_REQUEST['id'];
		$this->post_model->update_post();
		$this->load->view('success/update');
	}
	// Logout 
	// Session destroy
	public function logout(){
		session_destroy();
		$this->load->view('login');
	}
}
?>