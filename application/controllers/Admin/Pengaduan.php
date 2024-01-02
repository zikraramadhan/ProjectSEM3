<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('admin/Pengaduan_model');

    }

    public function index()
    {
        $data['pengaduan'] = $this->Pengaduan_model->get();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/pengaduan', $data);
        $this->load->view('admin/layout/footer');
    }

    public function delete($id)
    {
        $this->Pengaduan_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Data berhasil dihapus</div>');
        redirect('admin/pengaduan');
    }

    public function proses($id)
    {
        $data = array(
            'status' => 'Diproses'
        );

        $this->Pengaduan_model->update($id, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Data berhasil diproses</div>');
        redirect('admin/pengaduan');
    }

    public function terima($id)
    {
        $data = array(
            'status' => 'Diterima'
        );

        $this->Pengaduan_model->update($id, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Data berhasil diterima</div>');
        redirect('admin/pengaduan');
    }
}
