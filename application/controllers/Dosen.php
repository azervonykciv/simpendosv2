<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{

	function __construct(){
		parent::__construct();
        $this->load->model('Dosen_model');
        $this->load->model('Jadwal_dosen_model', 'jdm');
	}

	public function index()
	{
		$dosen = $this->Dosen_model->get_all();
		$data = [
			'dosen' => $dosen,
		];
		$this->template->load('template','dosen/v_dosen', $data);
		// $this->load->view('dosen/v_dosen', $data);
	}
	public function jadwalByNidn($nidn)
	{
		$jadwal = $this->jdm->getJadwalByDosen($nidn);
		$data = [
			'jadwal' => $jadwal,
		];
		// echo "<pre>";
		// print_r($jadwal);
		// echo "</pre>";
		$this->template->load('template','dosen/jadwal-dosen', $data);
		// $this->load->view('dosen/jadwal-dosen', $data);
	}
	public function konfirmasi($id)
	{
		# code...
	}

}