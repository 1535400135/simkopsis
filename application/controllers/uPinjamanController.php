<?php

class uPinjamanController extends GLOBAL_Controller
{

	public function __construct()
	{
		parent::__construct();
		$model = array('uPinjamanModel');
		$this->load->model($model);
		if (!parent::hasLogin()) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}

	/*
     * get modul
     * */
	public function pinjamancash()
	{
		$data['title'] = 'Pinjaman Tunai';
		$data['cash'] = parent::model('uPinjamanModel')->lihat_semua()->result_array();

		parent::template('pinjaman/cash', $data);
	}

	public function status($id)
	{
		$data['title'] = 'Data anggota';
		$query = array(
			'anggota_id' => $id
		);
		$data['anggota'] = parent::model('uPinjamanModel')->lihat_anggota($query);
		$querySimpanan = array(
			'simpanan_anggota_id' => $id
		);
		$data['simpanan'] = parent::model('uPinjamanModel')->lihat_simpanan($querySimpanan)->result_array();
		$queryPinjaman = array(
			'pinjaman_anggota_id' => $id
		);
		$data['pinjaman'] = parent::model('uPinjamanModel')->lihat_pinjaman($queryPinjaman)->result_array();
		$queryAngsuran = array (
			'anggota_id' => $id
		);
		$data['angsuran'] = parent::model('uPinjamanModel')->lihat_angsuran($queryAngsuran)->result_array();

		parent::template('user/status', $data);
	}

	public function pinjamannoncash()
	{
		$data['title'] = 'Pinjaman Non Tunai';
		$data['noncash'] = parent::model('PinjamanModel')->lihat_semua()->result_array();

		parent::template('pinjaman/noncash', $data);
	}

	/*
     * insert modul
     * */
	public function upinjamanCash()
	{
		if (isset($_POST['tambah'])) {
			$data = array(
				'pinjaman_anggota_id' => parent::post('anggota'),
				'pinjaman_jenis' => 'cash',
				'pinjaman_total' => parent::post('total-pinjam'),
				'pinjaman_tenggat' => parent::post('tenggat-pinjam'),
				'pinjaman_keterangan' => 'PINJAMAN CASH / TUNAI : Pinjaman ini diberikan dalam bentuk uang tunai baik dengan transfer maupun secara langsung.'
			);

			$simpan = parent::model('uPinjamanModel')->tambah($data);

			if ($simpan > 0) {
				parent::alert('alert', 'sukses_tambah');
				redirect('upinjaman-cash');
			} else {
				parent::alert('alert', 'gagal_tambah');
				redirect('upinjaman-cash');
			}
		} else {
			$data['title'] = 'Tambah data pinjaman Cash';

			parent::template('user/tambahCash', $data);
		}
	}
	public function upinjamannoncash()
	{
		if (isset($_POST['tambah'])) {
			$data = array(
				'pinjaman_anggota_id' => parent::post('anggota'),
				'pinjaman_jenis' => 'noncash',
				'pinjaman_total' => parent::post('total-pinjam'),
				'pinjaman_tenggat' => parent::post('tenggat-pinjam'),
				'pinjaman_keterangan' => 'PINJAMAN CASH / TUNAI : Pinjaman ini diberikan dalam bentuk non tunai secara langsung.'
			);

			$simpan = parent::model('uPinjamanModel')->tambah($data);

			if ($simpan > 0) {
				parent::alert('alert', 'sukses_tambah');
				redirect('upinjaman-noncash');
			} else {
				parent::alert('alert', 'gagal_tambah');
				redirect('upinjaman-noncash');
			}
		} else {
			$data['title'] = 'Tambah data pinjaman Cash';

			parent::template('user/tambahnonCash', $data);
		}
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
