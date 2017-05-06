<?php

	class Kandang extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('kandang_m');
			$this->load->helper(array('form', 'url'));
		}
		
		/*public function insert(){
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
		}*/
		
		public function view()
		{
			$data['kandang'] = $this->kandang_m->view();
			$this->load->view('view_kand',$data);
		}
		
		public function delete_kandang($kode){
			$del = $this->kandang_m->delete_kand($kode);
			if($del){
				redirect('kandang/view');
			} else {
				echo "gagal";
			}
		}
		
	}