<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_login');
		$this->load->library('session');
	}
 
	function index(){
		$this->load->view('auth/v_login');
	}
	
	function aksi(){		

		$Nama_User=$this->input->post('Nama_User');
		$Password=$this->input->post('Password');

		
		$cek=$this->m_login->m_aksi($where=" WHERE Nama_User ='$Nama_User' AND Password = '$Password'");
		if($cek > 0){
			$x=$this->session->set_userdata($data);			
			redirect('login/sukses');
		}else{
			echo "login gagal";
		}
	}

	function sukses(){
		$data = array(
			$Nama_User => $this->session->userdata('Nama_User')
		);
		$this->load->view('v_sukses', $data);	
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('login/');
	}
}
}