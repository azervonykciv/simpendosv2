<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{

	function __construct(){
		parent::__construct();
		if (! ($this->session->has_userdata('Status')) ) {
			redirect('login');
		}
        $this->load->model('Dosen_model', 'dm');
        $this->load->model('Jadwal_dosen_model', 'jdm');
        $this->load->model('Jadwal_report_model', 'jrm');
	}

	public function index()
	{
		
	}
	
	public function jadwalByNidn($nidn)
	{
		$jadwal = $this->jdm->getJadwalDosen($nidn);
		$user = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = [
			'jadwal' => $jadwal,
			'user' => $user,
		];
		$this->template->load('templateDosen','dosen/jadwal-dosen_view', $data);
	}
	public function konfirmasi($id)
	{
		// 2 = Sudah dikonfirmasi
		$this->jdm->updateStatus($id, 2);
		redirect('dosen/jadwalByNidn/'.$this->session->userdata('uname'));
	}
	public function report($id)
	{
		$user = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = [
			'id' => $id,
			'user' => $user,
		];
		$this->template->load('template','dosen/report-jadwal-dosen_view', $data);
	}
	public function insertreport()
	{
		$user = $this->session->userdata('uname');
		$id = $this->input->post('id');
		$ID_User = $this->input->post('ID_User');
		$user = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = [
			'user' => $user,
		];
		$report = [
			'id_jadwal_dosen' => $id,
			'subject'         => $this->input->post('subject'),
			'deskripsi'       => $this->input->post('deskripsi'),
		];
		// 1 = Proses Laporan
		$this->jdm->updateStatus($id, 1);
		if ($this->jrm->insert($report)) {
			$Log = [
				'ID_User'	=> $ID_User,
				'Tanggal'	=> date('Y-m-d H:i:s'),
				'Aktifitas' => "Insert data dosen ".$this->input->post('nidn'),
			];
			if($this->Log_model->insertLog($Log)){
				redirect('dosen/jadwalByNidn/'.$user);
			}else{
				echo "gagal insert data log";
			}	
		}
	}
}