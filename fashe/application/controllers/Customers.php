<?php 
	class Customers extends CI_Controller{
		
		public function buying(){
			$data['title'] = 'Buying Transaction';

			$this->load->view('templates/header');
			$this->load->view('customers/buying', $data);
			$this->load->view('templates/footer');
		}

		public function customing(){
			$data['title'] = 'Customing Transaction';

			$this->load->view('templates/header');
			$this->load->view('customers/customing', $data);
			$this->load->view('templates/footer');
		}

		public function register(){
			$data['title'] ='Register';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('customers/register', $data);
				$this->load->view('templates/footer');
			} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->customer_model->register($enc_password);

				// Set message
				$this->session->set_flashdata('customer_registered', 'You are now registered and can log in');

				redirect('customers/login');
			}
		}

		// Log in customer
		public function login(){
			$data['title'] = 'Login Customer';

			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('customers/login', $data);
				$this->load->view('templates/footer');
			} else {
				
				// Get email
				$email = $this->input->post('email');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

				// Login customer
				$customer_id = $this->customer_model->login($email, $password);

				if($customer_id){
					// Create session
					$customer_data = array(
						'customer_id' => $customer_id,
						'customer_name' => $customer_name,
						'customer_phone' => $customer_phone,
						'customer_email' => $customer_email,
						'customer_logged_in' => true
					);

					$this->session->set_userdata($customer_data);

					// Set message
					$this->session->set_flashdata('customer_loggedin', 'You are now logged in');

					redirect('');

				} else {
					// Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');

					redirect('customers/login');
				}		
			}
		}

		// Log customer out
		public function logout(){
			
			if(!$this->session->userdata('customer_logged_in')){
				redirect('');
			}
			
			// Unset customer data
			$this->session->unset_userdata('customer_logged_in');
			$this->session->unset_userdata('customer_id');
			$this->session->unset_userdata('customer_name');
			$this->session->unset_userdata('customer_phone');
			$this->session->unset_userdata('customer_email');

			// Set message
			$this->session->set_flashdata('customer_loggedout', 'You are now logged out');

			redirect('customers/login');
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