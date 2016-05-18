<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal_dosen_model extends CI_Model {

	var $table = 'jadwal_dosen';

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getJadwalByDosen($nidn)
	{
		$this->db->where('nidn', $nidn);
		$this->db->from($this->table);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return FALSE;
		}
	}
	public function updateStatus($id, $status)
	{
		$this->db->set('status_jadwal', $status);
		$this->db->where('id_jadwal', $id);
		return $this->db->update($this->table);
	}
	public function updateStatusJadwal($id, $status)
	{
		$this->db->set('status_jadwal', $status);
		$this->db->where('id_jadwal', $id);
		return $this->db->update($this->table);
	}
}

/* End of file jadwal_dosen_model.php */
/* Location: ./application/models/jadwal_dosen_model.php */