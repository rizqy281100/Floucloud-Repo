<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profileAdmin extends CI_Controller {

    public function index() {
        $title['title'] = 'Floucloud Repository';
        $this->load->view('menu/user/profile/template/header', $title);
        $this->load->view('menu/user/profile/template/navbar', $title);
        $this->load->view('menu/user/profile/admin_profile');
        $this->load->view('menu/user/profile/template/footer');
    }
}