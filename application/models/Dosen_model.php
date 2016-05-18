<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model
{
	var $table = 'dosen';
    
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function get_all()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function get_byid($id)
    {
        $this->db->where('nidn', $id);
        return $this->db->get($this->table)->result();
    }
    public function get_Limit($limit, $offset)
    {
        $query = $this->db->limit($limit, $offset)->get($this->table);
        return $query->result_array();
    }
    public function update($data, $id)
    {
        $this->db->where('nidn', $id);
        $this->db->update($this->table, $data);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }
    public function delete($id)
    {
        $this->db->where('nidn', $id);
        $this->db->delete($this->table);
    }
    public function count()
    {
        return $this->db->count_all($this->table);
    }
}