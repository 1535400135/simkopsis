<?php

class SimpananModel extends GLOBAL_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function lihat_semua()
	{
		$sourceTable = array(
			'name' => 'db_simpanan',
			array('simpanan_anggota_id')
		); //array unique or id source
		$destinationTable = array(
			'table' => array('db_anggota'), //array table
			'id' => array('anggota_id')
		); //array unique or id destination
		return parent::get_join_table($sourceTable, $destinationTable);
	}

	public function tambah($data)
	{
		return parent::insert_with_status('db_simpanan', $data);
	}
}
