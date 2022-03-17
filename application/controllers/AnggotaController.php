<?php

class AnggotaController extends GLOBAL_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('AnggotaModel');
		$this->load->model($model);
		if (!parent::hasLogin()) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['title'] = 'Daftar Anggota ';
		$data['anggota'] = parent::model('AnggotaModel')->lihat_semua();

		parent::template('anggota/index', $data);
	}

	public function cetak($id)
	{
		$this->load->library('pdfgenerator');
		$data['anggota'] = $this->AnggotaModel->cetak($id);
		$data['pinjaman'] = $this->AnggotaModel->cetakpinjaman($id);
		$data['angsuran'] = $this->AnggotaModel->cetakangsuran($id);
		$data['tabungan'] = $this->AnggotaModel->cetaktabungan($id);
		$data['investasi'] = $this->AnggotaModel->cetakinvestasi($id);
		$file_pdf = 'Cetak Anggota';
		$paper = 'A4';
		$orientation = "potrait";
		$html = $this->load->view('anggota/laporan',$data, true);
		$this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}

	public function detail($id)
	{
		$data['title'] = 'Data anggota ';
		$query = array(
			'anggota_id' => $id
		);
		$data['anggota'] = parent::model('AnggotaModel')->lihat_anggota($query);
		$querySimpanan = array(
			'simpanan_anggota_id' => $id
		);
		$data['simpanan'] = parent::model('AnggotaModel')->lihat_simpanan($querySimpanan)->result_array();
		$queryPinjaman = array(
			'pinjaman_anggota_id' => $id
		);
		$data['pinjaman'] = parent::model('AnggotaModel')->lihat_pinjaman($queryPinjaman)->result_array();
		$queryAngsuran = array (
			'anggota_id' => $id
		);
		$data['angsuran'] = parent::model('AnggotaModel')->lihat_angsuran($queryAngsuran)->result_array();

		parent::template('anggota/detail', $data);
	}

	/*
     * insert modul
     * */
	public function tambah()
	{
		$kode_id = $this->AnggotaModel->getId();
		$urutan = $kode_id;
		$urutan++;
		$anggota_id = $urutan;
		if (isset($_POST['tambah'])) {

			$data = array(
				'anggota_id' => $anggota_id,
				'anggota_nama' => parent::post('nama'),
				'anggota_tempat_lahir' => parent::post('tempat-lahir'),
				'anggota_tanggal_lahir' => parent::post('tanggal-lahir'),
				'anggota_nama_ibu' => parent::post('nama-ibu'),
				'anggota_pendidikan' => parent::post('pendidikan'),
				'anggota_departemen' => parent::post('departemen'),
				'anggota_jabatan' => parent::post('jabatan'),
				'anggota_jk' => parent::post('jenis-kelamin'),
				'anggota_status_kawin' => parent::post('status-kawin'),
				'anggota_agama' => parent::post('agama'),
				'anggota_nik' => parent::post('nik'),
				'anggota_nomor_hp' => parent::post('telepon'),
				'anggota_email' => parent::post('email'),
				'anggota_alamat' => parent::post('alamat'),
				'pengguna_id' => $anggota_id,
			);

			$password = parent::post('password');
			$data2 = array(
				'pengguna_id' => $anggota_id,
				'pengguna_username' => parent::post('username'),
				'pengguna_password' => md5($password),
				'pengguna_hak_akses' => 'anggota',
				'pengguna_nama' => parent::post('nama'),
				'anggota_id' => $anggota_id
			);

			$simpan = parent::model('AnggotaModel')->tambah($data);
			$simpan2 = parent::model('AnggotaModel')->tambahuser($data2);

			if ($simpan2 > 0) {

			} else {
				parent::alert('alert', 'gagal_tambah');
				redirect('anggota');
			}

			if ($simpan > 0) {
				parent::alert('alert', 'sukses_tambah');
				redirect('anggota');
			} else {
				parent::alert('alert', 'gagal_tambah');
				redirect('anggota');
			}
		} else {
			$data['title'] = 'tambah anggota koperasi baru';

			parent::template('anggota/tambah', $data);
		}
	}

	public function gantipass($id)
	{
		$oldpass = $this->AnggotaModel->getPass($id);
		$passlama = md5(parent::post('password_lama'));
		if ($oldpass==$passlama) {
			$passnew = parent::post('password');
			$konfpass =parent::post('konfirmasi');
			if ($passnew==$konfpass) {
				$data = array(
					'pengguna_password' => md5($passnew)
				);
				$simpan = $this->AnggotaModel->ubahpassword($id, $data);
				if ($simpan > 0) {
					parent::alert('alert', 'sukses_ubah');
					redirect('admin-pengaturan');
				} else {
					parent::alert('alert', 'gagal_ubah');
					redirect('admin-pengaturan');
				}
			}
		}
	}

	public function profil($id)
	{
		$data['pengguna'] = $this->AnggotaModel->lihat_semua_profil($id);
		parent::template('admin/profil', $data);
	}

	public function gantinohp($id)
	{
		$oldpass = $this->AnggotaModel->getPass($id);
		$passlama = md5(parent::post('password'));
		if ($oldpass==$passlama) {
			$data = array(
				'anggota_nomor_hp' => parent::post('telepon')
			);
			$simpan = $this->AnggotaModel->ubahnohp($id, $data);
			if ($simpan > 0) {
				parent::alert('alert', 'sukses_ubah');
				redirect('admin-pengaturan');
			} else {
				parent::alert('alert', 'gagal_ubah');
				redirect('admin-pengaturan');
			}
		}
	}

	public function updateprofil($id)
	{
		$data = array(
			'pengguna_nama' => parent::post('nama'),
		);

		$config['upload_path'] = FCPATH.'/assets/upload/foto/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('profil');
		$upload = $this->upload->data();
		$data = array(
			'pengguna_nama' => parent::post('nama'),
			'pengguna_foto' => $upload['file_name'],
		);
		$simpan = parent::model('AnggotaModel')->updateprofil($id, $data);
		if ($simpan > 0) {
				parent::alert('alert', 'sukses_ubah');
				redirect('admin-profil/'.$id);
		} else {
				parent::alert('alert', 'gagal_ubah');
				redirect('admin-profil/'.$id);
		}
	}

	public function ubah($id)
	{
		if (isset($_POST['ubah'])) {
			$data = array(
				'anggota_nama' => parent::post('nama'),
				'anggota_tempat_lahir' => parent::post('tempat-lahir'),
				'anggota_tanggal_lahir' => parent::post('tanggal-lahir'),
				'anggota_nama_ibu' => parent::post('nama-ibu'),
				'anggota_pendidikan' => parent::post('pendidikan'),
				'anggota_departemen' => parent::post('departemen'),
				'anggota_jabatan' => parent::post('jabatan'),
				'anggota_jk' => parent::post('jenis-kelamin'),
				'anggota_status_kawin' => parent::post('status-kawin'),
				'anggota_agama' => parent::post('agama'),
				'anggota_nik' => parent::post('nik'),
				'anggota_nomor_hp' => parent::post('telepon'),
				'anggota_email' => parent::post('email'),
				'anggota_alamat' => parent::post('alamat')
			);

			$config['upload_path'] = './assets/upload/dokumen/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			$this->upload->do_upload('ktp');
			$ktp = $this->upload->data('file_name');
			$this->upload->do_upload('kk');
			$kk = $this->upload->data('file_name');
			$this->upload->do_upload('listrik');
			$listrik = $this->upload->data('file_name');
			$this->upload->do_upload('jaminan');
			$jaminan = $this->upload->data('file_name');
			$this->upload->do_upload('kerja');
			$kerja = $this->upload->data('file_name');
			$this->upload->do_upload('gaji');
			$gaji = $this->upload->data('file_name');
			$this->upload->do_upload('rekening');
			$rekening = $this->upload->data('file_name');

			$dataUpload = array(
				'ktp' => $ktp,
				'kk' => $kk,
				'listrik' => $listrik,
				'jaminan' => $jaminan,
				'kerja' => $kerja,
				'gaji' => $gaji,
				'rekening' => $rekening,
			);

			$data['anggota_dokumen'] = json_encode($dataUpload);

			$simpan = parent::model('AnggotaModel')->ubah($id, $data);

		if ($simpan > 0) {
				parent::alert('alert', 'sukses_ubah');
				redirect('anggota');
			} else {
				parent::alert('alert', 'gagal_ubah');
				redirect('anggota');
			}
		} else {
			$data['title'] = 'ubah data anggota koperasi ';
			$query = array(
				'anggota_id' => $id
			);
			$data['anggota'] = parent::model('AnggotaModel')->lihat_anggota($query);

			parent::template('anggota/ubah', $data);
		}
	}

	public function hapus($id)
	{
		$query = array(
			'anggota_id' => $id
		);
		$hapus = parent::model('AnggotaModel')->hapus($query);
		if ($hapus > 0) {
			parent::alert('alert', 'sukses_hapus');
			redirect('anggota');
		} else {
			parent::alert('alert', 'gagal_hapus');
			redirect('anggota');
		}
	}
}
