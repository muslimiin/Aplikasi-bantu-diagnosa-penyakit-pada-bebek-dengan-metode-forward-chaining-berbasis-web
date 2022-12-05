<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentangpage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
		$this->load->model('Tentang_model',"m_tentang");
	}

	public function index()
	{
		$data['title']= "Tentang Kami";
		$data['berita']= $this->m_tentang->getAllBerita();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('tentangpage');
		$this->load->view('templates/footer');
	}

	public function baca($id)
	{
		$data['berita'] = $this->m_tentang->getBeritaById($id);
		$data['title']= "Baca Info Terkini";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('detailberitapage');
		$this->load->view('templates/footer');
	}

	public function kirim(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$saran_keluhan = $this->input->post('saran_keluhan');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim');
		$this->form_validation->set_rules('saran_keluhan', 'Saran Ataupun Keluhan', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak berhasil di kirimkan!</div>');
            redirect('tentangpage/index');
        } else {
			$id= $this->m_tentang->countTentang()+1;
			$data= [
				"id"=>$id,
				"nama"=>$nama,
				"alamat"=>$alamat,
				"no_hp"=>$no_hp,
				"saran_keluhan"=>$saran_keluhan
			];
            $this->m_tentang->addTentang($data);
			
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di kirimkan!</div>');
            redirect('tentangpage/index/');
        }
	}
}