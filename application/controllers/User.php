<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index() {
        $data['user'] = $this->db->get('data_user')->result_array();

        $title['title'] = 'Floucloud Repository';
        $this->load->view('template/header', $title);
        $this->load->view('template/navbar', $title);
        $this->load->view('template/sidebar', $title);
        $this->load->view('menu/user/data_user', $data);
        $this->load->view('template/footer');
    }
}