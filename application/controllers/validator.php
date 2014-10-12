<?php
class Validator extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->helper(array('url','form','array'));
		$this->load->library('form_validation');
	}
	public function index()
	{
		$config = array(
			array(
				'field'   => 'username',  //sama kayak name="" di <input> nya
				'rules'   => 'required|min_length[5]|max_length[25]|is_unique[pengguna.username]' //harus diisi
				),
			array(
				'field'   => 'password', //sama kayak name="" di <input> nya
				'rules'   => 'trim|required|matches[repass]|min_length[5]|max_length[15]' //biar sama kayak repass
				),
			array(
				'field'   => 'repass', //sama kayak name="" di <input> nya
				'rules'   => 'required|min_length[5]|max_length[15]' //harus diisi
				)  
			);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('welcome_message');
		}
		else
		{
			$this->load->model('mdaftar','model',TRUE);
			$this->model->tambah_satu();
		}
	}
}
?>