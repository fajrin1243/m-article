<?php
class Mdaftar extends CI_Model
{
	public function tambah_satu()
	{
		date_default_timezone_set('Asia/Jakarta');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$tipe_pengguna_id = 4;
		$tanggal_dibuat = date('Y-m-d H:i:s',now());
		$tanggal_dirubah = date('Y-m-d H:i:s',now());
		$status = 'Tidak Aktif';


		$data = array(
			'username'=>$username,
			'password'=>$password,
			'tipe_pengguna_id'=>$tipe_pengguna_id,
			'tanggal_dibuat'=>$tanggal_dibuat,
			'tanggal_dirubah'=>$tanggal_dirubah,
			'status'=>$status
			);
		$insert = $this->db->insert('pengguna',$data);

		if($insert==TRUE)
		{
			redirect('cdaftar');
		}
		else
		{
			redirect('asgasgga');
		}
	}
}
?>