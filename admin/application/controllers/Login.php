<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->model('login_model');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function login_check()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|alpha_numeric_spaces|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|alpha_numeric|required');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$hashpassword=md5($password);

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('login');
		} 
		else {
			$result=$this->login_model->read_data();
			$admin_username=$result->username;
			$admin_password=$result->password;

			if ($username==$admin_username && $hashpassword==$admin_password) {

				$_SESSION['admin_username']=$username;
				$_SESSION['loggedin']=true;

				$this->load->view('admin_panel',array('error' => ' ' ));	
			}else{
				echo "<H1 style='text-align:center ;color:aliceblue'>".'Oops!! You are trying to enter a '.' <em>Restricted</em> '.' zone. '.'</H1>';
				echo "<h2 style='text-align:center;color:aliceblue'>".'Sorry, You are '.' <em>Not Welcome !! </em> '.'</h2>';
				$this->load->view('login');
			}
		}
	}
}

?>