<?php
class notif_model extends CI_Model
{
    var $table = 'notifikasi';

    public function get_all()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function post_notif($data)
    {
        $this->db->insert('notifikasi',$data);
    }

    public function get_namebyid($id)
    {
        $param = array('ID_User' => $id);
        $query = $this->db->get_where('user',$param);
        return $query->row();
    }

    public function get_byid($id)
    {

        $param = array('ID_User'=>$id);
        $query = $this->db->get_where('notifikasi',$param);
        return $query;
    }

    public function delete($id_notif)
    {
            $this->db->where('id_Notif',$id_notif);
            $this->db->delete('notifikasi');
    }


}