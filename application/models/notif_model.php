<?php
class notif_model extends CI_Model
{
    var $table = 'notifikasi';

    public function get_all()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function get_byid($id)
    {
        $this->db->where('')
    }

    public function
}