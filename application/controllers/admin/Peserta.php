<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->model('M_peserta');
        $this->load->model('M_chain');
    }

	public function index(){
		if($this->M_admin->logged_id()){
			$data['data_peserta'] 	= $this->M_peserta->select_all();
			$data['page'] 			= "peserta";
			$data['judul'] 			= "Data Peserta";
			$this->template->views('peserta/data_peserta', $data);

		}else{
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("admin/login");
		}
	}

	public function insertPage(){
		if($this->M_admin->logged_id()){

			$data['page'] 					= "peserta";
			$data['judul'] 					= "Input Peserta";
			$data['provinsi']				= $this->M_chain->get_provinsi();
			$data['kota']					= $this->M_chain->get_kota();
			$data['provinsi_selected']		= "";
			$data['kota_selected']			= "";
			$data['provinsiOrtu']			= $this->M_chain->get_provinsi();
			$data['kotaOrtu']				= $this->M_chain->get_kota();
			$data['provinsiOrtu_selected']	= "";
			$data['kotaOrtu_selected']		= "";
			$data['fakultas']				= $this->M_chain->get_fakultas();
			$data['jurusan']				= $this->M_chain->get_jurusan();
			$data['fakultas_selected']		= "";
			$data['jurusan_selected']		= "";

			$this->template->views('peserta/tambah_peserta', $data);
		}else{
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("admin/login");
		}
	}

	public function detailPage(){
		if($this->M_admin->logged_id()){
			$data['page'] 			= "peserta";
			$data['judul']			= "Informasi Peserta";
			$this->template->views('peserta/detail_peserta', $data);
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
