<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    var $table = 'user';
	public function GetUser(){
        $query = $this->db->get('user');
        return $query->result();
    }

    public function insertUser($data)
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