<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_items extends CI_model{

	public function get_all()
	{
		$query = $this->db->get('items');
		return $query->result();
	}

	function tambah_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($id,$data){
		$this->db->where('id',$id);
		$this->db->update('items',$data);
	}

	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}	
}