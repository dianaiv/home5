<?php
class Sponsors extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('sponsors_model');
			
	}
	
	public function show_add_sponsors(){
		$this->load->library('form_validation');
		$this->load->view('add_sponsors');

	}

	public function add_sponsors(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('sponsor','sponsor','required');
		$this->form_validation->set_rules('sector','sector','required');		
		$this->form_validation->set_rules('country','country','required');
		$this->form_validation->set_rules('president','president','required');
		

		if($this->form_validation->run()===FALSE){
			$this->show_add_sponsors();
		}else{
				$this->sponsors_model->add_sponsor();
		}
	}
}

?>