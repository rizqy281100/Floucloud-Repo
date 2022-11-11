<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profileAdmin extends CI_Controller {

    public function index() {
        $this->load->library('session');
        
        $title['title'] = 'Floucloud Repository';
        $this->load->view('template/header', $title);
        $this->load->view('template/navbar', $title);
        $this->load->view('template/sidebar', $title);
        $this->load->view('menu/user/profile/admin_profile');
        $this->load->view('template/footer');
    }
}