<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller{
    function __construct(){
        parent::__construct();
        if (! ($this->session->has_userdata('Status')) ) {
            redirect('login');
        }
        $this->load->model('ModelJadwal');
        $this->load->model('Dosen_model');
        $this->load->model('notif_model','nm');
        $this->load->model('Jadwal_dosen_model','jdm');
       
    }

    public function index(){    
        $data = $this->ModelJadwal->GetMatakuliah();
        $user = $this->m_login->ambil_user($this->session->userdata('uname'));
        $matkul = [
            'data' => $data,
            'user' => $user,
        ];
        $this->template->load('templateSuperAdmin','Matkul/halmatkul', $matkul);
    }

    public function viewmatkuladmin(){    
        $data = $this->ModelJadwal->GetMatakuliah();
        $user = $this->m_login->ambil_user($this->session->userdata('uname'));
        $matkul = [
            'data' => $data,
            'user' => $user,
        ];
        $this->template->load('template','Matkul/viewmatkuladmin', $matkul);
    }



    public function insert(){
        $user = $this->m_login->ambil_user($this->session->userdata('uname'));
        $data = [
            'user' => $user,
        ];
        $this->template->load('templateSuperAdmin','Matkul/insertmatkul',$data);
    }


    public function update($ID_Mk){
        $res  = $this->ModelJadwal->GetMatakuliah("where ID_Mk = '$ID_Mk'");
        $user = $this->m_login->ambil_user($this->session->userdata('uname'));
        $data = array(
            "ID_Mk"     =>$res[0]['ID_Mk'],
            "Nama_mk"   =>$res[0]['Nama_mk'],
            "Jumlah_sks"=>$res[0]['Jumlah_sks'],
            'user'      => $user,
        );
        $this->template->load('templateSuperAdmin','Matkul/UpdateMatkul',$data);
    }


    public function do_insert(){
        $ID_Mk      = $_POST['ID_Mk'];
        $Nama_mk    = $_POST['Nama_mk'];
        $Jumlah_sks = $_POST['Jumlah_sks'];
        $ID_User    = $this->input->post('ID_User');
        $data_insert = array(
            'ID_Mk'         => $ID_Mk,
            'Nama_mk'       => $Nama_mk,
            'Jumlah_sks'    => $Jumlah_sks
        );
        $res = $this->ModelJadwal->InsertData('matakuliah',$data_insert);
        if ($res>=1) {
            $Log = [
                'ID_User'   => $ID_User,
                'Tanggal'   => date('Y-m-d H:i:s'),
                'Aktifitas' => "Insert data Mata Kuliah ".$ID_Mk,
            ];

            if($this->Log_model->insertLog($Log)){
                $this->session->set_flashdata('pesan','Tambah Data Sukses');
                redirect('jadwal');
            }else{
                echo "gagal insert data log";
            }
        } else {
            echo "<h2>Insert Data Gagal</h2>";
        }

    }


    public function do_update(){
        $ID_Mk      = $_POST['ID_Mk'];
        $Nama_mk    = $_POST['Nama_mk'];
        $Jumlah_sks = $_POST['Jumlah_sks'];
        $ID_User    = $this->input->post('ID_User');
        $data_update = array(
            'ID_Mk'         => $ID_Mk,
            'Nama_mk'       => $Nama_mk,
            'Jumlah_sks'    => $Jumlah_sks
        );
        $where = array('ID_Mk'=>$ID_Mk);
        $res = $this->ModelJadwal->UpdateData('matakuliah', $data_update,$where);
        if ($res>=1) {
            $Log = [
                'ID_User'   => $ID_User,
                'Tanggal'   => date('Y-m-d H:i:s'),
                'Aktifitas' => "Edit data Mata Kuliah ".$ID_Mk,
            ];
            if($this->Log_model->insertLog($Log)){
                $this->session->set_flashdata('pesan','Update Data Sukses');
                redirect('jadwal');
            }else{
                echo "gagal insert data log";
            }
        } else {
            echo "<h2>update Data Gagal</h2>";
        }

    }


    public function delete($ID_Mk,$ID_User){
        $where = array('ID_Mk' => $ID_Mk);
        $res = $this->ModelJadwal->DeleteData('matakuliah',$where);
        if ($res>=1) {
            $Log = [
                'ID_User'   => $ID_User,
                'Tanggal'   => date('Y-m-d H:i:s'),
                'Aktifitas' => "Hapus data Mata Kuliah ".$ID_Mk,
            ];
            if($this->Log_model->insertLog($Log)){
                $this->session->set_flashdata('pesan','Delete Data Sukses');
                redirect('jadwal');
            }else{
                echo "gagal insert data log";
            }
        } else {
            echo "<h2>Delete Data Gagal</h2>";
        }
    }


    /*====PENJADWALAN======*/

public function penjadwalan(){
        $mk     = $this->ModelJadwal->GetMatakuliah();
        $data   = $this->ModelJadwal->GetJadwal();
        $dosen  = $this->Dosen_model->GetDosen();
        $user   = $this->m_login->ambil_user($this->session->userdata('uname'));
        $jadwal = [
            'dosen' => $dosen,
            'data'  => $data,
            'mk'    => $mk,
            'user'  => $user,
        ];
        $this->template->load('template','penjadwalan/tampilPenjadwalan', $jadwal);
    }

    public function deletepenjadwalan($ID_Jadwal,$ID_User,$ID_Dosen,$ID_Mk){
        $where  = array('ID_Jadwal' => $ID_Jadwal);
        $res    = $this->ModelJadwal->DeleteData('jadwal',$where);
        if ($res>=1) {
            $Log = [
                'ID_User'   => $ID_User,
                'Tanggal'   => date('Y-m-d H:i:s'),
                'Aktifitas' => "Hapus data Penjadwalan Dosen ".$ID_Dosen." mata kuliah ".$ID_Mk,
            ];
            if($this->Log_model->insertLog($Log)){
                $this->session->set_flashdata('pesan','Delete Data Sukses');
                redirect('Admin/program/'.$ID_Dosen);
            }else{
                echo "gagal insert data log";
            }
        } else {
            echo "<h2>Delete Data Gagal</h2>";
        }
    }

    public function editpenjadwalan($ID_Jadwal,$ID_User,$ID_Dosen,$ID_Mk)
    {
        $user   = $this->m_login->ambil_user($this->session->userdata('uname'));
        $jadwal = $this->ModelJadwal->getJadwalById($ID_Jadwal);
        $mk = $this->ModelJadwal->getMatkulById($ID_Mk);

        $jadwal[0]['Jam_KelasAwal']  = substr($jadwal[0]['Jam_Kelas'], 0, 2);
        $jadwal[0]['Jam_KelasAkhir'] = substr($jadwal[0]['Jam_Kelas'], strlen($jadwal[0]['Jam_Kelas'])-2, strlen($jadwal[0]['Jam_Kelas']));
        $data_view = [
            'user'  => $user,
            'jadwal' =>$jadwal,
            'mk' => $mk,
        ];
        // echo "<pre>";
        // print_r($data_view);
        // echo "</pre>";
        // die();
        $this->template->load('template','penjadwalan/editPenjadwalan', $data_view);
    }

    public function updatepenjadwalan($ID_Jadwal,$ID_User,$ID_Dosen,$ID_Mk)
    {
        $where  = array('ID_Jadwal' => $ID_Jadwal);
        $Jam_KelasAwal  = $this->input->post('Jam_KelasAwal');
        $Jam_KelasAkhir = $this->input->post('Jam_KelasAkhir');

        $jadwal_updated = [
            'ID_Jadwal' => $ID_Jadwal,
            'ID_Mk'     => $this->input->post('ID_Mk'),
            'ID_Dosen'  => $this->input->post('ID_Dosen'),
            'Kelas_MK'  => $this->input->post('Kelas_MK'),
            'hari'      => $this->input->post('hari'),
            'Jam_Kelas' => $Jam_KelasAwal." - ".$Jam_KelasAkhir,
            'ruang'     => $this->input->post('ruang')
        ];

        // echo "<pre>";
        // print_r($jadwal_updated);
        // echo "</pre>";
        // die();

        $res = $this->jdm->updateJadwal($ID_Jadwal, $jadwal_updated);

        if ($res>=1) {
            $Log = [
                'ID_User'   => $ID_User,
                'Tanggal'   => date('Y-m-d H:i:s'),
                'Aktifitas' => "Update data Penjadwalan Dosen ".$ID_Dosen." mata kuliah ".$ID_Mk,
            ];
            if($this->Log_model->insertLog($Log)){
                $this->session->set_flashdata('sukses','Update Data Sukses');
                redirect('Admin/program/'.$ID_Dosen);
            }else{
                echo "gagal insert data log";
            }
        } else {
            echo "<h2>Delete Data Gagal</h2>";
        }
    }

}

