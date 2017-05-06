<?php

	class Hewan extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('hewan_m');
			$this->load->helper(array('form', 'url'));
		}
		
		public function utama(){
			$this->load->view('dashboard');
		}
		
		public function insert(){
			$kode = $this->input->post('khewan');
			$nama_h = $this->input->post('namhewan');
			$spesies = $this->input->post('speshewan');
			$kelamin = $this->input->post('kelhewan');
			$umur = $this->input->post('umhewan');
			$kodeHabitat = $this->input->post('kodhabitat');
			
			$value = array(
				'id_hewan' => $kode,
				'nama_hewan' => $nama_h,
				'spesies_hewan' => $spesies,
				'jk_hewan' => $kelamin,
				'umur_hewan' => $umur,
				'id_habitat' => $kodeHabitat
				
			);
			
			$insert = $this->hewan_m->insert($value);
			if($insert){
				redirect(base_url('index.php/hewan/view'));
			}else{
				echo"
					<script>
						alert('gagal');
					</script>
				";
			}
		}
		
		public function view()
		{
			$data['hewan'] = $this->hewan_m->view();
			$this->load->view('view_hwn',$data);
		}
		
		public function delete_hewan($kode){
			$del = $this->hewan_m->delete_hwn($kode);
			if($del){
				redirect('hewan/view');
			} else {
				echo "gagal";
			}
		}
		
		public function edit_hwn($kode)
		{
			$data['kode'] = $kode;
			$this->load->view('edit_hwn',$data);
		}
		
		public function update_hwn($kode)
		{
			$nama_h = $this->input->post('namhewan');
			$spesies = $this->input->post('speshewan');
			$kelamin = $this->input->post('kelhewan');
			$umur = $this->input->post('umhewan');
			$kodeHabitat = $this->input->post('kodhabitat');
			$where['id_hewan'] = $kode;
			$value = array(
				'nama_hewan' => $nama_h,
				'spesies_hewan' => $spesies,
				'jk_hewan' => $kelamin,
				'umur_hewan' => $umur,
				'id_habitat' => $kodeHabitat
			);
			$update = $this->hewan_m->edit_hwn($value,$where);
			if($update){
				redirect('hewan/view');
			}
			else{
				echo "gagal";
			}
		}
		
	}