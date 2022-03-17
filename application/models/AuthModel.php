<?php

class AuthModel extends  GLOBAL_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function get_pengguna($username, $password)
	{
		$user = array(
			'pengguna_username' => $username,
			'pengguna_password' => $password
		);

		return parent::get_object_of_row('db_pengguna', $user);
	}

	public function get_data_pengguna($id)
	{
		$query = array(
			'pengguna_id' => $id,
			'pengguna_isDelete' => 0
		);
		return parent::get_array_of_row('db_pengguna', $query);
	}

	public function get_penggunas()
	{
		$query = array(
			'pengguna_isDelete'	=> 0
		);
		return parent::get_object_of_row('db_pengguna', $query)->result_array();
	}

	public function tambah_pengguna($pengguna)
	{
		return parent::insert_with_status('db_pengguna', $pengguna);
	}

	public function ubah_pengguna($id, $pengguna)
	{
		return parent::update_table_with_status(
			'db_pengguna',
			'pengguna_id',
			$id,
			$pengguna
		);
	}

	public function hapus_pengguna($id)
	{
		$query = array(
			'pengguna_isDelete' => 1
		);
		return parent::update_table_with_status('db_pengguna', 'pengguna_id', $id, $query);
	}

	public function get_arsip_pengguna()
	{
		$query = array('pengguna_isDelete' => 1);
		return parent::get_object_of_row('db_pengguna', $query)->result_array();
	}

	public function restore_pengguna($penggunaID)
	{
		$query = array('pengguna_isDelete' => 0);
		return parent::update_table_with_status('db_pengguna', 'pengguna_id', $penggunaID, $query);
	}
}
