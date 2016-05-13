<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{

	function __construct(){
		parent::__construct();
        $this->load->model('Dosen_model');
	}

	public function index()
	{
		$dosen = $this->Dosen_model->get_all();
		$data = [
			'dosen' => $dosen,
		];
		$this->load->view('dosen/v_dosen', $data);
	}
}