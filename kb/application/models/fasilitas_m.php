<?php
	class fasilitas_m extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		
		
		
		public function view(){
			$this->db->select('fasilitas.nama_fasilitas,
			sektor.nama_sektor')->join('sektor',
			'fasilitas.kd_sektor=sektor.kd_sektor');
			//return $this->db->get('fasilitas')->result();
			$data = $this->db->get('fasilitas');
			return $data->result();
		}
		/*SELECT fasilitas.nama_fasilitas, sektor.nama_sektor
FROM fasilitas
JOIN sektor ON fasilitas.kd_sektor = sektor.kd_sektor*/
		
	}
?>