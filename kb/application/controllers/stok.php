<?php

	class Stok extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('stok_m');
			$this->load->helper(array('form', 'url'));
		}
		
		public function view()
		{
			$data['stok_makanan'] = $this->stok_m->view();
			$this->load->view('view_stok',$data);
		}
		
		public function delete_stok($kode){
			$del = $this->stok_m->delete_mkn($kode);
			if($del){
				redirect('stok/view');
			} else {
				echo "gagal";
			}
		}
		
		
	}