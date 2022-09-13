<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
        $data['data_admin'] = $this->db->get_where('data_admin', ['email' => $this->session->userdata('email')])->row_array();
        
        $title['title'] = 'Floucloud Repository';
        $this->load->view('menu/template/header.php', $title);
        $this->load->view('menu/dashboard', $data);
        $this->load->view('menu/template/footer.php');
    }
}