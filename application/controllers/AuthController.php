<?php
class AuthController extends GLOBAL_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthModel');
	}

	/*
		 * login, register, logout
		 * autentikasi pengguna sales, adminSales, adminGudang dan Superadmin
		 *
		 * **/
	public function login()
	{
		if (parent::hasLogin()) {
			redirect(base_url());
		} else {
			if (isset($_POST['login'])) {
				$username = parent::post('username');
				$password = parent::post('password');

				$dataPengguna = parent::model('AuthModel')->get_pengguna($username, md5($password));

				if ($dataPengguna->num_rows() > 0) {
					$pengguna = $dataPengguna->row_array();

					$sessionData = array(
						'user_id' => $pengguna['pengguna_id'],
						'username' => $pengguna['pengguna_username'],
						'name' => $pengguna['pengguna_nama'],
						'profil' => $pengguna['pengguna_profil'],
						'level' => $pengguna['pengguna_hak_akses'],
						'anggota_id' => $pengguna['anggota_id'],
						'login' => true
					);

					$this->session->set_userdata($sessionData);

					parent::alert('alert', 'user-welcome');
					redirect(base_url());
				} else {
					parent::alert('alert', 'error-login');
				}
			}

			$data['title'] = 'Masuk - Sistem Koperasi Alfa Polimer Indonesia';
			parent::authPage('auth/login', $data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
