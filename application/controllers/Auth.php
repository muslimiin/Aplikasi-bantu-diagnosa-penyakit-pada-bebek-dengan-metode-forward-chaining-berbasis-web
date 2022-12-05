<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
	public function index()
	{
		if ($this->session->userdata('status') === "login") {
			redirect(base_url("admin/dashboard"));
		}
		$data['title']= "Halaman Login";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('auth/login');
		$this->load->view('templates/footer');
	}

    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('status');
        $this->session->set_flashdata('message3', '<div class="alert alert-success" role="alert">Anda berhasil logout!</div>');
        redirect('auth');
    }

	public function prosesLogin(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if($email == "admin@gmail.com"){
			if($password == "admin"){
				$data_session = array(
					'email'		=> $email,
					'status'	=> "login",
				);
				$this->session->set_userdata($data_session);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Berhasil Login!</div>');
            redirect('admin/dashboard');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password yang anda masukkan salah!</div>');
            redirect('auth');
			}
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email dan Password yang anda masukkan salah!</div>');
            redirect('auth');
		}
	}
}