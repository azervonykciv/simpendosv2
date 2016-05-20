<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model
{
    var $table = "log";
	public function GetLog(){
        $this->db->order_by("Tanggal", "desc");
        $query = $this->db->get('log');
        return $query->result();
    }

    public function insertLog($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function UpdateData($tabelName,$data,$where){
        $res = $this->db->update($tabelName,$data,$where);
        return $res;
    }

    public function DeleteData($tabelName,$where){
        $res = $this->db->delete($tabelName,$where) ;
        return $res;        
    }
}