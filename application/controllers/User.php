<?php
class User extends CI_Controller {

	function __construct(){
		parent::__construct();
    }
	public function index()
	{
		$user = $this->User_model->GetUser();
		$data = array('user' => $user,);
		$this->template->load('template','User/dataUSer', $data);
	}

	public function insertUser()
	{
		$this->template->load('template','User/insertUser');
	}

	public function do_insertUser()
	{
		$user = [
			'ID_User'    => $this->input->post('ID_User'),
			'Nama_User'  => $this->input->post('Nama_User'),
			'Password'   => md5($this->input->post('Password')),
			'Status'     => $this->input->post('Status'),
		];
		if ($this->User_model->insertUser($user)) {
			$Log = [
				'ID_User'	=> "User",
				'Tanggal'	=> date('Y-m-d H:i:s'),
				'Aktifitas' => "Insert data ".$this->input->post('Status')." ".$this->input->post('ID_User'),
			];
			if($this->Log_model->insertLog($Log)){
				redirect('User');
			}else{
				echo "gagal insert data log";
			}
		} else {
			echo "Gagal insert data user";
		}
	}
}
