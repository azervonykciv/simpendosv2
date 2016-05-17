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
}
?>