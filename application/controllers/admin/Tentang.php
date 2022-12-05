<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tentang_model','m_tentang');
	}
	
	public function index()
	{
		$data['title'] = "Saran & Keluhan";
		$data['contentTitle'] = "Saran & Keluhan Masyarakat";
		$data['tentangs'] = $this->m_tentang->getAllTentang();
		$this->load->view('admin/tentang/index',$data);
	}

	public function destroy($id){
		$this->m_tentang->deleteTentang($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Saran & Keluhan berhasil di Hapus!</div>');
        redirect('admin/tentang');
	}
}