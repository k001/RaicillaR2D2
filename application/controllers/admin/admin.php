<?php

class Admin extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		//$this->output->enable_profiler(TRUE);
		$this->load->language('spanish', 'spanish');
		$this->load->model("campaign_model");
		($this->campaign_model->is_logged()) ? true : redirect("/admin/users/login");
	}
	
	public function index(){
		$this->load->view("assets/index_view");
	}
	
	public	function dashboard(){
		$this->load->view("admin/charts_view");
	}
	
}
?>