<?php
class M_login extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function m_aksi($where=''){		
		//$d = $this->db->get_where('user',$data);
		//select * from user where username='$Nama_User' and password='$Password'	
		$query="select * from user ".$where;
		return $this->db->query($query)->num_rows();
	
	}

	function cek_user($Nama_User="", $password=""){
		$query = $this->db->get_where("user", array('ID_User' => $Nama_User , 'Password' => $password));
		$query = $query->result_array();
		return $query;
	}

	function ambil_user($username){
		$query = $this->db->get_where("user",array('ID_User' => $username));
		$query = $query->result_array();

		if($query){
			return $query[0];
		}
	}
}
?>