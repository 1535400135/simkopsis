<?php

class AdminController extends GLOBAL_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel');
		if (!parent::hasLogin()) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['title'] = 'Dashboard Admin';
		$data['peminjaman'] = $this->AdminModel->getPeminjaman();
		$data['angsuran'] = $this->AdminModel->getAngsuran();
		$data['sisa'] = $this->AdminModel->getSisaAngsuran();
		$data['total'] = $this->AdminModel->getTotal();
		$data['modal'] =$this->AdminModel->getModal();
		$data['investasi'] =$this->AdminModel->getInvestasi();
		$data['tabungan'] =$this->AdminModel->getTabungan();
		$data['simpanan'] =$this->AdminModel->getSimpanan();
		$y = date('Y');
		if (date('m')=='01') {
			$date11 = $y.'-01-01';
			$date12 = $y.'-01-31';
			$date21 = ($y-1).'-12-01';
			$date22 = ($y-1).'-12-31';
			$date31 = ($y-1).'-11-01';
			$date32 = ($y-1).'-11-31';
			$date41 = ($y-1).'-10-01';
			$date42 = ($y-1).'-10-31';
			$date51 = ($y-1).'-09-01';
			$date52 = ($y-1).'-09-31';
			$date61 = ($y-1).'-08-01';
			$date62 = ($y-1).'-08-31';
		} elseif (date('m')=='02') {
			$date11 = $y.'-02-01';
			$date12 = $y.'-02-31';
			$date21 = ($y).'-01-01';
			$date22 = ($y).'-01-31';
			$date31 = ($y-1).'-12-01';
			$date32 = ($y-1).'-12-31';
			$date41 = ($y-1).'-11-01';
			$date42 = ($y-1).'-11-31';
			$date51 = ($y-1).'-10-01';
			$date52 = ($y-1).'-10-31';
			$date61 = ($y-1).'-09-01';
			$date62 = ($y-1).'-09-31';
		} elseif (date('m')=='03') {
			$date11 = $y.'-03-01';
			$date12 = $y.'-03-31';
			$date21 = ($y).'-02-01';
			$date22 = ($y).'-02-31';
			$date31 = ($y).'-01-01';
			$date32 = ($y).'-01-31';
			$date41 = ($y-1).'-12-01';
			$date42 = ($y-1).'-12-31';
			$date51 = ($y-1).'-11-01';
			$date52 = ($y-1).'-11-31';
			$date61 = ($y-1).'-10-01';
			$date62 = ($y-1).'-10-31';
		} elseif (date('m')=='04') {
			$date11 = $y.'-04-01';
			$date12 = $y.'-04-31';
			$date21 = ($y).'-03-01';
			$date22 = ($y).'-03-31';
			$date31 = ($y).'-02-01';
			$date32 = ($y).'-02-31';
			$date41 = ($y).'-01-01';
			$date42 = ($y).'-01-31';
			$date51 = ($y-1).'-12-01';
			$date52 = ($y-1).'-12-31';
			$date61 = ($y-1).'-11-01';
			$date62 = ($y-1).'-11-31';
		} elseif (date('m')=='05') {
			$date11 = $y.'-05-01';
			$date12 = $y.'-05-31';
			$date21 = ($y).'-04-01';
			$date22 = ($y).'-04-31';
			$date31 = ($y).'-03-01';
			$date32 = ($y).'-03-31';
			$date41 = ($y).'-01-01';
			$date42 = ($y).'-02-31';
			$date51 = ($y).'-01-01';
			$date52 = ($y).'-01-31';
			$date61 = ($y-1).'-12-01';
			$date62 = ($y-1).'-12-31';
		} elseif (date('m')=='06') {
			$date11 = $y.'-06-01';
			$date12 = $y.'-06-31';
			$date21 = ($y).'-05-01';
			$date22 = ($y).'-05-31';
			$date31 = ($y).'-04-01';
			$date32 = ($y).'-04-31';
			$date41 = ($y).'-03-01';
			$date42 = ($y).'-03-31';
			$date51 = ($y).'-02-01';
			$date52 = ($y).'-02-31';
			$date61 = ($y).'-01-01';
			$date62 = ($y).'-01-31';
		} elseif (date('m')=='07') {
			$date11 = $y.'-06-01';
			$date12 = $y.'-06-31';
			$date21 = ($y).'-06-01';
			$date22 = ($y).'-06-31';
			$date31 = ($y).'-05-01';
			$date32 = ($y).'-05-31';
			$date41 = ($y).'-04-01';
			$date42 = ($y).'-04-31';
			$date51 = ($y).'-03-01';
			$date52 = ($y).'-03-31';
			$date61 = ($y).'-02-01';
			$date62 = ($y).'-02-31';
		} elseif (date('m')=='08') {
			$date11 = $y.'-08-01';
			$date12 = $y.'-08-31';
			$date21 = ($y).'-07-01';
			$date22 = ($y).'-07-31';
			$date31 = ($y).'-06-01';
			$date32 = ($y).'-06-31';
			$date41 = ($y).'-05-01';
			$date42 = ($y).'-05-31';
			$date51 = ($y).'-04-01';
			$date52 = ($y).'-04-31';
			$date61 = ($y).'-03-01';
			$date62 = ($y).'-03-31';
		} elseif (date('m')=='09') {
			$date11 = $y.'-09-01';
			$date12 = $y.'-09-31';
			$date21 = ($y).'-08-01';
			$date22 = ($y).'-08-31';
			$date31 = ($y).'-07-01';
			$date32 = ($y).'-07-31';
			$date41 = ($y).'-06-01';
			$date42 = ($y).'-06-31';
			$date51 = ($y).'-05-01';
			$date52 = ($y).'-05-31';
			$date61 = ($y).'-04-01';
			$date62 = ($y).'-04-31';
		} elseif (date('m')=='10') {
			$date11 = $y.'-10-01';
			$date12 = $y.'-10-31';
			$date21 = ($y).'-09-01';
			$date22 = ($y).'-09-31';
			$date31 = ($y).'-08-01';
			$date32 = ($y).'-08-31';
			$date41 = ($y).'-07-01';
			$date42 = ($y).'-07-31';
			$date51 = ($y).'-06-01';
			$date52 = ($y).'-06-31';
			$date61 = ($y).'-05-01';
			$date62 = ($y).'-05-31';
		} elseif (date('m')=='11') {
			$date11 = $y.'-11-01';
			$date12 = $y.'-11-31';
			$date21 = ($y).'-10-01';
			$date22 = ($y).'-10-31';
			$date31 = ($y-1).'-09-01';
			$date32 = ($y-1).'-09-31';
			$date41 = ($y-1).'-08-01';
			$date42 = ($y-1).'-08-31';
			$date51 = ($y-1).'-07-01';
			$date52 = ($y-1).'-07-31';
			$date61 = ($y-1).'-06-01';
			$date62 = ($y-1).'-06-31';
		} elseif (date('m')=='12') {
			$date11 = $y.'-12-01';
			$date12 = $y.'-12-31';
			$date21 = ($y).'-11-01';
			$date22 = ($y).'-11-31';
			$date31 = ($y).'-10-01';
			$date32 = ($y).'-10-31';
			$date41 = ($y).'-09-01';
			$date42 = ($y).'-09-31';
			$date51 = ($y).'-08-01';
			$date52 = ($y).'-08-31';
			$date61 = ($y).'-07-01';
			$date62 = ($y).'-07-31';
		}
		//simpanan
		$data['simpananbulanan1'] =$this->AdminModel->getSimpananBulanan($date11, $date12);
		$data['simpananbulanan2'] =$this->AdminModel->getSimpananBulanan($date21, $date22);
		$data['simpananbulanan3'] =$this->AdminModel->getSimpananBulanan($date31, $date32);
		$data['simpananbulanan4'] =$this->AdminModel->getSimpananBulanan($date41, $date42);
		$data['simpananbulanan5'] =$this->AdminModel->getSimpananBulanan($date51, $date52);
		$data['simpananbulanan6'] =$this->AdminModel->getSimpananBulanan($date61, $date62);
		//pinjaman
		$data['pinjamanbulanan1'] =$this->AdminModel->getPinjamanBulanan($date11, $date12);
		$data['pinjamanbulanan2'] =$this->AdminModel->getPinjamanBulanan($date21, $date22);
		$data['pinjamanbulanan3'] =$this->AdminModel->getPinjamanBulanan($date31, $date32);
		$data['pinjamanbulanan4'] =$this->AdminModel->getPinjamanBulanan($date41, $date42);
		$data['pinjamanbulanan5'] =$this->AdminModel->getPinjamanBulanan($date51, $date52);
		$data['pinjamanbulanan6'] =$this->AdminModel->getPinjamanBulanan($date61, $date62);
		//keuntungan
		$data['keuntunganbulanan1'] =$this->AdminModel->getAngsuranBulanan($date11, $date12);
		$data['keuntunganbulanan2'] =$this->AdminModel->getAngsuranBulanan($date21, $date22);
		$data['keuntunganbulanan3'] =$this->AdminModel->getAngsuranBulanan($date31, $date32);
		$data['keuntunganbulanan4'] =$this->AdminModel->getAngsuranBulanan($date41, $date42);
		$data['keuntunganbulanan5'] =$this->AdminModel->getAngsuranBulanan($date51, $date52);
		$data['keuntunganbulanan6'] =$this->AdminModel->getAngsuranBulanan($date61, $date62);

		parent::template('admin/dashboard', $data);
	}

	public function profil($id)
	{
		$data['pengguna'] = $this->AnggotaModel->lihat_semua_profil($id);
		parent::template('admin/profil', $data);
	}

	public function bantuan()
	{
		$data['title'] = 'Bantuan';

		parent::template('admin/bantuan', $data);
	}

	public function pengaturan()
	{
		$data['title'] = 'Setting';

		parent::template('admin/pengaturan', $data);
	}
}
