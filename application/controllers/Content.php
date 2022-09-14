<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

    public function index() {
        
        $title['title'] = 'Floucloud Repository';
        $this->load->view('template/header', $title);
        $this->load->view('template/navbar', $title);
        $this->load->view('template/sidebar', $title);
        $this->load->view('menu/content');
        $this->load->view('template/footer');
    }
}