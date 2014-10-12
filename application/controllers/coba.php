<?php
class Coba extends CI_Controller
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
				'field'   => 'username',  
				'rules'   => 'required'
				),
			array(
				'field'   => 'password', 
				'rules'   => 'required|matches[passconf]'
				),
			array(
				'field'   => 'passconf', 
				'rules'   => 'required'
				),   
			array(
				'field'   => 'email', 
				'rules'   => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('form');
		}
		else
		{
			$this->load->view('sukses');
		}
	}
}
?>