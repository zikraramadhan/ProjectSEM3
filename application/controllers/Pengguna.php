<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Pengguna
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Pengguna extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
		{
			$this->load->view("layout/header");
			$this->load->view("pengaduan/form_pengaduan");
			$this->load->view("layout/footer");
		}
  }
  public function konseling()
  {
		{
			$this->load->view("layout/header");
			$this->load->view("non-admin/daftar_psikolog");
			$this->load->view("layout/footer");
		}
  }
}
/* End of file Pengguna.php */
/* Location: ./application/controllers/Pengguna.php */
