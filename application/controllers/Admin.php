<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $data['query'] = $this->db->get('data_admin')->result_array();
        // var_dump($query);
        // die();

        $title['title'] = 'Floucloud Repository';
        $this->load->view('template/header', $title);
        $this->load->view('template/navbar', $title);
        $this->load->view('template/sidebar', $title);
        $this->load->view('user/data_admin', $data);
        $this->load->view('template/footer');
    }
}