<?php 
	class Products extends CI_Controller{
		
		public function index(){
			$data['product_name'] = 'Latest Products';

			$data['products'] = $this->product_model->get_products();

			$this->load->view('templates/header');
			$this->load->view('products/index', $data);
			$this->load->view('templates/footer');
		}
	}

?>