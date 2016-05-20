<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal_dosen_model extends CI_Model {

	var $table = 'jadwal_dosen';

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getJadwalByDosen($id_dosen)
	{
		$this->db->where('id_dosen', $id_dosen);
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
	public function getJadwalDosen($id_jadwal)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->join('jadwal', 'jadwal.ID_Jadwal = jadwal_dosen.id_jadwal');
		$this->db->join('matakuliah', 'matakuliah.ID_Mk = jadwal.ID_Mk');
		return $this->db->get()->result();
	}
}

/* End of file jadwal_dosen_model.php */
/* Location: ./application/models/jadwal_dosen_model.php */