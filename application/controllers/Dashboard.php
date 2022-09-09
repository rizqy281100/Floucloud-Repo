<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
        $data['admin_data'] = $this->db->get_where('data_admin', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Welcome ' . $data['admin_data'];
        
        $data['title'] = 'Floucloud Repository';
        $this->load->view('dashboard/template/header.php', $data);
        $this->load->view('dashboard/dashboard.php');
        $this->load->view('dashboard/template/footer.php');
    }
}