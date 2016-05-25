<?php
class ModelJadwal extends CI_Model{

	public function GetMatakuliah($where = ""){
		$data = $this->db->query('select * from matakuliah '.$where);
		return $data->result_array();
	}

	public function GetJadwal($where = ""){
		$data = $this->db->query('select * from jadwal '.$where);
		return $data->result_array();
	}

	public function getJadwalWhere($where)
	{
		$this->db->where($where);
		$this->db->from('jadwal');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return FALSE;
		}
	}
	
	function get_all(){

		return $this->db->get('');
	}

	public function checkData($data,$table,$column)
	{
		$this->db->from($table);
		$this->db->where($column,$data);
		$res = $this->db->get()->num_rows();
		return $res;
	}


	public function InsertData($tabelName,$data){ 
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}

	public function UpdateData($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}


	public function DeleteData($tabelName,$data,$where){
		$res = $this->db->delete($tabelName,$data,$where);
		return $res;
	}

	public function getJadwalByDosen($nidn)
	{
		$this->db->where('ID_Dosen', $nidn);
		$result = $this->db->get('jadwal');
		if ($result) {
			return $result->result();
		} else {
			return FALSE;
		}
		
	}
}