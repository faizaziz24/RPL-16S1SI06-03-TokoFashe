<?php
	class Category_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_categories(){
			$this->db->order_by('category_id');
			$query = $this->db->get('categories');
			return $query->result_array();
		}

		// Check category exists
		public function check_category_exists($category){
			$query = $this->db->get_where('categories', array('category_name' => $category));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		//Create Category
		public function create_category($category_image){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'category_name' => $this->input->post('title'),
				'category_image' => $category_image,
				'category_body' => $this->input->post('description'),
			);

			return $this->db->insert('categories', $data);
		}

		// Delete Category
		public function delete_category($id){
			$image_file_name = $this->db->select('category_image')->get_where('categories', array('category_id' => $id))->row()->category_image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\categories\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory

			//Delete Customer
			$this->db->where('category_id', $id);
			$this->db->delete('categories');
			return true;
		}
	}
?>