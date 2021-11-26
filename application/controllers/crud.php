<?php 


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_buku');
		$this->load->helper('url');

	}

	public function index(){
		$data['buku_test'] = $this->m_buku->tampil_data()->result();
		$this->load->view('crud/v_tampil',$data);
	}

	function tambah(){
		$this->load->view('crud/v_input');
	}

    function tambah_aksi(){
		$Judulbuku = $this->input->post('Judulbuku');
		$penulisbuku = $this->input->post('Penulisbuku');
		$halamanbuku = $this->input->post('Halamanbuku');

		$data = array(
			'Judulbuku' => $Judulbuku,
			'Penulisbuku' => $penulisbuku,
			'Halamanbuku' => $halamanbuku
			);
		$this->m_buku->input_buku($data,'buku_test');
		redirect('crud/index');
	}

    function hapus($id){
		$where = array('id' => $id);
		$this->m_buku->hapus_buku($where,'buku_test');
		redirect('crud/index');
	}

    function edit($id){
        $where = array('id' => $id);
        $data['buku_test'] = $this->m_buku->edit_buku($where,'buku_test')->result();
        $this->load->view('crud/v_edit',$data);
    }
	function update (){
		$id = $this->input->post('id');
		$Judulbuku = $this->input->post('Judulbuku');
		$Penulisbuku = $this->input->post('Penulisbuku');
		$Halamanbuku = $this->input->post('Halamanbuku');

		$data = array(
			'Judulbuku' => $Judulbuku,
			'Penulisbuku' => $Penulisbuku,
			'Halamanbuku' => $Halamanbuku
			);
		$where = array(
			'id' => $id
		);

		$this->m_buku->update_buku($where,$data,'buku_test');
		redirect('crud/index');
	} 
}