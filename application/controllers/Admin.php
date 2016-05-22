<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		if (! ($this->session->has_userdata('Status')) ) {
			redirect('login');
		}
        $this->load->model('ModelJadwal', 'jm');
        $this->load->model('Dosen_model', 'dm');
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
		$this->template->load('template', 'admin/update-jadwal-report_view', $data);
	}
	public function updateJadwal($id, $id_jadwal_dosen, $id_report)
	{
		$ID = $this->input->post('ID');
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
			$Log = [
				'ID_User'	=> $ID,
				'Tanggal'	=> date('Y-m-d H:i:s'),
				'Aktifitas' => "Update Jadwal",
			];
			if($this->Log_model->insertLog($Log)){
				redirect('admin/listreport');
			}else{
				echo "gagal insert data log";
			}
		} else {
			echo "gagal update";
		}
	}
	public function tolakReport($id_report, $id_jadwal_dosen,$ID)
	{
		// 3 = Laporan di tolak
		$this->jdm->updateStatus($id_jadwal_dosen, 3);
		// 1 = Laporan sudah di proses
		$this->jrm->updateStatus($id_report, 1);
		$Log = [
			'ID_User'	=> $ID,
			'Tanggal'	=> date('Y-m-d H:i:s'),
			'Aktifitas' => "Tolak Report",
		];
		if($this->Log_model->insertLog($Log)){
			redirect('admin/listreport');
		}else{
			echo "gagal insert data log";
		}
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
	public function listDosen()
	{
		$dosen = $this->dm->get_all();
		$user = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = [
			'dosen' => $dosen,
			'user' => $user,
		];
		// echo "<pre>";
		// print_r($data);
		$this->template->load('template','admin/list_dosen', $data);
	}
	public function insertDosen()
	{
		$user = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = [
			'user' => $user,
		];
		$this->template->load('template','admin/insert-dosen_view',$data);
	}
	public function storeDosen()
	{
		$dosen = [
			'id_dosen'          => $this->input->post('nidn'),
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
			$User = $this->input->post('ID_User');
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
					redirect('admin/listdosen');
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
	public function editDosen($ID_Dosen)
	{
		$user = $this->m_login->ambil_user($this->session->userdata('uname'));
		$dosen = $this->dm->get_byid($ID_Dosen);
		$dDosenU = $this->User_model->getUser_byid($ID_Dosen);
		$data = [
			'dosen' 	=> $dosen,
			'dosenUser' => $dDosenU,
			'user'		=> $user,
		];
		// echo "<pre>";
		// print_r($data);
		// die();
		$this->template->load('template','admin/edit-dosen_view', $data);
	}
	public function updateDosen()
	{
		$id = $this->input->post('ID_Dosen');
		$Status = "Dosen";
		$User = $this->input->post('ID_User');
		$dosen = [
			'ID_Dosen'          => $id,
			'nama_dosen'        => $this->input->post('nama_dosen'),
			'tempat_lahir'      => $this->input->post('tempat_lahir'),
			'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
			'gelar_lengkap'     => $this->input->post('gelar_lengkap'),
			'alamat_malang'     => $this->input->post('alamat_malang'),
			'ref_aktivasiDosen' => $this->input->post('ref_aktivasiDosen'),
		];
		// echo "<pre>";
		// print_r($dosen);
		// die();
		
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
					redirect('admin/listdosen');
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
	public function deleteDosen($ID_Dosen, $ID_User)
	{
		$this->dm->delete($ID_Dosen);
		$this->User_model->deleteUser($ID_Dosen);

		$Log = [
			'ID_User'	=> $ID_User,
			'Tanggal'	=> date('Y-m-d H:i:s'),
			'Aktifitas' => "Delete data dosen ".$ID_User,
		];
		if($this->Log_model->insertLog($Log)){
			redirect('admin/listdosen');
		}else{
			echo "gagal insert data log";
		}
	}
}