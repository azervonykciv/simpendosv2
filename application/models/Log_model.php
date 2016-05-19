<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model
{
	public function GetLog(){
        $query = $this->db->get('log');
        return $query->result();
    }

    public function InsertData($tabelName, $data){
        $res = $this->db->insert($tabelName,$data);
        return $res;
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