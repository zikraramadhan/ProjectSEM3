<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Psikolog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('admin/Psikolog_model');

    }

    public function index()
    {
        $data['psikolog'] = $this->Psikolog_model->get();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/psikolog', $data);
        $this->load->view('admin/layout/footer');
    }

    function tambah()
    {
        $data['title'] = "Tambah Psikolog";

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib diisi'
        ]);
        $this->form_validation->set_rules('spesialis', 'Spesialis', 'required', [
            'required' => 'Spesialis Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("admin/tambah_psikolog", $data);
            $this->load->view("admin/layout/footer", $data);
        } else {
            $data = [
                'nama' => str_replace("'", "", htmlspecialchars($this->input->post('nama'), ENT_QUOTES)),
                'spesialis' => str_replace("'", "", htmlspecialchars($this->input->post('spesialis'), ENT_QUOTES)),
            ];
            $this->Psikolog_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Data berhasil ditambahkan</div>');
            redirect('admin/psikolog');
        }
    }

    public function edit($id)
    {
       
        $data['title'] = "Edit Psikolog";
        $data['psikolog'] = $this->Psikolog_model->getById($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib diisi'
        ]);
        $this->form_validation->set_rules('spesialis', 'Spesialis', 'required', [
            'required' => 'Spesialis Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("admin/edit_psikolog", $data);
            $this->load->view("admin/layout/footer", $data);
        } else {
            $data = [
                'nama' => str_replace("'", "", htmlspecialchars($this->input->post('nama'), ENT_QUOTES)),
                'spesialis' => str_replace("'", "", htmlspecialchars($this->input->post('spesialis'), ENT_QUOTES)),
            ];
            $this->Psikolog_model->update(['id_psikolog' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Data berhasil ditambahkan</div>');
            redirect('admin/psikolog');
        }
    }

    public function delete($id)
    {
        $this->Psikolog_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong> Success! </strong> Data berhasil dihapus</div>');
        redirect('admin/psikolog');
    }

}
