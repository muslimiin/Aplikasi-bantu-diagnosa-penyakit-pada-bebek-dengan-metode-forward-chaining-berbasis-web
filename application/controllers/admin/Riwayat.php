<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model','m_user');
		$this->load->model('Gejala_model',"m_gejala");
		$this->load->model('Penyakit_model',"m_penyakit");
	}
	
	public function index()
	{
		// var_dump($this->m_user->getUserPenyakit());
		// die();
		$data['title'] = "Riwayat Diagnosa";
		$data['contentTitle'] = "Riwayat Pengguna";
		$data['users'] = $this->m_user->getUserPenyakit();
		$this->load->view('admin/riwayat/index',$data);
	}

	public function detail($id){
		$user = $this->m_user->getUserById($id);
		$data['tanggal'] = date($user['tgldiagnosa']);;
		$data['nama'] = $user['nama'];
		$data['no_telp'] = $user['no_telp'];
		$gejala = $this->db->get_where('gejala_user',['id_user' => $id])->result_array();
		foreach($gejala as $i =>$g){
			$gejala[$i] = $this->m_gejala->getGejalaById($g['gejala']);
		}
		$data['gejala'] = $gejala;
		$data['penyakit'] = $this->m_penyakit->getPenyakitById($user['analisa']);
		$data['title'] = "Detail Riwayat Diagnosa";
		$this->load->view('admin/riwayat/detail',$data);
	}

	public function destroy($id){
		$this->m_user->deleteGejalaUser($id);
		$this->m_user->deleteUser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Riwayat berhasil di Hapus!</div>');
        redirect('admin/riwayat');
	}
}