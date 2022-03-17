<?php

class LaporanController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
		$model = array('AnggotaModel','AdminModel');
		$this->load->model($model);
		if (!parent::hasLogin()) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
    }

    public function anggota()
    {
        $this->load->library('pdfgenerator');
		$data['data'] = $this->AnggotaModel->cetakanggota();
		$file_pdf = 'Cetak Anggota';
		$paper = 'A4';
		$orientation = "potrait";
		$html = $this->load->view('laporan/anggota',$data, true);
		$this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

    public function neraca()
    {
        $this->load->library('pdfgenerator');
		$data['pinjaman'] = $this->AdminModel->getPeminjaman();
        $data['angsuran'] = $this->AdminModel->getAngsuran();
        $data['sisa'] = $this->AdminModel->getSisaAngsuran();
        $data['total'] = $this->AdminModel->getTotal();
        $data['modal'] = $this->AdminModel->getModal();
        $data['ril'] = $this->AdminModel->getPinjamanRil();
        $data['saldo'] = $this->AdminModel->getSaldo();
        $data['terima'] = $this->AdminModel->getTerima();
        $data['investasi'] = $this->AdminModel->getInvestasi();
        $data['tabungan'] = $this->AdminModel->getTabungan();
        $data['simpanan'] = $this->AdminModel->getSimpanan();
		$file_pdf = 'Cetak Neraca';
		$paper = 'A4';
		$orientation = "potrait";
		$html = $this->load->view('laporan/neraca',$data, true);
		$this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

    public function simpananAnggota()
    {
        $data['title'] = 'Rekap Laporan Anggota Koperasi ';
        $data['anggota'] = parent::model('AnggotaModel')->lihat_semua();

        parent::template('laporan/simpanan',$data);
    }

    public function pinjamanAnggota()
    {
        $this->load->library('pdfgenerator');
		$data['peminjam'] = $this->AdminModel->getPeminjaman();
        $data['angsuran'] = $this->AdminModel->getAngsuran();
        $data['sisa'] = $this->AdminModel->getSisaAngsuran();
        $data['total'] = $this->AdminModel->getTotal();
        $data['modal'] = $this->AdminModel->getModal();
        $data['investasi'] = $this->AdminModel->getInvestasi();
        $data['tabungan'] = $this->AdminModel->getTabungan();
        $data['simpanan'] = $this->AdminModel->getSimpanan();
		$file_pdf = 'Cetak Anggota';
		$paper = 'A4';
		$orientation = "landscape";
		$html = $this->load->view('laporan/pinjaman',$data, true);
		$this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

    public function tagihanKoperasi()
    {
        $data['title'] = 'Rekap Laporan Anggota Koperasi ';
        $data['tagihan'] = parent::model('AnggotaModel')->lihat_semua();

        parent::template('laporan/tagihan',$data);
    }


}
