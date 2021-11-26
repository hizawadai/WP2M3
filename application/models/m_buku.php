<?php 

class M_buku extends CI_Model{
	function tampil_data(){
		return $this->db->get('buku_test');
	}
	
	function input_buku($data,$table){
		$this->db->insert($table, $data);
	}
	function hapus_buku($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_buku($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_buku	($where,$data,$table){		
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}