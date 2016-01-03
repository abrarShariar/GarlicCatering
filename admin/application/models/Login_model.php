<?php
class Login_model extends CI_Model {

// this function will be called instantenneously

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

// method to read data from database

	public function read_data(){

		$query = $this->db->get('admin');  // Produces: SELECT * FROM mytable
		return $query->row();

	}


}
?>



