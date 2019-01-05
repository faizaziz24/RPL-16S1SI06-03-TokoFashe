<?php
	class Product_model extends CI_Model{
		
		public function __construct(){
			$this->load->database();
		}

		public function get_products($product_slug = FALSE){
			if($product_slug === FALSE){
				$this->db->join('ages', 'ages.age_id = products.age_id');
				$this->db->join('materials', 'materials.material_id = products.material_id');

				$this->db->order_by('products.product_id', 'DESC');

				$query = $this->db->get('products');
				return $query->result_array();
			}

			$this->db->join('ages', 'ages.age_id = products.age_id');
			$this->db->join('materials', 'materials.material_id = products.material_id');
			
			$query = $this->db->get_where('products', array('product_slug' => $product_slug));
			return $query->row_array();
		}

		public function get_categories(){
			$this->db->order_by('category_name');
			$query = $this->db->get('categories');
			return $query->result_array();
		}		

		public function get_posts_by_category($category_id){
			$this->db->join('categories', 'categories.category_id = products.category_id');
			$this->db->order_by('products.product_id', 'DESC');

			$query = $this->db->get_where('products', array('category_id' => $category_id));
			return $query->result_array();
		}

		public function get_ages(){
			$this->db->order_by('age_name');
			$query = $this->db->get('ages');
			return $query->result_array();
		}		

		public function get_posts_by_ages($ages_id){
			$this->db->join('ages', 'ages.age_id = products.age_id');
			$this->db->order_by('products.product_id', 'DESC');

			$query = $this->db->get_where('products', array('ages_id' => $ages_id));
			return $query->result_array();
		}
	}	

?>