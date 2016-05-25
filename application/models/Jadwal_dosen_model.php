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

	public function insert($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function updateStatus($id, $status)
	{
		$this->db->set('status_jadwal', $status);
		$this->db->where('id_jadwal_dosen', $id);
		return $this->db->update($this->table);
	}
	public function updateJadwal($id, $data)
	{
		$this->db->where('ID_Jadwal', $id);
		return $this->db->update('jadwal', $data);
	}
	public function getJadwalDosen($id_dosen)
	{
		$this->db->from($this->table);
		$this->db->join('jadwal', 'jadwal.ID_Jadwal = jadwal_dosen.id_jadwal');
		$this->db->join('matakuliah', 'matakuliah.ID_Mk = jadwal.ID_Mk');
		$this->db->where('jadwal_dosen.id_dosen', $id_dosen);
		return $this->db->get()->result();
	}
	public function getReport($id)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->join('jadwal', 'jadwal.ID_Jadwal = jadwal_dosen.id_jadwal');
		$this->db->join('jadwal_report', 'jadwal_report.id_jadwal_dosen = jadwal_dosen.id_jadwal_dosen');
		$this->db->where('jadwal_report.id_jadwal_report', $id);
		return $this->db->get()->result();
	}
}

/* End of file jadwal_dosen_model.php */
/* Location: ./application/models/jadwal_dosen_model.php */