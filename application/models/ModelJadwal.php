<?php
class ModelJadwal extends CI_Model{
	public function GetMatakuliah($where=""){
		$data = $this->db->query('select * from matakuliah '.$where);
		return $data->result_array();
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
}