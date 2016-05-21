<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		if (! ($this->session->has_userdata('Status')) ) {
			redirect('login');
		}
        $this->load->model('ModelJadwal', 'jm');
        $this->load->model('Jadwal_dosen_model', 'jdm');
        $this->load->model('Jadwal_report_model', 'jrm');
	}
	public function index()
	{
		
	}
	public function listReport()
	{
		$report = $this->jrm->getReport();
		$user = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = [
			'report' => $report,
			'user' => $user,
		];
		// echo "<pre>";
		// print_r($data);
		// die();
		$this->template->load('template','admin/list-dosen-report_view', $data);
	}
	public function editReport($id)
	{
		$jadwal = $this->jdm->getReport($id);
		$user = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = [
			'jadwal' => $jadwal,
			'user' => $user,
		];
		// echo "<pre>";
		// print_r($data);
		$this->template->load('template', 'admin/update-jadwal-report_view', $data);
	}
	public function updateJadwal($id, $id_jadwal_dosen, $id_report)
	{
		$jadwal = [
			'ID_Jadwal' => $this->input->post('ID_Jadwal'),
			'ID_Mk' => $this->input->post('ID_Mk'),
			'ID_Dosen' => $this->input->post('ID_Dosen'),
			'Kelas_MK' => $this->input->post('Kelas_MK'),
			'Jam_Kelas' => $this->input->post('Jam_Kelas'),
		];
		// 3 = Laporan belum dikonfirmasi
		$this->jdm->updateStatus($id_jadwal_dosen, 0);
		// 1 = Laporan sudah di proses
		$this->jrm->updateStatus($id_report, 1);
		$result = $this->jdm->updateJadwal($id, $jadwal);
		if ($result) {
			redirect('admin/listreport');
		} else {
			echo "gagal update";
		}
	}
	public function tolakReport($id_report, $id_jadwal_dosen)
	{
		// 3 = Laporan di tolak
		$this->jdm->updateStatus($id_jadwal_dosen, 3);
		// 1 = Laporan sudah di proses
		$this->jrm->updateStatus($id_report, 1);
		redirect('admin/listreport');
	}
	public function detailreport($id)
	{
		$jadwal = $this->jrm->getWhere('id_jadwal_report', $id);
		$user = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = [
			'jadwal' => $jadwal,
			'user' => $user,
		];
		$this->template->load('template','admin/detail-dosen-report_view', $data);
	}
}