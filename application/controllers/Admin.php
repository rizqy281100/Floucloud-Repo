<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $data['query'] = $this->db->get('data_admin')->result_array();
        // var_dump($query);
        // die();

        $data['title'] = 'Floucloud Repository';
        $this->load->view('menu/template/header.php', $data);
        $this->load->view('menu/user/data_admin.php', $data);
        $this->load->view('menu/template/footer.php');
    }
}