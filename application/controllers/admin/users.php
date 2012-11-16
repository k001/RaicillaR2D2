<?php

class Users extends CI_Controller{
	
	function __construct(){
		parent::__construt();
		$this->load->model('User');	
	}	

	function index(){

	}

	function login(){
		$this->load->view("assets/index_view");
	}

	function logout(){

	}
}

?>