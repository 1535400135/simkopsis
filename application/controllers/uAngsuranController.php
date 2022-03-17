<?php

class uAngsuranController extends GLOBAL_Controller
{

	public function __construct()
	{
		parent::__construct();
		$model = array('uAngsuranModel', 'uPinjamanModel');
		$this->load->model($model);
		if (!parent::hasLogin()) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}

	public function uangsuranCash()
	{
		if (isset($_POST['simpan'])) {
			$pinjamanId = parent::post('pinjaman-id');
			$query = array(
				'pinjaman_id' => $pinjamanId
			);
			$angsuran = parent::post('angsuran');
			$totalPinjam = parent::model('uPinjamanModel')->lihat($query)['pinjaman_pembayaran'];

			$data = array(
				'angsuran_pinjaman_id' => $pinjamanId,
				'angsuran_jumlah' => $angsuran
			);

			$simpan = parent::model('uAngsuranModel')->tambah($data);

			if ($simpan > 0) {
				$pinjamanSekarang = $totalPinjam - $angsuran;
				$dataUpdate = array(
					'pinjaman_pembayaran' => $pinjamanSekarang
				);
				$update = parent::model('uPinjamanModel')->ubah($pinjamanId, $dataUpdate);
				if ($update > 0) {
					parent::alert('alert', 'sukses_tambah');
					redirect('uangsuran-cash');
				} else {
					parent::alert('alert', 'gagal_tambah');
					redirect('uangsuran-cash');
				}
			} else {
				parent::alert('alert', 'gagal_tambah');
				redirect('uangsuran-cash');
			}
		} else {
			$data['title'] = 'Data Angsuran';
			$data['angsuran'] = parent::model('uAngsuranModel')->lihat_semua_data($this->session->userdata('user_id'));

			parent::template('user/cash', $data);
		}
	}

	public function uangsurannonCash()
	{
		if (isset($_POST['simpan'])) {
			$pinjamanId = parent::post('pinjaman-id');
			$query = array(
				'pinjaman_id' => $pinjamanId
			);
			$angsuran = parent::post('angsuran');
			$totalPinjam = parent::model('uPinjamanModel')->lihat($query)['pinjaman_total'];

			$data = array(
				'angsuran_pinjaman_id' => $pinjamanId,
				'angsuran_jumlah' => $angsuran
			);

			$simpan = parent::model('uAngsuranModel')->tambah($data);

			if ($simpan > 0) {
				$pinjamanSekarang = $totalPinjam - $angsuran;
				$dataUpdate = array(
					'pinjaman_total' => $pinjamanSekarang
				);
				$update = parent::model('uPinjamanModel')->ubah($pinjamanId, $dataUpdate);
				if ($update > 0) {
					parent::alert('alert', 'sukses_tambah');
					redirect('uangsuran-noncash');
				} else {
					parent::alert('alert', 'gagal_tambah');
					redirect('uangsuran-noncash');
				}
			} else {
				parent::alert('alert', 'gagal_tambah');
				redirect('uangsuran-noncash');
			}
		} else {
			$data['title'] = 'Data Angsuran';
			$data['angsuran'] = parent::model('uAngsuranModel')->lihat_semua();

			parent::template('user/noncash', $data);
		}
	}
}
