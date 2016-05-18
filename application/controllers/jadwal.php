<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('ModelJadwal');
    }

    public function index(){
        
        $data = $this->ModelJadwal->GetMatakuliah();
        //$this->ModelJadwal->GetMatakuliah();
        $this->load->view('Matkul/TabelMatkul',array('data' => $data));
        /*$this->template->load('template','Matkul/halmatkul',array('data' => $data));*/
    }

     public function viewmatkul()
    {
        $data = $this->ModelJadwal->GetMatakuliah();
        $matkul = [
            'data' => $data,
        ];
        $this->template->load('template','Matkul/halmatkul', $matkul);
    }


    public function insert(){
        $this->template->load('template','Matkul/insertmatkul');
    }


    public function update($ID_mk){
        $res = $this->ModelJadwal->GetMatakuliah("where ID_mk = '$ID_mk'");
        $data = array(
            "ID_mk"=>$res[0]['ID_mk'],
            "Nama_mk"=>$res[0]['Nama_mk'],
            "Jumlah_sks"=>$res[0]['Jumlah_sks']
        );
        $this->template->load('template','Matkul/UpdateMatkul',$data);
    }


    public function do_insert(){
        $ID_mk = $_POST['ID_mk'];
        $Nama_mk = $_POST['Nama_mk'];
        $Jumlah_sks = $_POST['Jumlah_sks'];
        $data_insert = array(
            'ID_mk' => $ID_mk,
            'Nama_mk' => $Nama_mk,
            'Jumlah_sks' => $Jumlah_sks
        );
        $res = $this->ModelJadwal->InsertData('matakuliah',$data_insert);
        if ($res>=1) {
            $this->session->set_flashdata('pesan','Tambah Data Sukses');
            redirect('jadwal/viewmatkul');
        } else {
            echo "<h2>Insert Data Gagal</h2>";
        }

    }


    public function do_update(){
        $ID_mk = $_POST['ID_mk'];
        $Nama_mk = $_POST['Nama_mk'];
        $Jumlah_sks = $_POST['Jumlah_sks'];
        $data_update = array(
            'ID_mk' => $ID_mk,
            'Nama_mk' => $Nama_mk,
            'Jumlah_sks' => $Jumlah_sks
        );
        $where = array('ID_mk'=>$ID_mk);
        $res = $this->ModelJadwal->UpdateData('matakuliah', $data_update,$where);
        if ($res>=1) {
            $this->session->set_flashdata('pesan','Update Data Sukses');
            redirect('jadwal/viewmatkul');
        } else {
            echo "<h2>update Data Gagal</h2>";
        }

    }


    public function delete($ID_mk){
        $where = array('ID_mk' => $ID_mk);
        $res = $this->ModelJadwal->DeleteData('matakuliah',$where);
        if ($res>=1) {
            $this->session->set_flashdata('pesan','Delete Data Sukses');
            redirect('jadwal/viewmatkul');
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