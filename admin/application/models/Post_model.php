<?php
class Post_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}
	public function insert_data()
	{
		$title=$this->input->post('title');
		$content=$this->input->post('content');
		$image_data = $this->upload->data();
		$insert_data = array(
			'title'=>$title,
			'content'=>$content,
			'img_name' => $image_data['file_name'],
			'img_type' => $image_data['file_type'],
			'img_path'=>$image_data['full_path'],
			);
		          $this->db->insert('post', $insert_data); //load array to database
		      }
		      public function read_data(){

					$query = $this->db->query('SELECT * FROM post ORDER BY id DESC LIMIT 1');  // Produces: SELECT * FROM mytable
					// $query = $this->db->get('post',1);  

					return $query->result_array();
				}
				public function archive_data(){

					$query = $this->db->query('SELECT * FROM post ORDER BY id DESC'); 
					return $query->result_array();

				}
				// method to delete data from database

				public function post_delete()
				{
					$id=$_REQUEST['id'];
					$this->db->where('id', $id);
					$this->db->delete('post'); 

				}

				// method to edit data from database

				public function edit_post()
				{
					$id=$_REQUEST['id'];
					$query = $this->db->get_where('post', array('id' => $id));
					return $query->result_array();
				}
				public function update_post(){
					$id=$_REQUEST['id'];
					$title=$this->input->post('title');
					$content=$this->input->post('content');

					$data = array(
						'title' => $title,
						'content' => $content,
						);
					$this->db->where('id', $id);
					$this->db->update('post', $data);
				}
			}
			?>