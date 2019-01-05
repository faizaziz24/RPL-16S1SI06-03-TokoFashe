<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login extends CI_Controller{

		// Log in admin
		public function index(){
			$data['title'] = 'Login Admin';

			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin/login', $data);
			} else {
				// Get email
				$email = $this->input->post('email');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

				// Login customer
				$id = $this->admin_model->login($email, $password);

				if($id){
					// Create session
					$admin_data = array(
						'id' => $id,
						'admin_logged_in' => true
					);

					$this->session->set_userdata($admin_data);

					// Set message
					$this->session->set_flashdata('admin_loggedin', 'You are now logged in');

					redirect('admin/dashboard');
				} else {
					// Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');

					redirect('admin/login');
				}
			}
		}
	}
?>