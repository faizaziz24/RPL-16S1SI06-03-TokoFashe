<?php 
	class Customers extends CI_Controller{
		
		public function index(){
			if(!$this->session->userdata('admin_logged_in')){
				redirect('');
			}

			$data['title'] = 'Customers';

			$data['customers'] = $this->customer_model->get_customers_all();

			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/customers/index', $data);
			$this->load->view('admin/templates/footer');
		}

		public function create(){
			if(!$this->session->userdata('admin_logged_in')){
				redirect('');
			}

			$data['title'] = 'New Customer';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');


			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header', $data);
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/customers/create', $data);
				$this->load->view('admin/templates/footer');
			} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->customer_model->create($enc_password);

				// Set message
				$this->session->set_flashdata('customer_created', 'You are now created');

				redirect('admin/customers');
			}
		}

		// Check if email exists
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
			if($this->customer_model->check_email_exists($email)){
				return true;
			} else {
				return false;
			}
		}
	}
?>