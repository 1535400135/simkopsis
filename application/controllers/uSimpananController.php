<?php

class uSimpananController extends GLOBAL_Controller
{

    public function __construct()
    {
        parent::__construct();
        $model = array('uSimpananModel');
        $this->load->model($model);
        if (!parent::hasLogin()) {
            $this->session->set_flashdata('alert', 'belum_login');
            redirect(base_url('login'));
        }
    }

    public function usimpananPokok($id)
    {
        if (isset($_POST['simpan'])) {
            $data = array(
                'simpanan_anggota_id' => parent::post('anggota'),
                'simpanan_jenis' => 'modal',
                'simpanan_total' => parent::post('setoran'),
                'simpanan_keterangan' => 'SIMPANAN pokok : Simpanan bersifat umum yang penyimpanan dan penarikannya dapat dilakukan kapan saja oleh nasabah pada jam kerja. Simpanan awal Rp 25.000 dan selanjutnya minimal Rp 10.000.'
            );

            $simpan = parent::model('uSimpananModel')->tambah($data);

            if ($simpan > 0) {
                parent::alert('alert', 'sukses_tambah');
                redirect('usimpanan-pokok');
            } else {
                parent::alert('alert', 'gagal_tambah');
                redirect('usimpanan-pokok');
            }
        } else {
            $data['title'] = 'uSimpanan Pokok';
            $data['pokok'] = parent::model('uSimpananModel')->lihat_data($id);

            parent::template('user/pokok', $data);
        }
    }

    public function usimpananWajib($id)
    {
        if (isset($_POST['simpan'])) {
            $data = array(
                'simpanan_anggota_id' => parent::post('anggota'),
                'simpanan_jenis' => 'investasi',
                'simpanan_total' => parent::post('setoran'),
                'simpanan_keterangan' => 'SIMPANAN pokok : Simpanan bersifat umum yang penyimpanan dan penarikannya dapat dilakukan kapan saja oleh nasabah pada jam kerja. Simpanan awal Rp 25.000 dan selanjutnya minimal Rp 10.000.'
            );

            $simpan = parent::model('uSimpananModel')->tambah($data);

            if ($simpan > 0) {
                parent::alert('alert', 'sukses_tambah');
                redirect('usimpanan-wajib');
            } else {
                parent::alert('alert', 'gagal_tambah');
                redirect('usimpanan-wajib');
            }
        } else {
            $data['title'] = 'uSimpanan Wajib';
            $data['wajib'] = parent::model('uSimpananModel')->lihat_data($id);

            parent::template('user/wajib', $data);
        }
    }

    public function usimpananSukarela($id)
    {
        if (isset($_POST['simpan'])) {
            $data = array(
                'simpanan_anggota_id' => parent::post('anggota'),
                'simpanan_jenis' => 'tabungan',
                'simpanan_total' => parent::post('setoran'),
                'simpanan_keterangan' => 'SIMPANAN pokok : Simpanan bersifat umum yang penyimpanan dan penarikannya dapat dilakukan kapan saja oleh nasabah pada jam kerja. Simpanan awal Rp 25.000 dan selanjutnya minimal Rp 10.000.'
            );

            $simpan = parent::model('uSimpananModel')->tambah($data);

            if ($simpan > 0) {
                parent::alert('alert', 'sukses_tambah');
                redirect('usimpanan-sukarela');
            } else {
                parent::alert('alert', 'gagal_tambah');
                redirect('usimpanan-sukarela');
            }
        } else {
            $data['title'] = 'uSimpanan Sukarela';
            $data['sukarela'] = parent::model('uSimpananModel')->lihat_data($id);

            parent::template('user/sukarela', $data);
        }
    }
}
