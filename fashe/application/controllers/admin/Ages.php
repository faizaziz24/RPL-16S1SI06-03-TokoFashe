<?php 
	class Ages extends CI_Controller{
		
		public function index(){
			if(!$this->session->userdata('admin_logged_in')){
				redirect('');
			}

			$data['title'] = 'Ages';

			$data['ages'] = $this->age_model->get_ages();

			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/ages/index', $data);
			$this->load->view('admin/templates/footer');
		}

		public function create(){
			if(!$this->session->userdata('admin_logged_in')){
				redirect('');
			}

			$data['title'] = 'New Age';

			$this->form_validation->set_rules('age', 'Age', 'required|callback_check_age_exists');


			if($this->form_validation->run() === FALSE){

				$this->load->view('admin/templates/header', $data);
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/ages/create', $data);
				$this->load->view('admin/templates/footer');
				
			} else {

				$this->age_model->create();
				// Set message
				$this->session->set_flashdata('age_created', 'Your age are now created');

				redirect('admin/ages');
			}
		}

		// Check if age exists
		public function check_age_exists($age){
			$this->form_validation->set_message('check_age_exists', 'That age is taken. Please choose a different one');
			if($this->age_model->check_age_exists($age)){
				return true;
			} else {
				return false;
			}
		}

		// Delete age
		public function delete($id){
			if(!$this->session->userdata('admin_logged_in')){
				redirect('');
			}

			$this->age_model->delete_age($id);

			// Set message
			$this->session->set_flashdata('age_deleted', 'Your age has been deleted');

			redirect('admin/ages');
		}
	}
?>