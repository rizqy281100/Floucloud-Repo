<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

    public function index() {
        
        $title['title'] = 'Floucloud Repository';
        $this->load->view('menu/template/header', $title);
        $this->load->view('menu/template/navbar', $title);
        $this->load->view('menu/template/sidebar', $title);
        $this->load->view('menu/content');
        $this->load->view('menu/template/footer');
    }
}