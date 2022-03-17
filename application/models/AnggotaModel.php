<?php

class AnggotaModel extends GLOBAL_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function lihat_semua()
	{
		return parent::get_array_of_table('db_anggota');
	}

	public function lihat_semua_profil($id)
    {
        $query = $this->db->query("SELECT * from db_pengguna where pengguna_id=".$id."")->row();
        return $query;
    }

	public function getId()
	{
		$query = $this->db->query("SELECT MAX(anggota_id) as id from db_anggota");
        $hasil = $query->row();
        return $hasil->id;
	}

	public function cetakanggota()
	{
		$query = $this->db->query("SELECT * FROM db_anggota")->result();
		return $query;
	}

	public function cetak($id)
	{
		$query = $this->db->query("SELECT * FROM db_anggota where anggota_id=".$id)->row();
		return $query;
	}

	public function cetakpinjaman($id)
	{
		$query = $this->db->query("SELECT sum(pinjaman_total) as total, sum(pinjaman_pembayaran) as sisa from db_pinjaman where anggota_id=".$id)->row();
		return $query;
	}

	public function cetakangsuran($id)
	{
		$query = $this->db->query("SELECT sum(pinjaman_tenggat) as total_angsuran, (select count(angsuran_id) from db_angsuran where anggota_id=".$id.") as angsuran from db_pinjaman where anggota_id=".$id)->row();
		return $query;
	}

	public function cetaktabungan($id)
	{
		$query = $this->db->query("SELECT sum(simpanan_total) as total_tabungan from db_simpanan where simpanan_jenis='tabungan' and anggota_id=".$id)->row();
		return $query;
	}

	public function cetakinvestasi($id)
	{
		$query = $this->db->query("SELECT sum(simpanan_total) as total_investasi from db_simpanan where simpanan_jenis='investasi' and anggota_id=".$id)->row();
		return $query;
	}

	public function updateprofil($id, $data)
	{
		return parent::update_table_with_status('db_pengguna', 'pengguna_id', $id, $data);
	}

	public function getPass($id)
	{
		$query = $this->db->query("SELECT pengguna_password from db_pengguna where pengguna_id=".$id."");
        $hasil = $query->row();
        return $hasil->pengguna_password;
	}

	public function tambah($data)
	{
		return parent::insert_with_status('db_anggota', $data);
	}

	public function tambahuser($data)
	{
		return parent::insert_with_status('db_pengguna', $data);
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

	public function lihat_angsuran($query)
	{
		return parent::get_object_of_row('db_angsuran', $query);
	}

	public function ubah($id, $data)
	{
		return parent::update_table_with_status('db_anggota', 'anggota_id', $id, $data);
	}

	public function ubahpassword($id, $data)
	{
		return parent::update_table_with_status('db_pengguna','pengguna_id', $id, $data);
	}

	public function ubahnohp($id, $data)
	{
		return parent::update_table_with_status('db_anggota','anggota_id', $id, $data);
	}

	public function hapus($query)
	{
		return parent::delete_row_with_status('db_anggota', $query);
	}
}
