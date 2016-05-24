<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{

	function __construct(){
		parent::__construct();
		if (! ($this->session->has_userdata('Status')) ) {
			redirect('login');
		}
		$this->load->model('ModelJadwal');
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

	//ini
	public function program($ID_Dosen){
		$mk = $this->ModelJadwal->GetMatakuliah();
        $data = $this->ModelJadwal->GetJadwal();
        $user = $this->m_login->ambil_user($this->session->userdata('uname'));
		$dosen  = $this->dm->GetDosen("where ID_Dosen = '$ID_Dosen'");
		$jadwal = [
			'dosen' => $dosen,
			'data' => $data,
            'mk' => $mk,
            'user' => $user,
            'ID' => $ID_Dosen,
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
		
		/*$where = array( 'ID_Mk' => $ID_Mk, 
						'ID_Dosen' => $ID_Dosen,
		);*/
        
        $data_insert = array(
            'ID_Mk' => $ID_Mk,
            'ID_Dosen' => $ID_Dosen,
            'Kelas_MK' => $Kelas_MK,
            'Jam_Kelas' => $Jam_Kelas
        );
        $res = $this->ModelJadwal->InsertData('jadwal',$data_insert);
        if ($res>=1) {
        	$Log = [
				'ID_User'	=> $ID_User,
				'Tanggal'	=> date('Y-m-d H:i:s'),
				'Aktifitas' => "Program Jadwal Dosen ".$ID_Dosen." Mata Kuliah ".$ID_Mk,
			];
			if($this->Log_model->insertLog($Log)){
	            $this->session->set_flashdata('pesan','Tambah Data Sukses');
	            $this->program($ID_Dosen);
			}else{
				echo "gagal insert data log";
			}
        } else {
            echo "<h2>Insert Data Gagal</h2>";
        }
    }
}