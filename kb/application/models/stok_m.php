<?php

	class stok_m extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		
		public function insert($value){
			$resault = $this->db->insert('stok_makanan', $value);
			return $resault;
		}
		
		public function view(){
			$this->db->select('*');
			$this->db->from('stok_makanan');
			$data = $this->db->get();
			return $data->result();
		}
		
		public function delete_mkn($kode){
			$data = array (
				'kd_makanan' => $kode	
			);
			$remsek = $this->db->delete('stok_makanan', $data);
			return $remsek;
		}
		
		public function countData(){
			$this->db->select('sum(jumlah_makanan)');
			$this->db->from('stok_makanan');
			$data = $this->db->get();
			return $data->result();
		}
	}
?>