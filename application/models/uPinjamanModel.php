<?php

class uPinjamanModel extends GLOBAL_Model
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

	public function tambah($data)
	{
		return parent::insert_with_status('db_pinjaman', $data);
	}

	public function ubah($id, $data)
	{
		return parent::update_table_with_status('db_pinjaman', 'pinjaman_id', $id, $data);
	}

	public function lihat($query)
	{
		return parent::get_array_of_row('db_pinjaman', $query);
	}

	public function lihat_anggota($query)
	{
		return parent::get_array_of_row('db_anggota', $query);
	}

	public function lihat_file($id)
	{
		return $this->db->select('*')->from('db_anggota');
	}

	public function lihat_angsuran($query)
	{
		return parent::get_object_of_row('db_angsuran', $query);
	}

	public function lihat_simpanan($query)
	{
		return parent::get_object_of_row('db_simpanan', $query);
	}

	public function lihat_pinjaman($query)
	{
		return parent::get_object_of_row('db_pinjaman', $query);
	}
}
