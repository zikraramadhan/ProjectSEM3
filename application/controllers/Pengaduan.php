<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class Pengaduan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pengaduan_model');
    $this->load->model('user_model');
  }

  public function index()
  {
    $data['pengaduan'] = $this->Pengaduan_model->get(); 
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("layout/header", $data);
    $this->load->view("pengaduan/riwayat",$data);
    $this->load->view("layout/footer", $data);
  }

  public function hapus($id){
    
  }
//   public function form()
//   {
//     $data['pengaduan'] = $this->Pengaduan_model->get(); 
//     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
//     $this->load->view("layout/header", $data);
//     $this->load->view("pengaduan/form_pengaduan",$data);
//     $this->load->view("layout/footer", $data);
//   }
  public function buat_pengaduan()
{
    $data = [
        'nama' => $this->input->post('nama'),
        'judul_laporan' => $this->input->post('judul_laporan'),
        'no_hp' => $this->input->post('no_hp'),
        'lokasi' => $this->input->post('lokasi'),
        'tanggal_kejadian' => $this->input->post('tanggal_kejadian'),
        'detail' => $this->input->post('detail'),
    ];

    $this->form_validation->set_rules('nama', 'Nama Pelapor', 'required', [
        'required' => 'Nama Pelapor Wajib di isi'
    ]);
    $this->form_validation->set_rules('judul_laporan', 'Judul Laporan', 'required', [
        'required' => 'Judul Laporan  Wajib di isi'
    ]);
    $this->form_validation->set_rules('no_hp', 'No Hp', 'required', [
        'required' => 'No Hp  Wajib di isi'
    ]);
    $this->form_validation->set_rules('lokasi', 'Lokasi Kejadian', 'required', [
        'required' => 'Lokasi  Wajib di isi'
    ]);
    $this->form_validation->set_rules('tanggal_kejadian', 'Tanggal Kejadian', 'required', [
        'required' => 'Tanggal Kejadian  Wajib di isi'
    ]);
    $this->form_validation->set_rules('detail', 'Detail Kejadian', 'required', [
        'required' => 'Detail Kejadian  Wajib di isi'
    ]);

    if ($this->form_validation->run() == false) {
        $this->load->view("layout/header", $data);
        $this->load->view("pengaduan/form_pengaduan", $data);
        $this->load->view("layout/footer");
    } else {
        $this->Pengaduan_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
        redirect('pengaduan'); // Corrected redirect function
    }
}
}
  