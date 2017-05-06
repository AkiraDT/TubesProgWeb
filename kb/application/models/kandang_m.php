<?php

	class kandang_m extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		
		public function insert($value){
			$resault = $this->db->insert('kandang', $value);
			return $resault;
		}
		
		public function view(){
			$this->db->select('*');
			$this->db->from('kandang');
			$data = $this->db->get();
			return $data->result();
		}
		
		public function delete_kand($kode){
		$data = array (
			'kd_kandang' => $kode	
		);
		$remsek = $this->db->delete('kandang', $data);
		return $remsek;
	}
	}
?>