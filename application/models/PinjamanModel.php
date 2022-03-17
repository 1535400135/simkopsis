<?php

class PinjamanModel extends GLOBAL_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function lihat_semua()
	{
		$sourceTable = array(
			'name' => 'db_pinjaman',
			array('pinjaman_anggota_id')
		); //array unique or id source
		$destinationTable = array(
			'table' => array('db_anggota'), //array table
			'id' => array('anggota_id')
		); //array unique or id destination
		return parent::get_join_table($sourceTable, $destinationTable);
	}

	public function cetakproses($id)
	{
		$query = $this->db->query("SELECT * from db_pinjaman as a join db_anggota as b on a.anggota_id=b.anggota_id where a.pinjaman_id=".$id."")->row();
        return $query;
	}

	public function tambah($data)
	{
		return parent::insert_with_status('db_pinjaman', $data);
	}

	public function tambahangsuran($data)
	{
		return parent::insert_with_status('db_angsuran_detail', $data);
	}

	public function ubah($id, $data)
	{
		return parent::update_table_with_status('db_pinjaman', 'pinjaman_id', $id, $data);
	}

	public function lihat($query)
	{
		return parent::get_array_of_row('db_pinjaman', $query);
	}
}
