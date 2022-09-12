<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
        $data['admin_data'] = $this->db->get_where('data_admin', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Welcome ' . $data['admin_data'];
        
        $data['title'] = 'Floucloud Repository';
        $this->load->view('menu/template/header.php', $data);
        $this->load->view('menu/dashboard.php');
        $this->load->view('menu/template/footer.php');
    }
}