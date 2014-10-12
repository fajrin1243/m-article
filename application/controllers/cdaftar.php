<?php
class Cdaftar extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->helper(array('url','form','array'));
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('vdaftar');
	}

	public function do_daftar()
	{
		$this->load->model('mdaftar');
		$this->mdaftar->tambah_satu();
		redirect('adsjadsjdasjda');
	}
}
?>