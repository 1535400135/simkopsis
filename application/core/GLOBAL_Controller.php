<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GLOBAL_Controller extends CI_Controller
{
	private $userID;
	private $userLevel;
	private $userName;

	public function __construct()
	{
		parent::__construct();
		if ($this->session->has_userdata('pengguna_id')) {
			$this->userID = $this->session->userdata('pengguna_id');
			$this->userName = $this->session->userdata('pengguna_username');
			$this->userLevel = $this->session->userdata('pengguna_hak_akses');
		}
	}

	/*
	 * this system helper lives here
	 * include templating helper, debugging & error helper, core helper
	 * */

	// system helper
	public function model($model)
	{
		return $this->$model;
	}
	public function post($value)
	{
		return $this->input->post($value);
	}
	public function get($value)
	{
		return $this->input->get($value);
	}
	public function array_dump($arr)
	{
		echo "<pre>";
		print_r($arr);
		exit;
	}
	public function type_dump($var)
	{
		echo "<pre>";
		var_dump($var);
		exit;
	}
	public function hasLogin()
	{
		return $this->session->userdata('login') !== true ? false : true;
	}

	//	templating helper
	public function template($content, $data)
	{
		$this->load->view('templates/header', $data);
		$this->load->view($content, $data);
		$this->load->view('templates/footer', $data);
	}
	public function authPage($content, $data)
	{
		$this->load->view($content, $data);
	}
	public function alert($name, $value)
	{
		$this->session->set_flashdata($name, $value);
	}
}
