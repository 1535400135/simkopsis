<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['login'] = 'AuthController/login';
$route['logout'] = 'AuthController/logout';
$route['admin-profil/(:any)'] = 'AnggotaController/profil/$1';
$route['admin-bantuan'] = 'AdminController/bantuan';
$route['admin-pengaturan'] = 'AdminController/pengaturan';
$route['user-profil/(:any)'] = 'AnggotaController/profil/$1';
$route['user-bantuan'] = 'UserController/bantuan';
$route['user-pengaturan'] = 'AdminController/pengaturan';

/*
	 * laporan routes modul
	 * */
$route['anggota-laporan/(:any)'] = 'AnggotaController/cetak/$1';
$route['laporan-anggota'] = 'LaporanController/anggota';
$route['laporan-neraca'] = 'LaporanController/neraca';
$route['laporan-simpanan'] = 'LaporanController/simpananAnggota';
$route['laporan-pinjaman'] = 'LaporanController/pinjamanAnggota';
$route['laporan-tagihan-koperasi'] = 'LaporanController/tagihanKoperasi';

/*
    * angsuran routes modul
    * */
$route['angsuran-cash'] = 'AngsuranController/angsuranCash';
$route['angsuran-noncash'] = 'AngsuranController/angsurannonCash';
$route['uangsuran-cash'] = 'uAngsuranController/uangsuranCash';
$route['uangsuran-noncash'] = 'uAngsuranController/uangsurannonCash';

/*
     * pinjaman routes modul
     * */
// view
$route['pinjaman-cash'] = 'PinjamanController/pinjamanCash';
$route['pinjaman-noncash'] = 'PinjamanController/pinjamannoncash';
$route['upinjaman-cash'] = 'uPinjamanController/upinjamanCash';
$route['upinjaman-noncash'] = 'uPinjamanController/upinjamannoncash';
$route['pinjaman-musyarakah'] = 'PinjamanController/pinjamanMusyarakah';
$route['pinjaman-ijarah'] = 'PinjamanController/pinjamanIjarah';

// insert
$route['pinjaman-cash/tambah'] = 'PinjamanController/tambahCash';
$route['pinjaman-cash/proses'] = 'PinjamanController/prosespinjaman';
$route['pinjaman-noncash/tambah'] = 'PinjamanController/tambahnonCash';
$route['upinjaman-cash/tambah'] = 'uPinjamanController/utambahCash';
$route['upinjaman-noncash/tambah'] = 'uPinjamanController/utambahnonCash';

//disposisi
$route['pinjaman/setuju/(:any)'] = 'PinjamanController/setuju/$1';
$route['pinjaman/proses/(:any)'] = 'PinjamanController/proses/$1';
$route['pinjaman/cetakproses/(:any)'] = 'PinjamanController/cetakproses/$1';
$route['pinjaman/cetakselesai/(:any)'] = 'PinjamanController/cetakselesai/$1';
$route['pinjaman/tolak/(:any)'] = 'PinjamanController/tolak/$1';
$route['apinjaman/setuju/(:any)'] = 'uPinjamanController/asetuju/$1';
$route['apinjaman/tolak/(:any)'] = 'uPinjamanController/atolak/$1';

/*
	 * simpanan routes modul
	 * */
$route['simpanan-modal'] = 'SimpananController/simpananPokok';
$route['simpanan-investasi'] = 'SimpananController/simpananWajib';
$route['simpanan-tabungan'] = 'SimpananController/simpananSukarela';
$route['usimpanan-pokok/(:any)'] = 'uSimpananController/usimpananPokok/$1';
$route['usimpanan-wajib/(:any)'] = 'uSimpananController/usimpananWajib/$1';
$route['usimpanan-sukarela/(:any)'] = 'uSimpananController/usimpananSukarela/$1';

/*
	 * anggota modul routes
	 * */
$route['anggota'] = 'AnggotaController';
$route['anggota/tambah'] = 'AnggotaController/tambah';
$route['anggota/updateprofil/(:any)'] = 'AnggotaController/updateprofil/$1';
$route['pengguna/gantipass/(:any)'] = 'AnggotaController/gantipass/$1';
$route['pengguna/ubahnohp/(:any)'] = 'AnggotaController/gantinohp/$1';
$route['anggota/ubah/(:any)'] = 'AnggotaController/ubah/$1';
$route['anggota/hapus/(:any)'] = 'AnggotaController/hapus/$1';
$route['anggota/(:any)'] = 'AnggotaController/detail/$1';

$route['daftar-peminjam'] = 'uPinjamanController/daftar/$1';
$route['status-pinjaman/(:any)'] = 'uPinjamanController/status/$1';

$route['default_controller'] = 'AdminController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
