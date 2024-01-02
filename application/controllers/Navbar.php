<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class Navbar extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view("layout/header");
    $this->load->view("non-admin/blog");
    $this->load->view("layout/footer");
  }
  public function konseling()
  {
    $this->load->view("layout/header");
    $this->load->view("page/chat");
    $this->load->view("layout/footer");
  }

//   public function pengaduan()
//   {
//     $this->load->view("layout/header");
//     $this->load->view("pengaduan/form_pengaduan");
//     $this->load->view("layout/footer");
//   }

//   public function riwayat_pengaduan()
//   {
//     $this->load->view("layout/header");
//     $this->load->view("pengaduan/riwayat");
//     $this->load->view("layout/footer");
//   }

//   public function about()
//   {
//     $this->load->view("layout/header");
//     $this->load->view("page/about");
//     $this->load->view("layout/footer");
//   }

//   public function kontak()
//   {
//     $this->load->view("layout/header");
//     $this->load->view("page/kontak");
//     $this->load->view("layout/footer");
//   }

//   public function kategori()
//   {
//     $this->load->view("layout/header");
//     $this->load->view("page/kategori.php");
//     $this->load->view("layout/footer");
//   }
// }
}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */