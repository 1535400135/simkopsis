<?php

class PinjamanController extends GLOBAL_Controller
{

	public function __construct()
	{
		parent::__construct();
		$model = array('PinjamanModel');
		$this->load->model($model);
		if (!parent::hasLogin()) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}

	/*
     * get modul
     * */
	public function pinjamanCash()
	{
		$data['title'] = 'Pinjaman Tunai';
		$data['cash'] = parent::model('PinjamanModel')->lihat_semua()->result_array();

		parent::template('pinjaman/cash', $data);
	}

	public function pinjamannoncash()
	{
		$data['title'] = 'Pinjaman Non Tunai';
		$data['noncash'] = parent::model('PinjamanModel')->lihat_semua()->result_array();

		parent::template('pinjaman/noncash', $data);
	}

	public function prosespinjaman()
	{
		$pinjaman_anggota_id = parent::post('anggota');
		$pinjaman_total = parent::post('total-pinjam');
		$diterima = $pinjaman_total*99/100;
		$pinjaman_tenggat = parent::post('tenggat-pinjam');
		$pinjaman_keterangan = parent::post('kepentingan');
		if ($pinjaman_tenggat==6) {
			$nilai  = $pinjaman_tenggat*($pinjaman_total*0.75/100);
			$nilai_akhir = $pinjaman_total+$nilai;
			$perbulan = ceil($nilai_akhir/$pinjaman_tenggat);
		}
		elseif ($pinjaman_tenggat==12) {
			$nilai  = $pinjaman_tenggat*($pinjaman_total*0.75/100);
			$nilai_akhir = $pinjaman_total+$nilai;
			$perbulan = ceil($nilai_akhir/$pinjaman_tenggat);
		}
		elseif ($pinjaman_tenggat==18) {
			$nilai  = $pinjaman_tenggat*($pinjaman_total*0.75/100);
			$nilai_akhir = $pinjaman_total+$nilai;
			$perbulan = ceil($nilai_akhir/$pinjaman_tenggat);
		}
		elseif ($pinjaman_tenggat==24) {
			$nilai  = $pinjaman_tenggat*($pinjaman_total*0.75/100);
			$nilai_akhir = $pinjaman_total+$nilai;
			$perbulan = ceil($nilai_akhir/$pinjaman_tenggat);
		}
		elseif ($pinjaman_tenggat==30) {
			$nilai  = $pinjaman_tenggat*($pinjaman_total*0.75/100);
			$nilai_akhir = $pinjaman_total+$nilai;
			$perbulan = ceil($nilai_akhir/$pinjaman_tenggat);
		}
		elseif ($pinjaman_tenggat==36) {
			$nilai  = $pinjaman_tenggat*($pinjaman_total*0.75/100);
			$nilai_akhir = $pinjaman_total+$nilai;
			$perbulan = ceil($nilai_akhir/$pinjaman_tenggat);
		}
		elseif ($pinjaman_tenggat==42) {
			$nilai  = $pinjaman_tenggat*($pinjaman_total*0.75/100);
			$nilai_akhir = $pinjaman_total+$nilai;
			$perbulan = ceil($nilai_akhir/$pinjaman_tenggat);
		}
		elseif ($pinjaman_tenggat==48) {
			$nilai  = $pinjaman_tenggat*($pinjaman_total*0.75/100);
			$nilai_akhir = $pinjaman_total+$nilai;
			$perbulan = ceil($nilai_akhir/$pinjaman_tenggat);
		}
		elseif ($pinjaman_tenggat==54) {
			$nilai  = $pinjaman_tenggat*($pinjaman_total*0.75/100);
			$nilai_akhir = $pinjaman_total+$nilai;
			$perbulan = ceil($nilai_akhir/$pinjaman_tenggat);
		}
		elseif ($pinjaman_tenggat==60) {
			$nilai  = $pinjaman_tenggat*($pinjaman_total*0.75/100);
			$nilai_akhir = $pinjaman_total+$nilai;
			$perbulan = ceil($nilai_akhir/$pinjaman_tenggat);
		}

		$data = array (
			'anggota_id' => $pinjaman_anggota_id,
			'ril' => $pinjaman_total,
			'total' => $pinjaman_total,
			'diterima' => $diterima,
			'total_bayar' => $nilai_akhir,
			'bulan' => $perbulan,
			'tenggat' => $pinjaman_tenggat,
			'kepentingan' => $pinjaman_keterangan
		);
		$data['title'] = 'Pinjaman Cash';
		parent::template('user/prosesPinjaman', $data);
	}

	/*
     * insert modul
     * */
	public function tambahCash()
	{
		if (isset($_POST['tambah'])) {
			$data = array(
				'pinjaman_anggota_id' => parent::post('anggota'),
				'pinjaman_jenis' => 'cash',
				'pinjaman_ril' => preg_replace("/[^0-9]/", "", parent::post('dipinjam')),
				'pinjaman_total' => preg_replace("/[^0-9]/", "", parent::post('total')),
				'pinjaman_diterima' => preg_replace("/[^0-9]/", "", parent::post('diterima')),
				'pinjaman_pembayaran' => preg_replace("/[^0-9]/", "", parent::post('total')),
				'pinjaman_angsuran' => preg_replace("/[^0-9]/", "", parent::post('perbulan')),
				'pinjaman_tenggat' => preg_replace("/[^0-9]/", "", parent::post('tenggat')),
				'pinjaman_keterangan' => parent::post('kepentingan'),
				'anggota_id' => parent::post('anggota')
			);
			
			$simpan = parent::model('PinjamanModel')->tambah($data);
			
			if ($simpan > 0) {
				parent::alert('alert', 'sukses_tambah');
				redirect('');
			} else {
				parent::alert('alert', 'gagal_tambah');
				redirect('pinjaman-cash');
			}
		} else {
			$data['title'] = 'Tambah data pinjaman Cash';

			parent::template('pinjaman/tambahCash', $data);
		}
	}
	public function tambahnonCash()
	{
		if (isset($_POST['tambah'])) {
			$data = array(
				'pinjaman_anggota_id' => parent::post('anggota'),
				'pinjaman_jenis' => 'noncash',
				'pinjaman_total' => parent::post('total-pinjam'),
				'pinjaman_tenggat' => parent::post('tenggat-pinjam'),
				'pinjaman_keterangan' => 'PINJAMAN CASH / TUNAI : Pinjaman ini diberikan dalam bentuk non tunai secara langsung.'
			);

			$simpan = parent::model('PinjamanModel')->tambah($data);

			if ($simpan > 0) {
				parent::alert('alert', 'sukses_tambah');
				redirect('pinjaman-noncash');
			} else {
				parent::alert('alert', 'gagal_tambah');
				redirect('pinjaman-noncash');
			}
		} else {
			$data['title'] = 'Tambah data pinjaman Cash';

			parent::template('pinjaman/tambahnonCash', $data);
		}
	}

	public function proses($id)
	{
		$data = array(
			'pinjaman_status' => 'proses',
		);

		$update = parent::model('PinjamanModel')->ubah($id, $data);

		if ($update > 0) {
			parent::alert('alert', 'sukses_setuju');
			redirect(base_url());
		} else {
			parent::alert('alert', 'gagal_setuju');
			redirect(base_url());
		}
	}

	public function cetakproses($id)
	{
		$this->load->library('pdfgenerator');
		$data = $this->PinjamanModel->cetakproses($id);
		$file_pdf = 'Cetak Proses Peminjaman';
		$paper = 'A4';
		$orientation = "portrait";
		$html = $this->load->view('pinjaman/cetakproses',$data, true);
		$this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}

	public function cetakselesai($id)
	{
		$this->load->library('pdfgenerator');
		$data = $this->PinjamanModel->cetakproses($id);
		$file_pdf = 'Cetak Proses Peminjaman';
		$paper = 'A4';
		$orientation = "portrait";
		$html = $this->load->view('pinjaman/cetakselesai',$data, true);
		$this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}

	public function setuju($id)
	{
		$data = array(
			'pinjaman_status' => 'setuju',
		);

		$update = parent::model('PinjamanModel')->ubah($id, $data);

		if ($update > 0) {
			parent::alert('alert', 'sukses_setuju');
			redirect(base_url());
		} else {
			parent::alert('alert', 'gagal_setuju');
			redirect(base_url());
		}
	}

	public function tolak($id)
	{
		$data = array(
			'pinjaman_status' => 'tolak',
		);

		$update = parent::model('PinjamanModel')->ubah($id, $data);

		if ($update > 0) {
			parent::alert('alert', 'sukses_tolak');
			redirect(base_url());
		} else {
			parent::alert('alert', 'gagal_tolak');
			redirect(base_url());
		}
	}
}
