<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
		// $this->load->model("Pengetahuan_model",'m_pengetahuan');
		$this->load->model('Gejala_model',"m_gejala");
	}
	
	public function index()
	{
		$data['title'] = "Gejala";
		$data['contentTitle'] = "Data Gejala / Kriteria";
		$data['gejalas']= $this->m_gejala->getAllGejala();
		$this->load->view('admin/gejala/index',$data);
	}

	public function create(){
		$data['title'] = "Tambah Gejala";
		$data['contentTitle'] = "Data gejala";
		$this->load->view('admin/gejala/create',$data);
	}

	public function store(){
		$nama = $this->input->post('nama_gejala');
		$this->form_validation->set_rules('nama_gejala', 'Nama Gejala', 'required|trim|is_unique[gejala.nama]');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gejala tidak berhasil di tambahkan!</div>');
            redirect('admin/gejala/create');
        } else {
            // benar
			$id= $this->m_gejala->countGejala()+1;
			if($id < 10){
				$id = "G00".$id;
			}else{
				$id = "G0".$id;
			}
			$data= [
				"id"=>$id,
				"nama"=>$nama
			];
            $this->m_gejala->addGejala($data);
			$fields = array(
				$id => array('type' => 'int','default'=>0)
			);
			$this->dbforge->add_column('rule', $fields);
			
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gejala berhasil di tambahkan!</div>');
            redirect('admin/gejala/');
        }
	}

	public function show($id){

	}

	public function edit($id){
		$data['title'] = "Edit Gejala";
		$data['contentTitle'] = "Data gejala";
		$data['gejala'] = $this->m_gejala->getGejalaById($id);
		$this->load->view('admin/gejala/edit',$data);
	}

	public function update($id){
		$nama = $this->input->post('nama_gejala');
		$this->form_validation->set_rules('nama_gejala', 'Nama Gejala', 'required|trim');
		$data = [
			"nama"=>$nama
		];
        if ($this->form_validation->run()) {
            $this->m_gejala->updateGejala($id,$data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gejala berhasil di Edit!</div>');
            redirect('admin/gejala');
        }else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gejala tidak berhasil di Edit!</div>');
            redirect('admin/gejala/edit');
		}
	}

	public function destroy($id){
		$this->m_gejala->deleteGejala($id);
		$this->dbforge->drop_column('rule', $id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gejala berhasil di Hapus!</div>');
        redirect('admin/gejala');
	}

}