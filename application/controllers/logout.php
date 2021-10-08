<?php
class Logout extends CI_Controller 
{
	public function index()
	{
		//menghapus session yang dimiliki pengguna
		$this->session->sess_destroy();

		//mengarahkan ke halaman login
		redirect('login');
	}
}
