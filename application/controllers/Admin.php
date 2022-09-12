<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $data['title'] = 'Floucloud Repository';
        $this->load->view('menu/template/header.php', $data);
        $this->load->view('menu/user/data_admin.php');
        $this->load->view('menu/template/footer.php');
    }
}