<?php
	class Age_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_ages(){
			$this->db->order_by('age_id');
			$query = $this->db->get('ages');
			return $query->result_array();
		}

		// Check age exists
		public function check_age_exists($age){
			$query = $this->db->get_where('ages', array('age_name' => $age));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		// Create Age
		public function create(){
			// Customers data array
			$data = array(
				'age_name' => $this->input->post('age')
			);

			// Insert Customer
			return $this->db->insert('ages', $data);
		}

		// Delete Age
		public function delete_age($id){

			//Delete Customer
			$this->db->where('age_id', $id);
			$this->db->delete('ages');
			return true;
		}

	}
?>