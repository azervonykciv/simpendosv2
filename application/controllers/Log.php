<?php
class Log extends CI_Controller {

	function __construct(){
		parent::__construct();
    }
	public function index()
	{
		$user = $this->Log_model->GetLog();
		$data = array('log' => $user,);
		$this->template->load('templateSuperAdmin','Log/dataLog', $data);
	}

	public function templeteDosen(){
		$user = $this->Log_model->GetLog();
		$data = array('log' => $user,);
		$this->template->load('templateDosen','Log/dataLog', $data);
	}

	public function templeteAdmin(){
		$user = $this->Log_model->GetLog();
		$data = array('log' => $user,);
		$this->template->load('template','Log/dataLog', $data);
	}

	public function templeteSuperAdmin(){
		$user = $this->Log_model->GetLog();
		$data = array('log' => $user,);
		$this->template->load('templateSuperAdmin','Log/dataLog', $data);
	}

}