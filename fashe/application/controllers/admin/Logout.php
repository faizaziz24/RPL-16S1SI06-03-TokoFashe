<?php

class Logout extends CI_Controller {

    public function index() {
        // Unset customer data
		$this->session->unset_userdata('admin_logged_in');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name_adm');
		$this->session->unset_userdata('email_adm');


		// Set message
		$this->session->set_flashdata('customer_loggedout', 'You are now logged out');

		redirect('');
    } 
}
