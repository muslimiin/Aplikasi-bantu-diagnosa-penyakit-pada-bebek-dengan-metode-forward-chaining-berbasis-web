<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakitpage extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Penyakit_model",'m_penyakit');
	}

	public function index()
	{
		$data['title']= "Data Penyakit";
		$data['penyakits']= $this->m_penyakit->getAllPenyakit();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('penyakitpage');
		$this->load->view('templates/footer');
	}

	// public function detailPenyakit($id){
	// 	$penyakit = $this->m_penyakit->getPenyakitById($id);
	// 	$data['id'] = $penyakit['id'];
	// 	$data['nama'] = $penyakit['nama'];
	// 	$data['penyebab'] = $penyakit['penyebab'];
	// 	$data['solusi'] = $penyakit['solusi'];
	// 	$data['title']= "Detail Data Penyakit";
	// 	$this->load->view('templates/header',$data);
	// 	$this->load->view('templates/navbar');
	// 	$this->load->view('detailpenyakitpage');
	// 	$this->load->view('templates/footer');
	// }
}