<?php
	class Slider_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_sliders($slug = FALSE){
			if($slug === FALSE){
				$query = $this->db->get('sliders');
				return $query->result_array();
			}
			
			$query = $this->db->get_where('sliders', array('slug' => $slug));
			return $query->row_array();
		}

		// Check slider exists
		public function check_slider_exists($slider){
			$query = $this->db->get_where('sliders', array('slider_name' => $slider));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		//Create Category
		public function create_slider($slider_image){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'slider_name' => $this->input->post('title'),
				'slug' => $slug,
				'slider_image' => $slider_image,
				'slider_body' => $this->input->post('description'),
			);

			return $this->db->insert('categories', $data);
		}

		public function delete_slider($id){
			$image_file_name = $this->db->select('slider_image')->get_where('sliders', array('slider_id' => $id))->row()->slider_image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\slides\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory

			//Delete Slide
			$this->db->where('slider_id', $id);
			$this->db->delete('sliders');
			return true;
		}
	}
?>