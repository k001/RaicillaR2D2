<?php

class Admin extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->output->enable_profiler(TRUE);
		$this->load->language('spanish', 'spanish');
		$this->load->model('User');
		$this->User->is_logged();
		//($this->user->is_logged()) ? true : redirect("/admin/users/login");
	}
	
	public function index(){
		$this->load->view("admin/admin_view");
	}
	
	public	function dashboard(){
		$this->load->view("admin/charts_view");
	}
	
}
?>