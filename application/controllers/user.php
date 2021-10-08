<?php
class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user', 'model');
		$this->table = 'user';
        if(!$this->session->userdata('email'))
        {
            redirect('login');
        }
	}

	public function add()
	{
		$this->load->view('user_add');
	}
	public function save()
	{
		if(isset($_POST['kirim']))
		{
			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			$nama = $this->input->post('nama');
			//untuk cek apakah email, password, dan nama sudah terisi
			if($email and $pass and $nama)
			{
				//untuk cek apakah password lebih dari 6 karakter
				if(strlen($pass) > 6)
				{
					$data = [
					'email'=>$email,
					'password'=>$pass,
					'nama'=>$nama
					];
					$this->model->insert_data($this->table, $data);
				}
			}
			redirect('user/add');
		}
	}
    public function show()
    {
	$data['users'] = $this->model->get_all_data($this->table);
	$this->load->view('user_show', $data);
    }
    public function edit($id)
    {
	//mengambil data dari model berdasarkan ID
	$data['user'] = $this->model->get_data($this->table, ['id' => $id])->row();
	//mengirimkan data user tersebut ke view
	$this->load->view('user_edit', $data);
    }
    public function update()
    {
	if(isset($_POST['ubah']))
	{
		//mengambil data email, password, nama, dan id dari client side
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$nama = $this->input->post('nama');
		$id = $this->input->post('id');
		//untuk cek apakah email, password, dan nama sudah terisi
		if($email and $pass and $nama)
		{
			//untuk cek apakah password lebih dari 6 karakter
			if(strlen($pass) > 6)
			{
				$data = [
				'email'=>$email,
				'password'=>$pass,
				'nama'=>$nama
				];
				//memanggil function update_data pada model
                                $this->model->update_data($this->table, $data, ['id' => $id]);
			}
		}
		redirect('user/show');
	}
    }
    public function delete($id)
    {
	//meminta model untuk menghapus data dengan id = $id
	$delete = $this->model->delete_data($this->table, ['id'=>$id]);
	//jika data berhasil dihapus, maka pengunjung diarahkan ke halaman show
	if($delete)
		redirect('user/show');
    }
}
