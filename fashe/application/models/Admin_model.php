<?php
	class Admin_model extends CI_Model{

		// Log admin in
		public function login($email, $password){
			// Validate
			$this->db->where('email_adm', $email);
			$this->db->where('password_adm', $password);

			$result = $this->db->get('admin');

			if($result->num_rows() == 1){
				return $result->row(0)->id;
			} else {
				return false;
			}
		}
	}
?>