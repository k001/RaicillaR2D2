<?php

class Users extends CI_Controller{
	
	public function __construct(){
		parent::__construt();
		$this->load->]model('users_model');	
	}	

	public function index(){

	}

	public function login(){
		$this->load->view("assets/index_view");
	}

	public function logout(){

	}
}
