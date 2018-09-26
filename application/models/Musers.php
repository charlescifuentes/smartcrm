<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musers extends CI_model{

    public function register_user($user)
    {
        $this->db->insert('sai_users', $user);
    }
}
