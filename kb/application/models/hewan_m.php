<?php

	class hewan_m extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		
		public function insert($value){
			$resault = $this->db->insert('hewan', $value);
			return $resault;
		}
		
		public function view(){
			$this->db->select('*');
			$this->db->from('hewan');
			$data = $this->db->get();
			return $data->result();
		}
		
		public function delete_hwn($kode){
			$data = array (
				'id_hewan' => $kode	
			);
			$remsek = $this->db->delete('hewan', $data);
			return $remsek;
		}
		
		function edit_hwn($value ,$where)
		{
			$this->db->where($where);
			$even = $this->db->update('hewan',$value);
			return $even;
		} 
}
?>