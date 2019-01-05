<?php 
	class Materials extends CI_Controller{
		
		public function index(){
			if(!$this->session->userdata('admin_logged_in')){
				redirect('');
			}

			$data['title'] = 'Material';

			$data['materials'] = $this->material_model->get_materials();

			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/materials/index', $data);
			$this->load->view('admin/templates/footer');
		}

		public function create(){
			if(!$this->session->userdata('admin_logged_in')){
				redirect('');
			}

			$data['title'] = 'New Material';

			
			$this->form_validation->set_rules('title', 'Title', 'required|callback_check_material_exists');
			$this->form_validation->set_rules('description', 'Description', 'required');


			if($this->form_validation->run() === FALSE){

				$this->load->view('admin/templates/header', $data);
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/materials/create', $data);
				$this->load->view('admin/templates/footer');

			} else {

				// Upload Image
				$config['upload_path'] = './assets/images/materials';
				$config['allowed_types'] = 'gif|jpg|png|GIF|JPG|PNG';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$material_image = 'noimage.png';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$material_image = $_FILES['userfile']['name'];
				}

				$this->material_model->create_material($material_image);
				// Set message
				$this->session->set_flashdata('material_created', 'Your material are now created');

				redirect('admin/materials');
			}
		}

		// Check if material exists
		public function check_material_exists($material){
			$this->form_validation->set_message('check_material_exists', 'That material is taken. Please choose a different one');
			if($this->material_model->check_material_exists($material)){
				return true;
			} else {
				return false;
			}
		}

		// Delete material
		public function delete($id){
			if(!$this->session->userdata('admin_logged_in')){
				redirect('');
			}

			$this->material_model->delete_material($id);

			// Set message
			$this->session->set_flashdata('material_deleted', 'Your Material has been deleted');

			redirect('admin/materials');
		}
	}
?>