<?php
class Login extends CI_Controller
{
	public function index()
	{
		//untuk menampilkan halaman view dengan nama login
		$this->load->view('login');
	}
    public function process()
    {
	//untuk cek apakah tombol login diklik
	if(isset($_POST['login']))
	{
		//mengambil data email dan password dari inputan pengguna
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		//untuk cek apakah email dan password telah terisi
		if($email and $password)
		{
			$data = [
					'email' => $email,
					'password' => $password
					];
			$user_account = $this->model->get_data($this->table, $data)->row();

			if($user_account)
			{
				$session_data = [
							'email' => $user_account->email,
							'nama' => $user_account->nama
							];
				$this->session->set_userdata($session_data);
				redirect('user/show');
			}
			else
			{
				$this->session->set_flashdata('error', 'Email atau password tidak cocok');
				redirect('login');
			}
		}
		else
		{
			$this->session->set_flashdata('error', 'Seluruh data harus diisi');
				redirect('login');
		}
	}
    }
    public function __construct()
    {
	//untuk memanggil construct bawaan CodeIgniter
	parent::__construct();

	//untuk memanggil model 'M_user' dan memberikan alias menjadi 'model'
	$this->load->model('M_user', 'model');

	//membuat variabel bernama $this->table berisi nama table, yaitu 'user'
	$this->table = 'user';
    }
}
