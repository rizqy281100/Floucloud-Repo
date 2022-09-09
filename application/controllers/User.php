<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index() {
        $data['title'] = 'Floucloud Repository';
        $this->load->view('profile/template/header.php', $data);
        $this->load->view('profile/admin.php');
        $this->load->view('profile/template/footer.php');
    }
}