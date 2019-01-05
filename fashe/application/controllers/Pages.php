<?php 
	class Pages extends CI_Controller{
		
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);

			$data['sliders'] = $this->slider_model->get_sliders();
			$data['categories'] = $this->category_model->get_categories();
			$data['materials'] = $this->material_model->get_materials();

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
			$this->form_validation->set_rules('message', 'Message', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/'.$page, $data);
				$this->load->view('templates/footer');
			} else {

				$this->suggestion_model->suggestion();

				// Set message
				$this->session->set_flashdata('suggestion_success', 'Your suggestion has entered');

				redirect('contact');
			}
		}

		public function slider($slug = NULL){

			$data['slider'] = $this->slider_model->get_sliders($slug);

			if(empty($data['slider'])){
				show_404();
			}

			$data['slider_name'] = $data['slider']['slider_name'];

			$this->load->view('templates/header');
			$this->load->view('pages/slider', $data);
			$this->load->view('templates/footer');

		}
	}

?>