<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengetahuan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gejala_model',"m_gejala");
        $this->load->model('Penyakit_model',"m_penyakit");
        $this->load->model('Pengetahuan_model',"m_pengetahuan");
	}

	public function index()
	{
		$data['title'] = "Basis Pengetahuan";
		$data['contentTitle'] = "Basis Pengetahuan";
        $penyakits = $this->m_penyakit->getAllPenyakit();
        $gejalas = $this->m_gejala->getAllGejala();
        $pengetahuans = $this->m_pengetahuan->getPengetahuanPenyakit();

        $data['pengetahuans'] = $pengetahuans;
        $data['gejalas'] = $gejalas;
        $data['penyakits'] = $penyakits;
		$this->load->view('admin/pengetahuan/index',$data);
	}

	public function edit($id){
        $data['title'] = "Edit Basis Pengetahuan";
		$data['contentTitle'] = "Data Pengetahuan / Rule";
		$data['pengetahuan'] = $this->m_pengetahuan->getPengetahuanPenyakitId($id);
        $data['gejalas'] = $this->m_gejala->getAllGejala();
		$this->load->view('admin/pengetahuan/edit',$data);

	}

	public function update($id){
        $gejalas = $this->m_gejala->getAllGejala();
        $gejala = [];
        for($i = 0 ; $i<count($gejalas);$i++) {
            $gejala[$gejalas[$i]['id']]=$this->input->post($gejalas[$i]['id']);
        }
        $this->m_pengetahuan->updatePengetahuan($id,$gejala);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Rule berhasil di Edit!</div>');
        redirect('admin/pengetahuan');
	}
}