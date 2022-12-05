<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Gejala_model','m_gejala');
		$this->load->model('Penyakit_model','m_penyakit');
		$this->load->model('Pengetahuan_model','m_pengetahuan');
		$this->load->model('User_model','m_user');
		$this->load->model('Tentang_model','m_tentang');
	}
	
	public function index(){
		$data['title'] = "Dashboard";
		$data['contentTitle'] = "Dashboard";
		$data['gejala']= $this->m_gejala->countGejala();
		$data['penyakit']= $this->m_penyakit->countPenyakit();
		$data['userjml'] = $this->m_user->countUser();
		$data['pesan'] = $this->m_tentang->countTentang();
		$data['users'] = $this->m_user->getUserPenyakit();
		$this->load->view('admin/dashboard/index',$data);
	}
}