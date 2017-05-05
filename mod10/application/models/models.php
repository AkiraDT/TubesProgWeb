<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models extends CI_Model {

	public function get_mahasiswa(){
		$select = $this->db->get('mahasiswa');
		return $select->result_array();
	}
	
	public function insert_mahasiswa($data){
		$insert = $this->db->insert('mahasiswa', $data);
		return $insert;
	}
	
	public function delete_mhs($nim){
		$data = array (
			'nim' => $nim	
		);
		$rem = $this->db->delete('mahasiswa', $data);
		return $rem;
	}
	
	public function edit_mahasiswa($value, $where){
		$this->db->where($where);
		$update = $this->db->update("mahasiswa", $value);
		return $update;
	}
}
