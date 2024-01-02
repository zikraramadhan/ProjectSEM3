<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/auth_model');
        $this->load->library('session');
    }

    public function index()
    {
        if (!$this->session->userdata('id')) {
            redirect('admin/auth/login');
        } else {
            redirect('admin/dashboard');
        }
    }

    public function login()
    {
        $this->load->view('admin/vw_login');
    }

    public function process_login()
    {
        // Proses login
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->auth_model->get_user($email, $password);

        if ($user) {
            $this->session->set_userdata('id', $user['id']);
            $this->session->set_userdata('nama_lengkap', $user['nama_lengkap']);
            redirect('admin/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Email atau password salah');
            redirect('admin/auth/login');
        }
    }


    public function logout()
    {
        // Proses logout
        $this->session->unset_userdata('id');
        redirect('admin/auth/login');
    }
}
