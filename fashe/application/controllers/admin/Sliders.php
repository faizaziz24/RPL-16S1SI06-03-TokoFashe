<?php 
	class Sliders extends CI_Controller{
		
		public function index(){
			if(!$this->session->userdata('admin_logged_in')){
				redirect('');
			}

			$data['title'] = 'Slider';

			$data['sliders'] = $this->slider_model->get_sliders();

			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/sliders/index', $data);
			$this->load->view('admin/templates/footer');
		}

		public function create(){
			if(!$this->session->userdata('admin_logged_in')){
				redirect('');
			}

			$data['title'] = 'New Slider';

			$this->form_validation->set_rules('title', 'Title', 'required|callback_check_slider_exists');
			$this->form_validation->set_rules('description', 'Description', 'required');


			if($this->form_validation->run() === FALSE){

				$this->load->view('admin/templates/header', $data);
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/sliders/create', $data);
				$this->load->view('admin/templates/footer');
				
			} else {
				
				// Upload Image
				$config['upload_path'] = './assets/images/slides';
				$config['allowed_types'] = 'gif|jpg|png|GIF|JPG|PNG';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$slider_image = 'noimage.png';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$slider_image = $_FILES['userfile']['name'];
				}

				$this->slider_model->create_slider($slider_image);
				// Set message
				$this->session->set_flashdata('slider_created', 'Your slider are now created');

				redirect('admin/sliders');
			}
		}

		public function check_slider_exists($slider){
			$this->form_validation->set_message('check_slider_exists', 'That Slider is taken. Please choose a different one');
			if($this->slider_model->check_slider_exists($slider)){
				return true;
			} else {
				return false;
			}
		}

		public function delete($id){
			if(!$this->session->userdata('admin_logged_in')){
				redirect('');
			}

			$image_file_name = $this->db->select('slider_image')->get_where('sliders', array('slider_id' => $id))->row()->slider_image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\slides\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory

			$this->slider_model->delete_slider($id);

			// Set message
			$this->session->set_flashdata('slider_deleted', 'Your slider has been deleted');

			redirect('admin/sliders');
		}
	}
?>