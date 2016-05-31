<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    var $table = 'user';
	public function GetUser(){
        $query = $this->db->get('user');
        return $query->result();
    }


    public function getuser_bystatus($status)
    {
        $this->db->where('Status', $status);
        return $this->db->get($this->table)->result();
    }

    public function insertUser($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function updateUser($data, $id)
    {
        $this->db->where('ID_User', $id);
        $this->db->update($this->table, $data);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }

    public function deleteUser($id)
    {
        $this->db->where('ID_User', $id);
        $this->db->delete($this->table);
    }

    public function get_spec($id)
    {
        $param = array('ID_User' => $id);
        $query = $this->db->get_where('user',$param);
        return $query->row();
    }
}