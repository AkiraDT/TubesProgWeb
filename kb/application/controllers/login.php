<?php

class login extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('m_admin');
	}
	
	public function index(){
		$this->load->view('form_login');
	}
	
	public function utama(){
		$this->load->view('dashboard');
	}
	
	public function loginAdmin(){
		$id = $this->input->post('user');
		$password = $this->input->post('pass');

		$where = array(
			'username' => $id,
			'passuser' => ($password)
			);
		$cek = $this->m_admin->getLogin("login",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'username' => $id,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			$this->load->view('dashboard');
 
		}else{
			$this->load->view('form_login');
		}
	}
	
	function logoutAdmin(){
		$this->session->sess_destroy();
		$this->load->view('form_login');
	}
}



