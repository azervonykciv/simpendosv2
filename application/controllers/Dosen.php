<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{

	function __construct(){
		parent::__construct();
        $this->load->model('Dosen_model', 'dm');
        $this->load->model('Jadwal_dosen_model', 'jdm');
        $this->load->model('Jadwal_report_model', 'jrm');
	}

	public function index()
	{
		$dosen = $this->dm->get_all();
		$data = [
			'dosen' => $dosen,
		];
		$this->template->load('template','dosen/dosen_view', $data);
	}
	public function insert()
	{
		$this->template->load('template','dosen/insert-dosen_view');
	}
	public function store()
	{
		$dosen = [
			'nidn'              => $this->input->post('nidn'),
			'nama_dosen'        => $this->input->post('nama_dosen'),
			'tempat_lahir'      => $this->input->post('tempat_lahir'),
			'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
			'gelar_lengkap'     => $this->input->post('gelar_lengkap'),
			'alamat_malang'     => $this->input->post('alamat_malang'),
			'ref_aktivasiDosen' => $this->input->post('ref_aktivasiDosen'),
		];
		if ($this->dm->insert($dosen)) {
			redirect('dosen');
		} else {
			echo "Gagal insert";
		}
	}
	public function edit($id)
	{
		$dosen = $this->dm->get_byid($id);
		$data = [
			'dosen' => $dosen
		];
		$this->template->load('template','dosen/edit-dosen_view', $data);
	}
	public function update()
	{
		$id = $this->input->post('nidn');
		$dosen = [
			'nidn'              => $id,
			'nama_dosen'        => $this->input->post('nama_dosen'),
			'tempat_lahir'      => $this->input->post('tempat_lahir'),
			'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
			'gelar_lengkap'     => $this->input->post('gelar_lengkap'),
			'alamat_malang'     => $this->input->post('alamat_malang'),
			'ref_aktivasiDosen' => $this->input->post('ref_aktivasiDosen'),
		];
		$this->dm->update($dosen, $id);
		redirect('dosen');
		
		// if ($this->dm->update($dosen, $id)) {
		// 	redirect('dosen');
		// } else {
		// 	echo "Gagal update";
		// }
	}
	public function delete($id)
	{
		$this->dm->delete($id);
		redirect('dosen');
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