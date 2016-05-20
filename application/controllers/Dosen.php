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
			$Status = "Dosen";
			$Password = "123456";
			$User = "user";
			$uDosen = [
				'ID_User'           => $this->input->post('nidn'),
				'Nama_User'        	=> $this->input->post('nama_dosen'),
				'Password'      	=> $Password,
				'Status'     		=> $Status,
			];
			if($this->User_model->insertUser($uDosen)){
				$Log = [
					'ID_User'	=> $User,
					'Tanggal'	=> date('Y-m-d H:i:s'),
					'Aktifitas' => "Insert data dosen ".$this->input->post('nidn'),
				];
				if($this->Log_model->insertLog($Log)){
					redirect('dosen');
				}else{
					echo "gagal insert data log";
				}
			}else{
				echo "Gagal insert data user di method store";
			}
		} else {
			echo "Gagal insert";
		}
	}
	public function edit($id)
	{
		$dosen = $this->dm->get_byid($id);
		$dDosenU = $this->User_model->getUser_byid($id);
		$data = [
			'dosen' 	=> $dosen,
			'dosenUser' => $dDosenU,
		];
		$this->template->load('template','dosen/edit-dosen_view', $data);
	}
	public function update()
	{
		$id = $this->input->post('nidn');
		$Status = "Dosen";
		$User = "user";
		$dosen = [
			'nidn'              => $id,
			'nama_dosen'        => $this->input->post('nama_dosen'),
			'tempat_lahir'      => $this->input->post('tempat_lahir'),
			'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
			'gelar_lengkap'     => $this->input->post('gelar_lengkap'),
			'alamat_malang'     => $this->input->post('alamat_malang'),
			'ref_aktivasiDosen' => $this->input->post('ref_aktivasiDosen'),
		];
		
		if ($this->dm->update($dosen, $id)) {
			$dosenU = [
				'ID_User'          => $id,
				'Nama_User'        => $this->input->post('nama_dosen'),
				'Status'     	   => $Status,
			];
			if($this->User_model->updateUser($dosenU, $id)){
				$Log = [
					'ID_User'	=> $User,
					'Tanggal'	=> date('Y-m-d H:i:s'),
					'Aktifitas' => "Update data dosen ".$id,
				];
				if($this->Log_model->insertLog($Log)){
					redirect('dosen');
				}else{
					echo "gagal insert data log";
				}
			}else{
				echo "gagal mengganti data di tabel user";
			}
		} else {
			echo "Gagal update";
		}
	}
	public function delete($id)
	{
		$this->dm->delete($id);
		$this->User_model->deleteUser($id);
		$User = "user";

		$Log = [
			'ID_User'	=> $User,
			'Tanggal'	=> date('Y-m-d H:i:s'),
			'Aktifitas' => "Delete data dosen ".$id,
		];
		if($this->Log_model->insertLog($Log)){
			redirect('dosen');
		}else{
			echo "gagal insert data log";
		}
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