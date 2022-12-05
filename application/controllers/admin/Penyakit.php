<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
		$this->load->model('Penyakit_model',"m_penyakit");
	}
	
	public function index()
	{
		$data['title'] = "Penyakit";
		$data['contentTitle'] = "Data Penyakit / Solusi";
		$data['penyakits'] = $this->m_penyakit->getAllPenyakit();
		$this->load->view('admin/penyakit/index',$data);
	}

	public function create(){
		$data['title'] = "Tambah Penyakit";
		$data['contentTitle'] = "Data Penyakit";
        $this->load->view('admin/penyakit/create',$data);
	}

	public function store(){
		$nama = $this->input->post('nama_penyakit');
		$penyebab = $this->input->post('penyebab_penyakit');
		$solusi = $this->input->post('solusi_penyakit');
		$this->form_validation->set_rules('nama_penyakit', 'Nama Penyakit', 'required|trim|is_unique[penyakit.nama]');
		$this->form_validation->set_rules('penyebab_penyakit', 'Penyebab Penyakit', 'required|trim');
		$this->form_validation->set_rules('solusi_penyakit', 'Solusi Penyakit', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Penyakit tidak berhasil di tambahkan!</div>');
            redirect('admin/penyakit/create');
        } else {
            // benar
			$id= $this->m_penyakit->countPenyakit()+1;
			$id = "P".$id;

			$data= [
				"id"=>$id,
				"nama"=>$nama,
				"penyebab"=>$penyebab,
				"solusi"=>$solusi
			];
            $this->m_penyakit->addPenyakit($data);
			$this->db->insert("rule",['id'=>$id]);
			
			
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penyakit berhasil di tambahkan!</div>');
            redirect('admin/penyakit/');
        }
	}

	public function show($id){

	}

	public function edit($id){
		$data['title'] = "Edit Penyakit";
		$data['contentTitle'] = "Data Penyakit";
		$data['penyakit'] = $this->m_penyakit->getPenyakitById($id);
		$this->load->view('admin/penyakit/edit',$data);
	}

	public function update($id){
		$nama = $this->input->post('nama_penyakit');
		$penyebab = $this->input->post('penyebab_penyakit');
		$solusi = $this->input->post('solusi_penyakit');
		$this->form_validation->set_rules('nama_penyakit', 'Nama Penyakit', 'required|trim');
		$this->form_validation->set_rules('penyebab_penyakit', 'Penyebab Penyakit', 'required|trim');
		$this->form_validation->set_rules('solusi_penyakit', 'Solusi Penyakit', 'required|trim');
		$data= [
			"id"=>$id,
			"nama"=>$nama,
			"penyebab"=>$penyebab,
			"solusi"=>$solusi
		];
        if ($this->form_validation->run()) {
            $this->m_penyakit->updatePenyakit($id,$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penyakit berhasil di Edit!</div>');
            redirect('admin/penyakit');
        }else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Penyakit tidak berhasil di Edit!</div>');
            redirect('admin/gejala/edit');
		}
	}

	public function destroy($id){
		$this->m_penyakit->deletePenyakit($id);
		$this->db->delete('rule', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Penyakit berhasil di Hapus!</div>');
        redirect('admin/penyakit');
	}
}