<?php
class Log extends CI_Controller {

	function __construct(){
		parent::__construct();
    }
	public function index()
	{
		$user = $this->Log_model->GetLog();
		$data = array('log' => $user,);
		$this->load->view('Log/dataLog', $data);
	}

	public function login(){
		$this->load->view('login');
	}

	public function dataUser(){
		$user = $this->User->GetUser();
		$data = array('user' => $user,);
		$this->load->view('dataUser', $data);
	}

	public function dataLog(){
		$user = $this->Log->GetLog();
		$data = array('log' => $user,);
		$this->load->view('Log/dataLog', $data);
	}
}
