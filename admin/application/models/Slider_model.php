<?php
class Slider_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_data()
	{
		$image_data = $this->upload->data();
		$insert_data = array(
			'img_name' => $image_data['file_name'],
			'img_type' => $image_data['file_type'],
			'img_path'=>$image_data['full_path'],
			);
		$this->db->insert('slider', $insert_data); 
	}
	public function read_data()
	{
		$query = $this->db->query('SELECT * FROM slider ORDER BY id DESC LIMIT 6');
		return $query->result_array();
	}

}
?>