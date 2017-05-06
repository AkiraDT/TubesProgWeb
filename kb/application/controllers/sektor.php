<?php

	class Sektor extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('sektor_m');
			$this->load->helper(array('form', 'url'));
		}
		
		public function utama(){
			$this->load->view('add_sektor');
		}
		
		public function insert(){
			$kode = $this->input->post('ksektor');
			$namasek = $this->input->post('namsektor');
			$koorx = $this->input->post('korx');
			$koory = $this->input->post('kory');
			
			
			$value = array(
				'kd_sektor' => $kode,
				'nama_sektor' => $namasek,
				'koordinatx_sektor' => $koorx,
				'koordinaty_sektor' => $koory
				
			);
			
			$insert = $this->sektor_m->insert($value);
			if($insert){
				redirect(base_url('index.php/Sektor/view'));
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
			$data['sektor'] = $this->sektor_m->view();
			$this->load->view('view_skt',$data);
		}
		
		public function delete_sektor($kode){
			$del = $this->sektor_m->delete_skt($kode);
			if($del){
				redirect('sektor/view');
			} else {
				echo "gagal";
			}
		}
		
	}
