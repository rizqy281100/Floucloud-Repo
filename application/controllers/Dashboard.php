<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {

        if($this->session->userdata('is_login') === true){
            $data['data_admin'] = $this->db->get_where('data_admin', ['email' => $this->session->userdata('email')])->row_array();
            // var_dump($data['data_admin']);
            // die();
            $title['title'] = 'Floucloud Repository';
            $this->load->view('template/header', $title);
            $this->load->view('template/navbar', $title);
            $this->load->view('template/sidebar', $title);
            $this->load->view('menu/dashboard', $data);
            $this->load->view('template/footer');
        }
        else {
            $title['title'] = 'Floucloud Repository';
			$this->load->helper('url');
			$this->load->view('auth/template/header', $title);
			$this->load->view('auth/login');
			$this->load->view('auth/template/footer');
        }
    }
}