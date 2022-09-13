<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {

        if($this->session->userdata('is_login') === true){
            $data['data_admin'] = $this->db->get_where('data_admin', ['email' => $this->session->userdata('email')])->row_array();
            // var_dump($data['data_admin']);
            // die();
            $title['title'] = 'Floucloud Repository';
            $this->load->view('menu/template/header', $title);
            $this->load->view('menu/template/navbar', $title);
            $this->load->view('menu/template/sidebar', $title);
            $this->load->view('menu/dashboard', $data);
            $this->load->view('menu/template/footer.php');
        }else{
            $data['title'] = 'Floucloud Repository';
			$this->load->helper('url');
			$this->load->view('auth/template/header', $data);
			$this->load->view('auth/login');
			$this->load->view('auth/template/footer');
        }
    }
}