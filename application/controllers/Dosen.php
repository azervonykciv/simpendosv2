<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{
	//Hai ini adalah class control

	function __construct(){
		parent::__construct();
        $this->load->model('Dosen_model');
        $this->load->model('ModelJadwal', 'jm');
	}

	public function index()
	{
		$dosen = $this->Dosen_model->get_all();
		$data = [
			'dosen' => $dosen,
		];
		$this->load->view('dosen/v_dosen', $data);
	}
	public function jadwalByNidn($nidn)
	{
		$jadwal = $this->jm->getJadwalByDosen($nidn);
		$data = [
			'jadwal' => $jadwal,
		];
		$this->load->view('dosen/jadwal-dosen', $data);
	}
}