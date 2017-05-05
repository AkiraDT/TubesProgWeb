<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	
	public function validation_check(){
		$this->form_validation->set_rules('nim','Nim','required|numeric');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('jurusan','Jurusan','required');
		
		if ($this->form_validation->run() != false){
			$nim     = $_POST['nim'];
			$nama    = $_POST['nama'];
			$email   = $_POST['email'];
			$jurusan = $_POST['jurusan'];
			
			$data = array(
				'nim' => $nim,
				'nama_mhs' => $nama,
				'email' => $email,
				'jurusan' => $jurusan
			);
			
			$exe = $this->models->insert_mahasiswa($data);		
			if($exe){
				redirect('Pages/view_mhs');
			}
			else {
				echo "Gagal input data";
			}
		}
		else {
			$this->load->view('index');
		}
	}
	
	public function view_mhs(){
		$data = $this->models->get_mahasiswa();
		$this->load->view('view_mhs', array('data' => $data));
	}
	
	
	public function delete_mahasiswa($nim){
		$del = $this->models->delete_mhs($nim);
		if($del){
			redirect('Pages/view_mhs');
		} else {
			echo "gagal";
		}
	}
	
	public function edit_mahasiswa($nim){
		$data['nim'] = $nim;
		$this->load->view('form_edit', $data);
	}
	
	public function action_edit_mhs($nim){
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$jurusan = $_POST['jurusan'];
		$where['nim'] = $nim;
		
		$value = array(
			'nama_mhs' => $nama,
			'email' => $email,
			'jurusan' => $jurusan
		);
		
		$update = $this->models->edit_mahasiswa($value, $where);
		if($update){
			redirect('Pages/view_mhs');
		} else {
			echo "Gagal Mengupdate data";
		}
	}
	
	public function activity(){
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_upload', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('v_upload_sukses', $data);
		}
	}
	
}
