<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosapage extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Penyakit_model","m_penyakit");
		$this->load->model('Pengetahuan_model',"m_pengetahuan");
		$this->load->model('Gejala_model',"m_gejala");
	}

	public function index(){
		$data['title']= "Halaman Diagnosa";
		$data['gejalas'] = $this->m_gejala->getAllGejala();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('diagnosapage');
		$this->load->view('templates/footer');
	}

	public function prosesKonsul(){
		$nama = $this->input->post('nama');
		$no_telp = $this->input->post('no_telp');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('no_telp', 'Nomor HP', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Diagnosa Gagal!</div>');
	        redirect('diagnosapage');
	    } 

		$gejalas = $this->m_gejala->getAllGejala();
		$data=[
			"nama" => $nama,
			"no_telp" =>$no_telp
		];
		
        $gejala_user = [];
		$index = 0;
		$dataCheck = [];
        for($i = 0 ; $i<count($gejalas);$i++) {
			if($this->input->post($gejalas[$i]['id']) != null){
				$gejala_user[$index]=$gejalas[$i]['id'];
				$dataCheck[$gejalas[$i]['id']] = 1;
				$index++;
			}			
        }
		
		$rules = $this->m_pengetahuan->getAllPengetahuan();
		$rule=array();
		$status =false;
		for($j=0 ; $j<count($rules);$j++){
			for($i = 0 ; $i<count($gejalas);$i++){
				if($rules[$j][$gejalas[$i]['id']] == 1){
					$rule[$j][] = $gejalas[$i]['id'];
				}
			}
		}
		if($gejala_user == ""){
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Diagnosa Gagal!</div>');
	        redirect('diagnosapage');
		}else{
			for($i=0;$i<count($rule); $i++){
				if ($gejala_user==$rule[$i]) {
					$status =true;
				}else{
					$intersect = array_intersect($rule[$i],$gejala_user);
                    $similarity = count($intersect);
                    $rule_similarity[$i] = array('nilai' => $similarity, 'no' => $i);
				}
			}
			$most_similar = (max($rule_similarity));                  
		}
		for($i =0; $i<count($rule);$i++){
			if($gejala_user == $rule[$i]){
				$status = true;		
			}			
		}
		for ($i=0; $i < count($gejala_user); $i++) { 
			$dataGejala[$i] = $this->m_gejala->getGejalaById($gejala_user[$i]);
		}
		
		if($status){
			$id = $this->m_pengetahuan->getPenyakitbyParam($dataCheck);
			$data['penyakit'] = $this->m_penyakit->getPenyakitById($id['id']);
			$data['gejala']= $dataGejala;
			$data['title']= "Hasil Diagnosa";

			$insert_id=$this->m_gejala->addUser([
				'nama'=>$nama,
				'no_telp'=>$no_telp,
				'analisa'=>$id['id']
			]);
				
			foreach ($dataGejala as $gejala) {
				$this->m_gejala->addGejalaUser([
					'id_user'=>$insert_id,
					'gejala'=>$gejala['id']
				]);
			}
			$this->load->view('templates/header',$data);
			$this->load->view('templates/navbar');
			$this->load->view('hasilpage');
			$this->load->view('templates/footer');
		}
		else{
			$id = $this->m_pengetahuan->getPengetahuanByNo($most_similar['no']+1);
			$data['penyakit'] = $this->m_penyakit->getPenyakitById($id['id']);
			$data['gejala']= $dataGejala;
			$data['title']= "Hasil Diagnosa";

			$insert_id=$this->m_gejala->addUser([
				'nama'=>$nama,
				'no_telp'=>$no_telp,
				'analisa'=>$id['id']
			]);
				
			foreach ($dataGejala as $gejala) {
				$this->m_gejala->addGejalaUser([
					'id_user'=>$insert_id,
					'gejala'=>$gejala['id']
				]);
			}
			$this->load->view('templates/header',$data);
			$this->load->view('templates/navbar');
			$this->load->view('hasilpage');
			$this->load->view('templates/footer');
		}
	}
}