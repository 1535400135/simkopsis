<?php

class AdminModel extends GLOBAL_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function lihat_anggota($query)
    {
        return parent::get_array_of_row('db_anggota', $query);
    }

    public function lihat_simpanan($query)
    {
        return parent::get_object_of_row('db_simpanan', $query);
    }

    public function lihat_pinjaman($query)
    {
        return parent::get_object_of_row('db_pinjaman', $query);
    }

    public function ubah($id, $data)
    {
        return parent::update_table_with_status('db_anggota', 'anggota_id', $id, $data);
    }
}
