<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');
	$this->load->model('Model_admin', 'admin');
		$this->load->model('Model_siswa', 'siswa');
	$this->load->model('Model_web', 'web');
		
	// Cek login kecuali di method log_in
		if($this->session->userdata('id_admin') == FALSE && $this->uri->segment(2) != 'log_in'){
			redirect('panel_admin/log_in');
	}
	}

	public function index()
	{
		redirect('panel_admin');
	}

	public function panel_admin()
	{
	$data['judul_web'] 	= "DASHBOARD ADMIN";
	$data['web'] 		= $this->web->get_data();
	$data['jml_siswa'] 	= $this->admin->count_siswa();
	$data['jml_verif'] 	= $this->admin->count_verif();
	$data['jml_lulus'] 	= $this->admin->count_lulus();
	$data['jml_tolak'] 	= $this->admin->count_tolak();
		
		$this->load->view('admin/header', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/footer');
	}

	public function log_in()
	{
	// kalau udah login langsung ke dashboard
		if($this->session->userdata('id_admin') != FALSE){ 
			redirect('panel_admin'); 
		}

		$this->load->view('admin/login/header_login.php');
		$this->load->view('admin/login/login.php'); // file ada di /views/admin/login.php
	$this->load->view('admin/login/footer.php');

		if($this->input->post('btnlogin')){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->admin->auth($username, $password);

			if($cek['sum'] > 0){
				$this->session->set_userdata('id_admin', $cek['res']->username);
				$this->session->set_userdata('administrator', $cek['res']->level);
				$this->session->set_userdata('nama_admin', $cek['res']->nama);
				redirect('panel_admin');
			}else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger">Username atau Password Salah!</div>');
				redirect('panel_admin/log_in');
			}
	}
	}

	public function log_out()
	{
		$this->session->sess_destroy();
		redirect('panel_admin/log_in');
	}

	// MENU ADMIN
	public function verifikasi()
	{
		$data['judul_web'] = "VERIFIKASI DATA SISWA";
		$data['web'] = $this->web->get_data();
		$data['siswa'] = $this->admin->get_siswa_belum_verif();
		
	$this->load->view('admin/header', $data);
	$this->load->view('admin/verifikasi', $data);
	$this->load->view('admin/footer');
	}

	public function data_siswa()
	{
	$data['judul_web'] = "DATA SISWA";
	$data['web'] = $this->web->get_data();
		$data['siswa'] = $this->admin->get_all_siswa();
		
		$this->load->view('admin/header', $data);
	$this->load->view('admin/data_siswa', $data);
	$this->load->view('admin/footer');
	}

	public function edit($id)
	{
	$data['judul_web'] = "EDIT DATA SISWA";
	$data['web'] = $this->web->get_data();
		$data['user'] = $this->admin->get_siswa_by_id($id);
		
		$this->load->view('admin/header', $data);
		$this->load->view('admin/edit', $data);
		$this->load->view('admin/footer');

		if($this->input->post('btnupdate')){
			$this->admin->update_siswa($id);
			$this->session->set_flashdata('msg', 'Data berhasil diupdate');
			redirect('panel_admin/data_siswa');
		}
	}

	public function hapus($id)
	{
	$this->admin->hapus_siswa($id);
		$this->session->set_flashdata('msg', 'Data berhasil dihapus');
		redirect('panel_admin/data_siswa');
	}

	public function set_pengumuman()
	{
		$data['judul_web'] = "SETTING PENGUMUMAN";
	$data['web'] = $this->web->get_data();
		
	$this->load->view('admin/header', $data);
	$this->load->view('admin/set_pengumuman', $data);
	$this->load->view('admin/footer');

		if($this->input->post('btnsimpan')){
			$this->web->update_pengumuman();
			$this->session->set_flashdata('msg', 'Pengumuman berhasil diupdate');
			redirect('panel_admin/set_pengumuman');
		}
	}

	public function statistik()
	{
		$data['judul_web'] = "STATISTIK PENDAFTAR";
		$data['web'] = $this->web->get_data();
		$data['statistik'] = $this->admin->get_statistik();
		
		$this->load->view('admin/header', $data);
		$this->load->view('admin/statistik', $data);
	$this->load->view('admin/footer');
	}

	public function profile()
	{
	$data['judul_web'] = "PROFILE ADMIN";
	$data['web'] = $this->web->get_data();
		$data['admin'] = $this->admin->get_admin($this->session->userdata('id_admin'));
		
		$this->load->view('admin/header', $data);
	$this->load->view('admin/profile', $data);
	$this->load->view('admin/footer');
	}

	public function ubah_pass()
	{
	$data['judul_web'] = "UBAH PASSWORD";
	$data['web'] = $this->web->get_data();
		
	$this->load->view('admin/header', $data);
		$this->load->view('admin/ubah_pass', $data);
	$this->load->view('admin/footer');

		if($this->input->post('btnsimpan')){
			$this->admin->ubah_password();
			$this->session->set_flashdata('msg', 'Password berhasil diubah');
			redirect('panel_admin/ubah_pass');
		}
	}

}