<?php

	class Fasilitas extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('fasilitas_m');
			$this->load->helper(array('form', 'url'));
		}
		
		
		
		public function view()
		{
			$data ['fasili'] = $this->fasilitas_m->view();
			$this->load->view('view_fas',$data);
		}
		
		
		
	}