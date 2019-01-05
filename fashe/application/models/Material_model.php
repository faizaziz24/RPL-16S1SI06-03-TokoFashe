<?php
	class Material_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_materials(){
			$this->db->order_by('material_id');
			$query = $this->db->get('materials');
			return $query->result_array();
		}

		public function check_material_exists($material){
			$query = $this->db->get_where('materials', array('material_name' => $material));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		public function create_material($material_image){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'material_name' => $this->input->post('title'),
				'material_image' => $material_image,
				'material_body' => $this->input->post('description'),
			);

			return $this->db->insert('materials', $data);
		}

		public function delete_material($id){
			
			$image_file_name = $this->db->select('material_image')->get_where('materials', array('material_id' => $id))->row()->material_image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\posts\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory

			$this->db->where('material_id', $id);
			$this->db->delete('materials');
			return true;
		}
	}
?>