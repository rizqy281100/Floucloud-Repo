<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iass extends CI_Controller {

    public function index() {
        
        $data['title'] = 'Floucloud Repository';
        $this->load->view('dashboard/template/header.php', $data);
        $this->load->view('dashboard/iass.php');
        $this->load->view('dashboard/template/footer.php');
    }
}