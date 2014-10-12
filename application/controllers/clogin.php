<?php
class Clogin extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->helper(array('url','array','form'));
		$this->load->library('form_validation');
		$this->load->model('mlogin','',TRUE);
	}
	public function index()
	{
		$aturan = array(
			'username'=>array(
				'field' => 'username',
				'rules' => 'trim|required|xss_clean',
				),
			'pwd' => array(
				'field' => 'pwd',
				'rules' => 'trim|required|xss_clean|callback_cek_data'
				)
		);
		$this->form_validation->set_rules($aturan);
		if ($this->form_validation->run() === FALSE) 
		{
			$this->load->view('gagal');
		}
		else
		{
/*			if($this->input->post('tipe_pengguna') == 1)
*/			redirect('cuser','refresh');
		}
	}

	public function cek_data($pwd)
	{
		$username= $this->input->post('username');

		//nge-load model/mlogin -> function/login
		$result = $this->mlogin->login($username,$pwd);

		if($result)
		{
			$sess_array = array();
			foreach ($result as $row) //dijadiin row 
			{
				$sess_array = array(
					'id'=>$row->id,
					'username' => $row->username
					);
				$this->session->set_userdata('logged_in',$sess_array);	
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('cek_data','invalid user');
			return false;
		}
	}
}
?>