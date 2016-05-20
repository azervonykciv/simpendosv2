<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('ModelJadwal');
    }

    public function index(){
        
       $data = $this->ModelJadwal->GetMatakuliah();
        $matkul = [
            'data' => $data,
        ];
        $this->template->load('template','Matkul/halmatkul', $matkul);
    }


    public function insert(){
        $this->template->load('template','Matkul/insertmatkul');
    }


    public function update($ID_Mk){
        $res = $this->ModelJadwal->GetMatakuliah("where ID_Mk = '$ID_Mk'");
        $data = array(
            "ID_Mk"=>$res[0]['ID_Mk'],
            "Nama_mk"=>$res[0]['Nama_mk'],
            "Jumlah_sks"=>$res[0]['Jumlah_sks']
        );
        $this->template->load('template','Matkul/UpdateMatkul',$data);
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

    public function panggil(){
        $data = $this->db->query('select * from matakuliah')->result();

    }
}

    /*
    public function do_insert(){
        $id_admin = $_POST['id_admin'];
        $password = $_POST['password'];
        $nama_admin = $_POST['nama_admin'];
        $data_insert = array(
            'id_admin' => $id_admin,
            'password' => $password,
            'nama_admin' => $nama_admin
            );
        $res = $this->mymodel->InsertData('admin', $data_insert);
        if ($res>=1) {
            redirect('crud/index');
        } else {
            echo "<h2>Insert Data Gagal</h2>";
        }

    }






    public function update(){
        echo "ini function update";
    }

    public function delete(){
        echo "ini function delete";
    }

    public function panggil(){
        $data = $this->db->query('select * from admin')->result();

    }*/