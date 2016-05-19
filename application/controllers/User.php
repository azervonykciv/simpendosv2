<?php
class User extends CI_Controller {

	function __construct(){
		parent::__construct();
    }
	public function index()
	{
		$user = $this->User_model->GetUser();
		$data = array('user' => $user,);
		$this->load->view('User/dataUSer', $data);
	}
}
