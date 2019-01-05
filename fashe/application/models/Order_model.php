<?php
	class Order_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		//create order
		public function create_order($order_image){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'customer_id' => $this->session->userdata('customer_id'),
				'category_id' => $this->input->post('category_id'),
				'material_id' => $this->input->post('material_id'),
				'photo' => $post_image,
				'description' => $this->input->post('description')
			);

			return $this->db->insert('advertisements', $data);
		}
	}
?>