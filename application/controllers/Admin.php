<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->model('Jadwal_dosen_model', 'jdm');
        $this->load->model('Jadwal_report_model', 'jrm');
	}
	public function index()
	{
		
	}
	public function listReport()
	{
		$report = $this->jrm->getWhere('status_report', 0);
		$data = [
			'report' => $report,
		];
		$this->template->load('template','admin/list-dosen-report_view', $data);
	}
	public function updateReport($id)
	{
		echo "nunggu ada insert jadwal";
	}
	public function tolakReport($id)
	{
		// 3 = Laporan di tolak
		$this->jdm->updateStatus($id, 3);
		// 1 = Laporan sudah di proses
		$this->jrm->updateStatus($id, 1);
		redirect('admin/listreport');
	}
}