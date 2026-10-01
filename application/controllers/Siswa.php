<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->model('SiswaModel');
	$this->load->model('Model_admin', 'admin');
	$this->load->library('session');
  }
  
  public function index(){
    $sess = $this->session->userdata('id_admin');
	if($sess == NULL) redirect('panel_admin/log_in');
	
    $data['siswa'] = $this->SiswaModel->view();
    $data['user'] = $this->admin->base('bio', $sess);
    $data['judul_web'] = "Export Data Siswa";
    $this->load->view('admin/header', $data);
    $this->load->view('admin/view', $data);
    $this->load->view('admin/footer');
  }
  
  public function export(){
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
    $excel = new PHPExcel();
    $excel->getProperties()->setCreator('PPDB')->setTitle("Data Siswa");
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "DAFTAR PENERIMAAN SISWA BARU");
    $excel->getActiveSheet()->mergeCells('A1:BF1');
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
    
    // header dari B3 - BF3
    $headers = ['NO','NISN','NIK','NAMA','JK','TEMPAT LAHIR','TGL LAHIR','AGAMA','STATUS KELUARGA','ANAK KE','JML SAUDARA','HOBI','CITA','PAUD','TK','NO HP','JENIS TINGGAL','ALAMAT','DESA','KECAMATAN','KABUPATEN','PROVINSI','KODE POS','JARAK','TRANSPORTASI','NO KK','KEPALA KELUARGA','NAMA AYAH','TH LAHIR AYAH','STATUS AYAH','NIK AYAH','PENDIDIKAN AYAH','PEKERJAAN AYAH','NAMA IBU','TH LAHIR IBU','STATUS IBU','NIK IBU','PENDIDIKAN IBU','PEKERJAAN IBU','NAMA WALI','TH LAHIR WALI','NIK WALI','PENDIDIKAN WALI','PEKERJAAN WALI','PENGHASILAN AYAH','PENGHASILAN IBU','PENGHASILAN WALI','NO KKS','NO PKH','NO KIP','NO HP ORTU','NAMA SEKOLAH','JENJANG SEKOLAH','STATUS SEKOLAH','NPSN SEKOLAH','LOKASI SEKOLAH','STATUS PENERIMAAN','JURUSAN'];
    $col = 'A';
    foreach($headers as $h){
        $excel->setActiveSheetIndex(0)->setCellValue($col.'3', $h);
        $col++;
    }

    $siswa = $this->SiswaModel->view();
    $no = 1; $numrow = 4;
    foreach($siswa as $data){
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no++);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nisn);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nik);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->nama_lengkap);
      // ... dst sampe BF. Kamu bisa lanjutin sendiri atau pake punya kamu yg lama
      $numrow++;
    }

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="Data_Siswa.xlsx"');
    header('Cache-Control: max-age=0');
    $writer = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $writer->save('php://output');
  }
}