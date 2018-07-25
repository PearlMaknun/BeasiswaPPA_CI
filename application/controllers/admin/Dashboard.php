<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->model('M_peserta');
        
    }

	public function index()
	{
		//$nama 		=  $this->session->userdata('user_name');

		if($this->M_admin->logged_id()){
			$data['jml_peserta'] 	= $this->M_peserta->total_rows();
			$data['page'] 			= "dashboard";
			$data['judul']			= "Dashboard";
			$this->template->views('admin/dashboard', $data);

		}else{
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("admin/login");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}

}
