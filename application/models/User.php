<?php 

class User extends CI_Model {
	/*
	var $username;

	function __construct()
	{
		parent::__construct();
		//$this->username = $this->session->userdata('username');
	}*/
    function __construct()
    {
        parent::__construct();
    }
/*
	function is_logged()
	{
		//$query = $this->db->getwhere('ci_sessions', array($this->username) );
		if($query->num_rows() > 0)
		{
			return true;
		else
			return false;
		}
	}
*/

}
?>