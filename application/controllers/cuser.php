<?php
session_start();
class Cuser extends CI_Controller
{
 public function __construct()
 {
  parent:: __construct();
  $this->load->helper(array('url','array','form'));
  $this->load->library(array('form_validation','session'));
}
public function index()
{
  if($this->session->userdata('logged_in'))
  {  
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    $this->load->view('index',$data);
  }
  else
  {
    redirect('welcome','refresh');
  }
}
public function logout()
{
  $this->session->unset_userdata('logged_in');
  session_destroy();
  redirect('welcome','refresh');
}
}
?>