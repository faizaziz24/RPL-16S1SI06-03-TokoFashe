<?php 
	class Dashboard extends CI_Controller{
		
		public function index(){
			if(!$this->session->userdata('admin_logged_in')){
				redirect('');
			}

			$data['sum_customers_all'] = $this->customer_model->sum_customers_all();
			
			$data['title'] = 'Home Admin';

			$this->load->view('admin/dashboard', $data);
		}
	}

?>