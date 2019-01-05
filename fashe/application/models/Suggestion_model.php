<?php
	class Suggestion_model extends CI_Model{

		// Log admin in
		public function suggestion(){
			// Suggestion data array
			$data = array(
				'suggest_name' => $this->input->post('name'),
				'suggest_phone' => $this->input->post('phone'),
				'suggest_email' => $this->input->post('email'),
				'suggest_message' => $this->input->post('message')
			);

			// Insert suggestion
			return $this->db->insert('suggestion', $data);
		}
	}
?>