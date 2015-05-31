<?php

	class Cars_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

		
		public function get_all_cars(){
		$query=$this->db->get('cars');
		return $query->result_array();
		}
		public function add_car(){
			$cl=array(
				'model'=>$this->input->post('model'),
				'year'=>$this->input->post('year'),
				'price'=>$this->input->post('price'),
				'maxSpeed'=>$this->input->post('maxSpeed'),
				);
			$this->db->insert('cars',$cl);
		}
	}

?>