<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public function get_user($email, $password)
    {
        $user = $this->db->get_where('user', array('email' => $email))->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }
        return false;
    }

}
