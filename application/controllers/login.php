<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_login');
		$this->load->library('session');
	}
 
	function index(){

$this->load->library('recaptcha');
                    $data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();


					
                    
		$this->load->view('auth/v_login',$data);
	}
	
	function do_login(){		

			$this->load->library('recaptcha');

			$this->recaptcha->recaptcha_check_answer();


		$Nama_User = $this->input->post('Nama_User');
		$Password  = $this->input->post('Password');

		
		$cek=$this->m_login->cek_user($Nama_User, $Password);
		if(count($cek) == 1 && $this->recaptcha->getIsValid()){
			foreach($cek as $cek) {
				$Status = $cek['Status'];
			}
			$x=$this->session->set_userdata(array(
				'isLogin'	=> TRUE,
				'uname'		=> $Nama_User,
				'Status'	=> $Status,
			));	



			redirect('dashboard', 'refresh');
		}else{
			redirect('login');
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
