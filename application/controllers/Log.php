<?php
class Log extends CI_Controller {

	function __construct(){
		parent::__construct();
		$ambil_akun	= $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = array(
			'user' => $ambil_akun,
		);
		if($stat != "Dosen" || $stat || "Admin" && $stat || "Super Admin"){
			redirect('login');
		}
    }
	public function index()
	{
		$log = $this->Log_model->GetLog();
		$user  = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = array(
			'log' => $log,
			'user'=> $user,
		);
		$this->template->load('templateSuperAdmin','Log/dataLog', $data);
	}

}