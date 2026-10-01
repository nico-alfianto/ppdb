<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Panel_siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	$this->load->library('session');
		$this->load->database();
		$this->load->model('Model_siswa', 'siswa');
	$this->load->helper(array('url', 'form'));

		if ($this->session->userdata('no_pendaftaran') == NULL) {
			redirect('logcs');
		}
	}

	public function index()
	{
	$data = array(
			'user'	=> $this->siswa->base_biodata($this->session->userdata('no_pendaftaran')),
			'judul_web'	=> "HOME"
	);
	$this->load->view('siswa/header', $data);
	$this->load->view('siswa/dashboard', $data);
	$this->load->view('siswa/footer');
	}

	public function pengumuman()
	{
	$data = array(
			'user'	=> $this->siswa->base_biodata($this->session->userdata('no_pendaftaran')),
			'judul_web'	=> "PENGUMUMAN"
	);
	$this->load->view('siswa/header', $data);
	$this->load->view('siswa/pengumuman', $data);
	$this->load->view('siswa/footer');
	}

	public function biodata()
	{
	$sess = $this->session->userdata('no_pendaftaran');
	$data = array(
			'user'		=> $this->siswa->base_biodata($sess),
			'judul_web'	=> "BIODATA"
	);
	$this->load->view('siswa/header', $data);
	$this->load->view('siswa/biodata', $data);
	$this->load->view('siswa/footer');
	}

	public function cetak()
	{
	$sess 		= $this->session->userdata('no_pendaftaran');
	$base_bio 	= $this->siswa->base_biodata($sess);
		$data = array(
			'user'			=> $base_bio,
			'judul_web'		=> ucwords($base_bio->no_pendaftaran) . '-' . ucwords($base_bio->nama_lengkap),
			'thn_ppdb'	=> date('Y', strtotime($base_bio->tgl_siswa))
	);
	$this->load->view('siswa/cetak', $data);
	}

	public function logout()
	{
	$this->session->sess_destroy();
		redirect('logcs');
	}
} // <-- INI YG KURANG TADI