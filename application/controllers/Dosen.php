<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{

	function __construct(){
		parent::__construct();
		if ( !($this->session->userdata('Status') === 'Dosen') ) {
			redirect('login');
		}
		$this->load->model('ModelJadwal');
        $this->load->model('Dosen_model', 'dm');
        $this->load->model('Jadwal_dosen_model', 'jdm');
        $this->load->model('Jadwal_report_model', 'jrm');
		$this->load->model('notif_model','nm');
		$this->load->model('User_model','um');
	}

	public function jadwalByNidn($nidn)
	{

		$notifikasi = $this->nm->get_byid($this->session->userdata('uname'));
		$jadwal = $this->jdm->getJadwalDosen($nidn);
		$user = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = [
			'jadwal' => $jadwal,
			'user' => $user,
			'notif' => $notifikasi
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
		$this->template->load('templateDosen','dosen/report-jadwal-dosen_view', $data);
	}

	public function p_dosen($nidn)
	{


		$mk     = $this->ModelJadwal->GetMatakuliah();
		$data = $this->ModelJadwal->GetJadwal("where ID_Dosen='".$nidn."'");
		$user = $this->m_login->ambil_user($this->session->userdata('uname'));
		$jadwal = [
			'data'  => $data,
			'mk'    => $mk,
			'user'  => $user,
		];
		$this->template->load('templateDosen','dosen/penjadwalan_dosen', $jadwal);
	}


	public function pro_jadwal()
	{
		$ID_Dosen = $_POST['ID_Dosen'];
		$ID_Mk = $_POST['ID_Mk'];
		$Kelas_MK = $_POST['Kelas_MK'];
		$Jam_KelasAwal = $_POST['Jam_KelasAwal'];
		$Jam_KelasAkhir = $_POST['Jam_KelasAkhir'];
		$Jam_Kelas = $Jam_KelasAwal . " - " . $Jam_KelasAkhir;
		$ID_User = $_POST['ID_User'];


		$data_insert = array(
			'ID_Mk' => $ID_Mk,
			'ID_Dosen' => $ID_Dosen,
			'Kelas_MK' => $Kelas_MK,
			'Jam_Kelas' => $Jam_Kelas
		);

		$cek = $this->ModelJadwal->checkData($Kelas_MK, 'jadwal', 'Kelas_MK');
		$cek1 = $this->ModelJadwal->checkData($Jam_Kelas, 'jadwal', 'Jam_Kelas');
		if ($cek > 0 && $cek1 > 0) {
			$this->session->set_flashdata('pesan', 'Data Jadwal Sudah ada');
			redirect('Dosen/p_dosen/' . $ID_Dosen);

		} else {

			// Insert Notification
			$dos = $this->dm->get_all();
			$us = $this->um->getuser_bystatus("Admin");
			$ur = $this->nm->get_namebyid($this->session->userdata('uname'));

			foreach($us as $u)
			{
				$notif_ad = [
					'ID_User' => $u->Status,
					'Nama_Notif' => "Jadwal Dosen",
					'Detail_Notifikasi' => "Dosen ".$ur->Nama_User." Melakukan pemrograman mata kuliah",
					'ID_Dosen' => $ID_Dosen,
				];
				$this->nm->post_notif($notif_ad);
			}

			foreach ($dos as $d) {
				$notif = [
					'ID_User' => $d->ID_Dosen,
					'Nama_Notif' => "Jadwal Kuliah",
					'Detail_Notifikasi' => "Kelas " . $Kelas_MK . " Pada Jam Kelas " . $Jam_Kelas . " Telah diambil",
                    'ID_Dosen' => $ID_Dosen,
				];
				$this->nm->post_notif($notif);
			};

			$res = $this->ModelJadwal->InsertData('jadwal', $data_insert);

			// End Insert JDM

			// insert jdm
			$data_jdm = [
				'id_dosen' => $ID_Dosen,
				'id_jadwal' => $this->ModelJadwal->getJadwalWhere($data_insert)[0]->ID_Jadwal,
				'status_jadwal' => '0'
			];
			$res1 = $this->jdm->insert($data_jdm);
			// end insert jdm

			$this->session->set_flashdata('sukses', 'Tambah Data Sukses');

			if ($res >= 1 && $res1 >= 1) {
				$Log = [
					'ID_User' => $ID_User,
					'Tanggal' => date('Y-m-d H:i:s'),
					'Aktifitas' => "Program Jadwal Dosen " . $ID_Dosen . " Mata Kuliah " . $ID_Mk,
				];

				if ($this->Log_model->insertLog($Log)) {

					$this->p_dosen($ID_Dosen);
				} else {
					echo "gagal insert data log";
				}

			} else {
				$this->session->set_flashdata('pesan', 'Insert Data Gagal');
				redirect('Dosen/p_dosen/' . $ID_Dosen);
			}
		}
	}

	public function deletepenjadwalan($ID_Jadwal,$ID_Dosen,$ID_User,$ID_Mk){
		$where  = array('ID_Jadwal' => $ID_Jadwal);
		$res    = $this->ModelJadwal->DeleteData('jadwal',$where);
		if ($res>=1) {
			$Log = [
				'ID_User'   => $ID_User,
				'Tanggal'   => date('Y-m-d H:i:s'),
				'Aktifitas' => "Hapus data Penjadwalan Dosen ".$ID_User." mata kuliah ".$ID_Mk,
			];
			if($this->Log_model->insertLog($Log)){
				$this->session->set_flashdata('pesan','Delete Data Sukses');
				redirect('Dosen/p_dosen/'.$ID_Dosen);
			}else{
				echo "gagal insert data log";
			}
		} else {
			$this->session->set_flashdata('pesan', 'Insert Data Gagal');
			redirect('Dosen/p_dosen/' . $ID_Dosen);
		}
	}

	public function insertreport()
	{
		$user 		= $this->session->userdata('uname');
		$id 		= $this->input->post('id');
		$ID_User 	= $this->input->post('ID_User');
		$user 		= $this->m_login->ambil_user($this->session->userdata('uname'));
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