<?php

class SimpananController extends GLOBAL_Controller
{

    public function __construct()
    {
        parent::__construct();
        $model = array('SimpananModel');
        $this->load->model($model);
        if (!parent::hasLogin()) {
            $this->session->set_flashdata('alert', 'belum_login');
            redirect(base_url('login'));
        }
    }

    public function simpananPokok()
    {
        if (isset($_POST['simpan'])) {
            $data = array(
                'simpanan_anggota_id' => parent::post('anggota'),
                'simpanan_jenis' => 'modal',
                'simpanan_total' => parent::post('setoran'),
                'simpanan_keterangan' => 'SIMPANAN Pokok : Simpanan bersifat umum yang penyimpanan dan penarikannya dapat dilakukan kapan saja oleh nasabah pada jam kerja. Simpanan awal Rp 25.000 dan selanjutnya minimal Rp 10.000.'
            );

            $simpan = parent::model('SimpananModel')->tambah($data);

            if ($simpan > 0) {
                parent::alert('alert', 'sukses_tambah');
                redirect('simpanan-pokok');
            } else {
                parent::alert('alert', 'gagal_tambah');
                redirect('simpanan-pokok');
            }
        } else {
            $data['title'] = 'Simpanan Pokok';
            $data['pokok'] = parent::model('SimpananModel')->lihat_semua()->result_array();

            parent::template('simpanan/pokok', $data);
        }
    }

    public function simpananWajib()
    {
        if (isset($_POST['simpan'])) {
            $data = array(
                'simpanan_anggota_id' => parent::post('anggota'),
                'simpanan_jenis' => 'investasi',
                'simpanan_total' => parent::post('setoran'),
                'simpanan_keterangan' => 'SIMPANAN pokok : Simpanan bersifat umum yang penyimpanan dan penarikannya dapat dilakukan kapan saja oleh nasabah pada jam kerja. Simpanan awal Rp 25.000 dan selanjutnya minimal Rp 10.000.'
            );

            $simpan = parent::model('SimpananModel')->tambah($data);

            if ($simpan > 0) {
                parent::alert('alert', 'sukses_tambah');
                redirect('simpanan-wajib');
            } else {
                parent::alert('alert', 'gagal_tambah');
                redirect('simpanan-wajib');
            }
        } else {
            $data['title'] = 'Simpanan Wajib';
            $data['wajib'] = parent::model('SimpananModel')->lihat_semua()->result_array();

            parent::template('simpanan/wajib', $data);
        }
    }

    public function simpananSukarela()
    {
        if (isset($_POST['simpan'])) {
            $data = array(
                'simpanan_anggota_id' => parent::post('anggota'),
                'simpanan_jenis' => 'tabungan',
                'simpanan_total' => parent::post('setoran'),
                'simpanan_keterangan' => 'SIMPANAN pokok : Simpanan bersifat umum yang penyimpanan dan penarikannya dapat dilakukan kapan saja oleh nasabah pada jam kerja. Simpanan awal Rp 25.000 dan selanjutnya minimal Rp 10.000.'
            );

            $simpan = parent::model('SimpananModel')->tambah($data);

            if ($simpan > 0) {
                parent::alert('alert', 'sukses_tambah');
                redirect('simpanan-sukarela');
            } else {
                parent::alert('alert', 'gagal_tambah');
                redirect('simpanan-sukarela');
            }
        } else {
            $data['title'] = 'Simpanan Sukarela';
            $data['sukarela'] = parent::model('SimpananModel')->lihat_semua()->result_array();

            parent::template('simpanan/sukarela', $data);
        }
    }
}
