<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		if (! ($this->session->has_userdata('Status')) ) {
			redirect('login');
		}
		$this->load->model('ModelJadwal');
        $this->load->model('Dosen_model', 'dm');
        $this->load->model('Jadwal_dosen_model', 'jdm');
        $this->load->model('Jadwal_report_model', 'jrm');
		$this->load->model('notif_model','nm');
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
		$Jam_KelasAwal  = $this->input->post('Jam_KelasAwal');
		$Jam_KelasAkhir = $this->input->post('Jam_KelasAkhir');
		$jadwal = [
			'ID_Jadwal' => $this->input->post('ID_Jadwal'),
			'ID_Mk'     => $this->input->post('ID_Mk'),
			'ID_Dosen'  => $this->input->post('ID_Dosen'),
			'Kelas_MK'  => $this->input->post('Kelas_MK'),
			'Jam_Kelas' => $Jam_KelasAwal." - ".$Jam_KelasAkhir,
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
				redirect('dashboard/homeadmin');
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

	public function get_scheduleOnNotif($id_notif,$id)
	{


		$mk 	= $this->ModelJadwal->GetMatakuliah();
		$this->nm->delete($id_notif);
		$data 	= $this->ModelJadwal->getJadwalByDosen($id);
		$user 	= $this->m_login->ambil_user($this->session->userdata('uname'));
		$dosen  = $this->dm->GetDosen("where ID_Dosen = '$id'");
		$jadwal = [
			'dosen' => $dosen,
			'data' 	=> $data,
			'mk' 	=> $mk,
			'user' 	=> $user,
			'ID' 	=> $id,
		];
		$this->template->load('template','penjadwalan/tampilPenjadwalan', $jadwal);
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
		$data['user'] = $this->m_login->ambil_user($this->session->userdata('uname'));
		$this->template->load('templateSuperAdmin','admin/list_dosen', $data);
	}

	public function listDosenAdmin()
	{
		$dosen = $this->dm->get_all();
		$user = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = [
			'dosen' => $dosen,
			'user' => $user,
		];
		// echo "<pre>";
		// print_r($data);
		$data['user'] = $this->m_login->ambil_user($this->session->userdata('uname'));
		$this->template->load('template','Dosen/list_dosen', $data);
	}

	public function insertDosen()
	{
		$user = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = [
			'user' => $user,
		];
		$this->template->load('templateSuperAdmin','admin/insert-dosen_view',$data);
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
		$this->template->load('templateSuperAdmin','admin/edit-dosen_view', $data);
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

	public function program($ID_Dosen){
		$mk 	= $this->ModelJadwal->GetMatakuliah();
        $data 	= $this->ModelJadwal->GetJadwal("where ID_Dosen='".$ID_Dosen."'");
        $user 	= $this->m_login->ambil_user($this->session->userdata('uname'));
		$dosen  = $this->dm->GetDosen("where ID_Dosen = '$ID_Dosen'");
		$jadwal = [
			'dosen' => $dosen,
			'data' 	=> $data,
            'mk' 	=> $mk,
            'user' 	=> $user,
            'ID' 	=> $ID_Dosen,
		];
		$this->template->load('template','penjadwalan/tampilPenjadwalan', $jadwal);
	}

	//ini
	public function pro_jadwal(){
        $ID_Dosen 		= $_POST['ID_Dosen'];
        $ID_Mk			= $_POST['ID_Mk'];
        $Kelas_MK 		= $_POST['Kelas_MK'];
        $Jam_KelasAwal 	= $_POST['Jam_KelasAwal'];
        $Jam_KelasAkhir	= $_POST['Jam_KelasAkhir'];
        $Jam_Kelas 		= $Jam_KelasAwal." - ".$Jam_KelasAkhir;
        $ID_User 		=  $_POST['ID_User'];


        $data_insert = array(
            'ID_Mk' => $ID_Mk,
            'ID_Dosen' => $ID_Dosen,
            'Kelas_MK' => $Kelas_MK,
            'Jam_Kelas' => $Jam_Kelas
        );



		$cek = $this->ModelJadwal->checkData($Kelas_MK,'jadwal','Kelas_MK');
		$cek1 = $this->ModelJadwal->checkData($Jam_Kelas,'jadwal','Jam_Kelas');

		if($cek>0 && $cek1>0)
		{
			$this->session->set_flashdata('pesan','Data Jadwal Sudah ada');
			redirect('Admin/program/'.$ID_Dosen);

		}else
		{

			// Insert Notification
			$dos = $this->dm->get_all();

			foreach ($dos as $d) {
				$notif = [
					'ID_User' 			=> $d->ID_Dosen,
					'Nama_Notif' 		=> "Jadwal Kuliah",
					'Detail_Notifikasi' => "Kelas " . $Kelas_MK . " Pada Jam Kelas " . $Jam_Kelas . " Telah diambil",
				];
				// $this->nm->post_notif($notif);
			};

			$res = $this->ModelJadwal->InsertData('jadwal',$data_insert);

			// End Insert JDM

			// insert jdm
			$data_jdm = [
				'id_dosen' 		=> $ID_Dosen,
				'id_jadwal' 	=> $this->ModelJadwal->getJadwalWhere($data_insert)[0]->ID_Jadwal,
				'status_jadwal' => '0'
			];
			$res1 = $this->jdm->insert($data_jdm);
			// end insert jdm

			$this->session->set_flashdata('sukses','Tambah Data Sukses');

			if ($res>=1 && $res1>=1) {
				$Log = [
					'ID_User'	=> $ID_User,
					'Tanggal'	=> date('Y-m-d H:i:s'),
					'Aktifitas' => "Program Jadwal Dosen ".$ID_Dosen." Mata Kuliah ".$ID_Mk,
				];

				if($this->Log_model->insertLog($Log)){

					$this->program($ID_Dosen);
				}else{
					echo "gagal insert data log";
				}

			} else {
				$this->session->set_flashdata('pesan','Insert Data Gagal');
				redirect('Admin/program/'.$ID_Dosen);
			}
		}
    }
}