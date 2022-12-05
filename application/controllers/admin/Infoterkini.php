<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infoterkini extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
		$this->load->model('Tentang_model',"m_tentang");
	}
	
	public function index()
	{
		$data['title'] = "Info Terkini";
		$data['contentTitle'] = "Data Info Terkini";
		$data['berita'] = $this->m_tentang->getAllBerita();
		$this->load->view('admin/infoterkini/index',$data);
	}

	public function detail($id){
		$berita = $this->m_tentang->getBeritaById($id);
		$data['judul'] = $berita['judul'];
		$data['kategori'] = $berita['kategori'];
		$data['tglterbit'] = $berita['tglterbit'];
		$data['isiberita'] = $berita['isiberita'];
		$data['title'] = "Detail Info Terkini";
		$this->load->view('admin/infoterkini/detail',$data);
	}

	public function create(){
		$data['title'] = "Tambah Info Terkini";
		$data['contentTitle'] = "Data Info Terkini";
        $this->load->view('admin/infoterkini/create',$data);
	}

	public function store(){
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$isiberita = $this->input->post('isiberita');

		$this->form_validation->set_rules('judul', 'Judul', 'required|trim|is_unique[penyakit.nama]');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
		$this->form_validation->set_rules('isiberita', 'Isi Berita', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Info Terkini tidak berhasil di tambahkan!</div>');
            redirect('admin/infoterkini/create');
        } else {
            // benar
			$id= $this->m_tentang->countBerita()+1;

			$data= [
				"id"=>$id,
				"judul"=>$judul,
				"kategori"=>$kategori,
				"isiberita"=>$isiberita

			];
            $this->m_tentang->addBerita($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Info Terkini berhasil di tambahkan!</div>');
            redirect('admin/infoterkini/');
        }
	}


	public function edit($id){
		$data['title'] = "Edit Info Terkini";
		$data['contentTitle'] = "Data Info Terkini";
		$data['berita'] = $this->m_tentang->getBeritaById($id);
		$this->load->view('admin/infoterkini/edit',$data);
	}

	public function update($id){
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$isiberita = $this->input->post('isiberita');
		$this->form_validation->set_rules('judul', 'Judul', 'required|trim');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
		$this->form_validation->set_rules('isiberita', 'Isi Berita', 'required|trim');
		$data= [
			"id"=>$id,
			"judul"=>$judul,
			"kategori"=>$kategori,
			"isiberita"=>$isiberita
		];
        if ($this->form_validation->run()) {
            $this->m_tentang->updateBerita($id,$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Info Terkini berhasil di Edit!</div>');
            redirect('admin/infoterkini');
        }else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Info Terkini tidak berhasil di Edit!</div>');
            redirect('admin/infoterkini/edit');
		}
	}

	public function destroy($id){
		$this->m_tentang->deleteBerita($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Info Terkini berhasil di Hapus!</div>');
        redirect('admin/infoterkini');
	}
}