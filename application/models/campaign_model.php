<?php

class Campaign_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}
	
	public function is_logged()
	{
		$username = $this->session->userdata('username');
		$query = $this->db->getwhere('users', array('username'=>$username), 1);
		if($query->num_rows() > 0)
			return true;
		return false;
	}
	
}