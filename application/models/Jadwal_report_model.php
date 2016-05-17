<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal_report_model extends CI_Model {

	public $table = 'jadwal_report';

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($report)
	{
		$query = $this->db->insert($this->table, $report);
		if ($query) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	public function get_all()
	{
	    $query = $this->db->get($this->table);
	    return $query->result();
	}
	public function getWhere($key, $value)
	{
		$this->db->where($key, $value);
        return $this->db->get($this->table)->result();
	}

	public function updateStatus($id, $status)
	{
		$this->db->set('status_report', $status);
		$this->db->where('id', $id);
		return $this->db->update($this->table);
	}
}

/* End of file Jadwal_report.php */
/* Location: ./application/models/Jadwal_report.php */