<?php

class AngsuranController extends GLOBAL_Controller
{

	public function __construct()
	{
		parent::__construct();
		$model = array('AngsuranModel', 'PinjamanModel');
		$this->load->model($model);
		if (!parent::hasLogin()) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}

	public function angsuranCash()
	{
		if (isset($_POST['simpan'])) {
			$pinjamanId = parent::post('pinjaman-id');
			$query = array(
				'pinjaman_id' => $pinjamanId
			);
			$angsuran = parent::post('angsuran');
			$totalPinjam = parent::model('PinjamanModel')->lihat($query)['pinjaman_total'];

			$data = array(
				'anggota_id' => $this->session->userdata('user_id'),
				'angsuran_pinjaman_id' => $pinjamanId,
				'angsuran_jumlah' => $angsuran
			);

			$simpan = parent::model('AngsuranModel')->tambah($data);

			if ($simpan > 0) {
				$pinjamanSekarang = $totalPinjam - $angsuran;
				$dataUpdate = array(
					'pinjaman_total' => $pinjamanSekarang
				);
				$update = parent::model('PinjamanModel')->ubah($pinjamanId, $dataUpdate);
				if ($update > 0) {
					parent::alert('alert', 'sukses_tambah');
					redirect('angsuran-cash');
				} else {
					parent::alert('alert', 'gagal_tambah');
					redirect('angsuran-cash');
				}
			} else {
				parent::alert('alert', 'gagal_tambah');
				redirect('angsuran-cash');
			}
		} else {
			$data['title'] = 'Data Angsuran';
			$data['angsuran'] = parent::model('AngsuranModel')->lihat_semua();

			parent::template('angsuran/cash', $data);
		}
	}

	public function angsurannonCash()
	{
		if (isset($_POST['simpan'])) {
			$pinjamanId = parent::post('pinjaman-id');
			$query = array(
				'pinjaman_id' => $pinjamanId
			);
			$angsuran = parent::post('angsuran');
			$totalPinjam = parent::model('PinjamanModel')->lihat($query)['pinjaman_total'];

			$data = array(
				'angsuran_pinjaman_id' => $pinjamanId,
				'angsuran_jumlah' => $angsuran
			);

			$simpan = parent::model('AngsuranModel')->tambah($data);

			if ($simpan > 0) {
				$pinjamanSekarang = $totalPinjam - $angsuran;
				$dataUpdate = array(
					'pinjaman_total' => $pinjamanSekarang
				);
				$update = parent::model('PinjamanModel')->ubah($pinjamanId, $dataUpdate);
				if ($update > 0) {
					parent::alert('alert', 'sukses_tambah');
					redirect('angsuran-noncash');
				} else {
					parent::alert('alert', 'gagal_tambah');
					redirect('angsuran-noncash');
				}
			} else {
				parent::alert('alert', 'gagal_tambah');
				redirect('angsuran-noncash');
			}
		} else {
			$data['title'] = 'Data Angsuran';
			$data['angsuran'] = parent::model('AngsuranModel')->lihat_semua();

			parent::template('angsuran/noncash', $data);
		}
	}
}
