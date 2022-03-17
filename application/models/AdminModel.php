<?php

class AdminModel extends GLOBAL_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function lihat_semua($id)
    {
        $query = $this->db->query("SELECT * from db_pengguna where=".$id."")->row();
        return $query;
    }

    public function getPeminjaman()
    {
        $query = $this->db->query("SELECT sum(pinjaman_diterima) as pinjaman from db_pinjaman")->row();
        return $query->pinjaman;
    }

    public function getSaldo()
    {
        $query = $this->db->query("SELECT sum(saldo) as saldo from db_saldo")->row();
        return $query->saldo;
    }

    public function getPinjamanRil()
    {
        $query = $this->db->query("SELECT sum(pinjaman_ril) as pinjaman from db_pinjaman")->row();
        return $query->pinjaman;
    }

    public function getTerima()
    {
        $query = $this->db->query("SELECT sum(pinjaman_diterima) as diterima from db_pinjaman")->row();
        return $query->diterima;
    }

    public function getAngsuran()
    {
        $query = $this->db->query("SELECT sum(angsuran_jumlah) as angsuran from db_angsuran")->row();
        return $query->angsuran;
    }

    public function getTotal()
    {
        $query = $this->db->query("SELECT sum(pinjaman_total) as total from db_pinjaman")->row();
        return $query->total;
    }

    public function getSisaAngsuran()
    {
        $query = $this->db->query("SELECT sum(pinjaman_pembayaran) as sisa from db_pinjaman")->row();
        return $query->sisa;
    }

    public function getModal()
    {
        $query = $this->db->query("SELECT sum(simpanan_total) as modal from db_simpanan where simpanan_jenis='modal'")->row();
        return $query->modal;
    }

    public function getInvestasi()
    {
        $query = $this->db->query("SELECT sum(simpanan_total) as investasi from db_simpanan where simpanan_jenis='investasi'")->row();
        return $query->investasi;
    }

    public function getTabungan()
    {
        $query = $this->db->query("SELECT sum(simpanan_total) as tabungan from db_simpanan where simpanan_jenis='tabungan'")->row();
        return $query->tabungan;
    }

    public function getSimpanan()
    {
        $query = $this->db->query("SELECT sum(simpanan_total) as simpanan from db_simpanan")->row();
        return $query->simpanan;
    }

    public function getSimpananBulanan($date1, $date2)
    {
        $query = $this->db->query("SELECT sum(simpanan_total) as simpananbulanan from db_simpanan where simpanan_date_created BETWEEN '".$date1."' and '".$date2."'")->row();
        return $query->simpananbulanan;
    }

    public function getPinjamanBulanan($date1, $date2)
    {
        $query = $this->db->query("SELECT sum(pinjaman_total) as pinjamanbulanan from db_pinjaman where pinjaman_date_created BETWEEN '".$date1."' and '".$date2."'")->row();
        return $query->pinjamanbulanan;
    }

    public function getAngsuranBulanan($date1, $date2)
    {
        $query = $this->db->query("SELECT sum(angsuran_jumlah) as angsuranbulanan from db_angsuran where angsuran_date_created BETWEEN '".$date1."' and '".$date2."'")->row();
        return $query->angsuranbulanan;
    }

    public function lihat_user($query)
    {
        return parent::get_array_of_row('db_pengguna', $query);
    }

    public function ubah($id, $data)
    {
        return parent::update_table_with_status('db_pengguna', 'pengguna_id', $id, $data);
    }

    public function hapus($query)
    {
        return parent::delete_row_with_status('db_pengguna', $query);
    }
}
