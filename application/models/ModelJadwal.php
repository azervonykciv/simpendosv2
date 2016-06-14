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
	
	function get_matkul(){

		$query = $this->db->get('matakuliah');
		return $query->result();
	}

	public function checkData($data,$table,$column)
	{
		$this->db->from($table);
		$this->db->where($column,$data);
		$res = $this->db->get()->num_rows();
		return $res;
	}

	public function chck4param($data1,$data2,$data3,$data4)
	{
		$this->db->from('jadwal');
		$this->db->where('Kelas_MK',$data1);
		$this->db->where('hari',$data2);
		$this->db->where('Jam_Kelas',$data3);
		$this->db->where('ruang',$data4);
		$res = $this->db->get()->result();
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

	public function getJadwalById($id)
	{
		$this->db->where('ID_Jadwal', $id);
		$result = $this->db->get('jadwal');
		if ($result) {
			return $result->result_array();
		} else {
			return FALSE;
		}
	}

	public function getJadwalByDosen($nidn)
	{
		$this->db->where('ID_Dosen', $nidn);
		$result = $this->db->get('jadwal');
		if ($result) {
			return $result->result_array();
		} else {
			return FALSE;
		}
	}
	public function getMatkulById($id_mk)
	{
		$this->db->where('ID_Mk', $id_mk);
		$result = $this->db->get('matakuliah');
		if ($result) {
			return $result->result_array();
		} else {
			return FALSE;
		}
	}
	public function updateJadwal($data, $id)
	{
		$this->db->where('ID_Jadwal', $id);
        return $this->db->update('jadwal', $data);
	}
}