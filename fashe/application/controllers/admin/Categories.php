<?php 
	class Categories extends CI_Controller{
		
		public function index(){
			if(!$this->session->userdata('admin_logged_in')){
				redirect('');
			}

			$data['title'] = 'Category';

			$data['categories'] = $this->category_model->get_categories();

			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/categories/index', $data);
			$this->load->view('admin/templates/footer');
		}

		public function create(){
			if(!$this->session->userdata('admin_logged_in')){
				redirect('');
			}

			$data['title'] = 'New Category';

			$this->form_validation->set_rules('title', 'Title', 'required|callback_check_category_exists');
			$this->form_validation->set_rules('description', 'Description', 'required');


			if($this->form_validation->run() === FALSE){

				$this->load->view('admin/templates/header', $data);
				$this->load->view('admin/templates/sidebar');
				$this->load->view('admin/categories/create', $data);
				$this->load->view('admin/templates/footer');
				
			} else {
				
				// Upload Image
				$config['upload_path'] = './assets/images/categories';
				$config['allowed_types'] = 'gif|jpg|png|GIF|JPG|PNG';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$category_image = 'noimage.png';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$category_image = $_FILES['userfile']['name'];
				}

				$this->category_model->create_category($category_image);
				// Set message
				$this->session->set_flashdata('category_created', 'Your category are now created');

				redirect('admin/categories');
			}
		}

		public function check_category_exists($category){
			$this->form_validation->set_message('check_category_exists', 'That Category is taken. Please choose a different one');
			if($this->category_model->check_category_exists($category)){
				return true;
			} else {
				return false;
			}
		}

		public function delete($id){
			if(!$this->session->userdata('admin_logged_in')){
				redirect('');
			}

			$image_file_name = $this->db->select('category_image')->get_where('categories', array('category_id' => $id))->row()->category_image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\categories\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory

			$this->category_model->delete_category($id);

			// Set message
			$this->session->set_flashdata('category_deleted', 'Your category has been deleted');

			redirect('admin/categories');
		}
	}
?>