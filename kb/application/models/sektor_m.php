<?php

	class sektor_m extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		
		public function insert($value){
			$resault = $this->db->insert('sektor', $value);
			return $resault;
		}
		
		public function view(){
			$this->db->select('*');
			$this->db->from('sektor');
			$data = $this->db->get();
			return $data->result();
		}
		
		public function delete_skt($kode){
		$data = array (
			'kd_sektor' => $kode	
		);
		$remsek = $this->db->delete('sektor', $data);
		return $remsek;
	}
	}
?>