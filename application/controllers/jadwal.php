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
       
    }

    public function index(){    
       $data = $this->ModelJadwal->GetMatakuliah();
        $matkul = [
            'data' => $data,
        ];
        $this->template->load('templateSuperAdmin','Matkul/halmatkul', $matkul);
    }

    public function viewmatkuladmin(){    
       $data = $this->ModelJadwal->GetMatakuliah();
        $matkul = [
            'data' => $data,
        ];
        $this->template->load('template','Matkul/viewmatkuladmin', $matkul);
    }



    public function insert(){
        $this->template->load('templateSuperAdmin','Matkul/insertmatkul');
    }


    public function update($ID_Mk){
        $res = $this->ModelJadwal->GetMatakuliah("where ID_Mk = '$ID_Mk'");
        $data = array(
            "ID_Mk"=>$res[0]['ID_Mk'],
            "Nama_mk"=>$res[0]['Nama_mk'],
            "Jumlah_sks"=>$res[0]['Jumlah_sks']
        );
        $this->template->load('templateSuperAdmin','Matkul/UpdateMatkul',$data);
    }


    public function do_insert(){
        $ID_Mk = $_POST['ID_Mk'];
        $Nama_mk = $_POST['Nama_mk'];
        $Jumlah_sks = $_POST['Jumlah_sks'];
        $data_insert = array(
            'ID_Mk' => $ID_Mk,
            'Nama_mk' => $Nama_mk,
            'Jumlah_sks' => $Jumlah_sks
        );
        $res = $this->ModelJadwal->InsertData('matakuliah',$data_insert);
        if ($res>=1) {
            $Log = [
                'ID_User'   => "User",
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
        $ID_Mk = $_POST['ID_Mk'];
        $Nama_mk = $_POST['Nama_mk'];
        $Jumlah_sks = $_POST['Jumlah_sks'];
        $data_update = array(
            'ID_Mk' => $ID_Mk,
            'Nama_mk' => $Nama_mk,
            'Jumlah_sks' => $Jumlah_sks
        );
        $where = array('ID_Mk'=>$ID_Mk);
        $res = $this->ModelJadwal->UpdateData('matakuliah', $data_update,$where);
        if ($res>=1) {
            $Log = [
                'ID_User'   => "User",
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


    public function delete($ID_Mk){
        $where = array('ID_Mk' => $ID_Mk);
        $res = $this->ModelJadwal->DeleteData('matakuliah',$where);
        if ($res>=1) {
            $Log = [
                'ID_User'   => "User",
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
        $mk = $this->ModelJadwal->GetMatakuliah();
        $data = $this->ModelJadwal->GetJadwal();
        $dosen = $this->Dosen_model->GetDosen();
        $jadwal = [
            'dosen' => $dosen,
            'data' => $data,
            'mk' => $mk,
        ];
        $this->template->load('template','penjadwalan/tampilPenjadwalan', $jadwal);
    }

    public function pro_jadwal($ID_Mk){
        $where = array('ID_Mk' => $ID_Mk);
        //$ID_Mk = $_POST['ID_Mk'];
        //$ID_Dosen = $_POST['ID_Dosen'];
        //$Kelas_MK = $_POST['Kelas_MK'];
        //$Jam_Kelas = $_POST['Jam_Kelas'];
        $data_insert = array(
            'ID_Mk' => $ID_Mk,
            //'ID_Dosen' => $ID_Dosen,
            //'Kelas_MK' => $Kelas_MK,
            //'Jam_Kelas' => $Jam_Kelas
        );
        $res = $this->ModelJadwal->InsertData('jadwal',$data_insert);
        if ($res>=1) {
            $this->session->set_flashdata('pesan','Tambah Data Sukses');
            redirect('jadwal/penjadwalan');
        } else {
            echo "<h2>Insert Data Gagal</h2>";
        }
    }

    public function deletepenjadwalan($ID_Jadwal){
        $where = array('ID_Jadwal' => $ID_Jadwal);
        $res = $this->ModelJadwal->DeleteData('jadwal',$where);
        if ($res>=1) {
            $Log = [
                'ID_User'   => "User",
                'Tanggal'   => date('Y-m-d H:i:s'),
                'Aktifitas' => "Hapus data Penjadwalan ".$ID_Mk,
            ];
            if($this->Log_model->insertLog($Log)){
                $this->session->set_flashdata('pesan','Delete Data Sukses');
                redirect('jadwal/penjadwalan');
            }else{
                echo "gagal insert data log";
            }
        } else {
            echo "<h2>Delete Data Gagal</h2>";
        }
    }

}

