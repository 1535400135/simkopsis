<?php

class UserController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!parent::hasLogin()) {
            $this->session->set_flashdata('alert', 'belum_login');
            redirect(base_url('login'));
        }
    }


    public function index()
    {
        $data['title'] = 'Dashboard User';

        parent::template('user/dashboard', $data);
    }

    public function profil()
    {
        $data['pengguna'] = parent::model('UserModel')->lihat_semua()->result_array();


        parent::template('user/profil', $data);
    }

    public function bantuan()
    {
        $data['title'] = 'Bantuan';

        parent::template('user/bantuan', $data);
    }

    public function pengaturan()
    {
        $data['title'] = 'Setting';

        parent::template('User/pengaturan', $data);
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
