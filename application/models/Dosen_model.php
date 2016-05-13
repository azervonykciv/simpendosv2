<?php
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
        $this->db->where('id', $id);
        return $this->db->get($this->table)->result();
    }
    public function get_Limit($limit, $offset)
    {
        $query = $this->db->limit($limit, $offset)->get($this->table);
        return $query->result_array();
    }
    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
    public function count()
    {
        return $this->db->count_all($this->table);
    }
}