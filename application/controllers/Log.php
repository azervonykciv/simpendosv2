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
}