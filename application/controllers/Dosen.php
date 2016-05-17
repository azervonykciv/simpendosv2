<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{

	function __construct(){
		parent::__construct();
        $this->load->model('Dosen_model');
        $this->load->model('Jadwal_dosen_model', 'jdm');
        $this->load->model('Jadwal_report_model', 'jrm');
	}

	public function index()
	{
		$dosen = $this->Dosen_model->get_all();
		$data = [
			'dosen' => $dosen,
		];
		$this->template->load('template','dosen/dosen_view', $data);
	}
	public function jadwalByNidn($nidn)
	{
		$jadwal = $this->jdm->getJadwalByDosen($nidn);
		$data = [
			'jadwal' => $jadwal,
		];
		$this->template->load('template','dosen/jadwal-dosen_view', $data);
	}
	public function konfirmasi($id)
	{
		// 2 = Sudah dikonfirmasi
		$this->jdm->updateStatus($id, 2);
		redirect('dosen/jadwalByNidn/701058601');
	}
	public function report($id)
	{
		$data = [
			'id' => $id,
		];
		$this->template->load('template','dosen/report-jadwal-dosen_view', $data);
	}
	public function insertreport()
	{
		$id = $this->input->post('id');
		$report = [
			'id_jadwal_dosen' => $id,
			'subject'         => $this->input->post('subject'),
			'deskripsi'       => $this->input->post('deskripsi'),
		];
		// 1 = Proses Laporan
		$this->jdm->updateStatus($id, 1);
		if ($this->jrm->insert($report)) {
			redirect('dosen/jadwalByNidn/701058601');
		}
	}
}