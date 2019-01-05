<?php
	class Customer_model extends CI_Model{
		
		public function register($enc_password){
			// Customers data array
			$data = array(
				'customer_name' => $this->input->post('name'),
				'customer_phone' => $this->input->post('phone'),
				'customer_email' => $this->input->post('email'),
                'customer_password' => $enc_password
			);

			// Insert customers
			return $this->db->insert('customers', $data);
		}

		// Log customer in
		public function login($email, $password){
			// Validate
			$this->db->where('customer_email', $email);
			$this->db->where('customer_password', $password);

			$result = $this->db->get('customers');

			if($result->num_rows() == 1){
				return $result->row(0)->customer_id;
			} else {
				return false;
			}
		}

		// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('customers', array('customer_email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		// Connect to database
		public function __construct(){
			$this->load->database();
		}

		public function get_customers_all(){
			$this->db->order_by('customer_id');
			$query = $this->db->get_where('customers');
			return $query->result_array();
		}
		
		public function sum_customers_all(){
			$query = $this->db->get_where('customers');

			$data  = $query->num_rows();
			return $data;
		}

		// Create Customer
		public function create($enc_password){
			// Customers data array
			$data = array(
				'customer_name' => $this->input->post('name'),
				'customer_phone' => $this->input->post('phone'),
				'customer_email' => $this->input->post('email'),
                'customer_password' => $enc_password
			);

			// Insert Customer
			return $this->db->insert('customers', $data);
		}
	}