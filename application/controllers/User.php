<?php
class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		if (! ($this->session->has_userdata('Status')) ) {
			redirect('login');
		}
    }
	public function index()
	{
		$user1 = $this->User_model->GetUser();
		$user  = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = array(
			'user'  => $user,
			'user1' => $user1,
		);
		$this->template->load('templateSuperAdmin','User/dataUSer', $data);
	}

	public function insertUser()
	{
		$data['user'] = $this->m_login->ambil_user($this->session->userdata('uname'));
		$this->template->load('templateSuperAdmin','User/insertUser', $data);
	}

	public function do_insertUser()
	{
		$ID_User = $this->input->post('ID');
		$user = [
			'ID_User'    => $this->input->post('ID_User'),
			'Nama_User'  => $this->input->post('Nama_User'),
			'Password'   => $this->input->post('Password'),
			'Status'     => $this->input->post('Status'),
		];
		if ($this->User_model->insertUser($user)) {
			$Log = [
				'ID_User'	=> $ID_User,
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

	public function editUser($id)
	{
		$user1 = $this->User_model->getUser_byid($id);
		$user = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = [
			'user' 	=> $user,
			'user1'	=> $user1,
		];
		$this->template->load('templateSuperAdmin','User/editUser', $data);
	}
	public function updateUser()
	{
		$id = $this->input->post('ID_User');
		$User = $this->input->post('ID');
		$user = [
			'Nama_User'  => $this->input->post('Nama_User'),
			'Status' 	 => $this->input->post('Status'),
		];
		
		if ($this->User_model->updateUser($user, $id)) {
			$Log = [
				'ID_User'	=> $User,
				'Tanggal'	=> date('Y-m-d H:i:s'),
				'Aktifitas' => "Update data ".$this->input->post('Status')." ".$id,
			];
			if($this->Log_model->insertLog($Log)){
				redirect('User');
			}else{
				echo "gagal insert data log";
			}
		} else {
			echo "Gagal update data user";
		}
	}
	public function deleteUser($id,$ID_User)
	{
		$this->User_model->deleteUser($id);

		$Log = [
			'ID_User'	=> $ID_User,
			'Tanggal'	=> date('Y-m-d H:i:s'),
			'Aktifitas' => "Hapus data User".$id,
		];
		if($this->Log_model->insertLog($Log)){
			redirect('User');
		}else{
			echo "gagal insert data log";
		}
	}

	public function resetPassword($id,$Status,$ID_User){
		$user = [
			'Password'  => "123456",
		];
		
		if ($this->User_model->updateUser($user, $id)) {
			$Log = [
				'ID_User'	=> $ID_User,
				'Tanggal'	=> date('Y-m-d H:i:s'),
				'Aktifitas' => "Reset password ".$Status." ".$id,
			];
			if($this->Log_model->insertLog($Log)){
				$this->editUser($id);
			}else{
				echo "gagal insert data log";
			}
		} else {
			echo "Gagal reset password";
		}
	}

	public function resetAllPassword(){
		$data['user'] = $this->m_login->ambil_user($this->session->userdata('uname'));
		$this->template->load('templateSuperAdmin','User/resetAllPassword', $data);
	}

	public function do_resetAllPassword(){
		$Status = $this->input->post('Status');
		$user   = $this->input->post('ID_User');
		$ResetAll = "";
		$reset = [
			'Password' => "123456",
		];
		if($Status == "All"){
			$akun = $this->User_model->GetUser_byStatus($ResetAll);
			$Status = "";
		}else{
			$akun = $this->User_model->GetUser_byStatus("where Status='".$Status."'");
		}
		foreach ($akun as $a) {
			$ID_User = $a->ID_User;
			$this->User_model->updateUser($reset, $ID_User);
		}
		$Log = [
			'ID_User'	=> $user,
			'Tanggal'	=> date('Y-m-d H:i:s'),
			'Aktifitas' => "Reset semua akun ".$Status,
		];
		if($this->Log_model->insertLog($Log)){
			redirect('User');
		}else{
			echo "gagal insert data log";
		}
	}
}
