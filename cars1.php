<?php
class Cars1 extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('cars_model');
			
	}
	public function show_all_cars(){
		$data['all_cars']=$this->cars_model->get_all_cars();
		$this->load->view('show_cars',$data);
	}
	public function show_add_cars(){
		$this->load->library('form_validation');
		$this->load->view('add_cars');

	}

	public function add_cars(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('model','model','required');
		$this->form_validation->set_rules('year','year','required');
		$this->form_validation->set_rules('price','price','required');
		$this->form_validation->set_rules('maxSpeed','maxSpeed','required');
		
		if($this->form_validation->run()===FALSE){
			$this->show_add_cars();
		}else{
				$this->cars_model->add_car();
		}
	}
}
?>