<?php
class Log extends CI_Controller {

	function __construct(){
		parent::__construct();
		if (! ($this->session->has_userdata('Status')) ) {
			redirect('login');
		}
    }
	public function index()
	{
		$log 	= $this->Log_model->GetLog();
		$user  	= $this->m_login->ambil_user($this->session->userdata('uname'));
		$data 	= array(
			'log' => $log,
			'user'=> $user,
		);
		$this->template->load('templateSuperAdmin','Log/dataLog', $data);
	}

}