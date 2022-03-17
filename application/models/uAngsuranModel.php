<?php

class uAngsuranModel extends GLOBAL_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function lihat_semua()
	{
		$this->db->select('*');
		$this->db->from('db_angsuran');
		$this->db->join('db_pinjaman', 'db_pinjaman.pinjaman_id = db_angsuran.angsuran_pinjaman_id');
		$this->db->join('db_anggota', 'db_anggota.anggota_id = db_pinjaman.pinjaman_anggota_id');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function lihat_semua_data($id)
	{
		$this->db->select('*');
		$this->db->from('db_angsuran');
		$this->db->join('db_pinjaman', 'db_pinjaman.pinjaman_id = db_angsuran.angsuran_pinjaman_id');
		$this->db->join('db_anggota', 'db_anggota.anggota_id = db_pinjaman.pinjaman_anggota_id');
		$this->db->where('db_angsuran.anggota_id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tambah($data)
	{
		return parent::insert_with_status('db_angsuran', $data);
	}
}
