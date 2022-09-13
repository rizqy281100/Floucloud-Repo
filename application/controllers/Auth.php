<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url', 'security');
		$this->load->library('form_validation');
	}
	
	public function index() {

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Floucloud Repository';
			$this->load->helper('url');
			$this->load->view('auth/template/header', $data);
			$this->load->view('auth/login');
			$this->load->view('auth/template/footer');
		}
		else {
			$this->_login();
		}
		
	}

	private function _login() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$admin_data = $this->db->get_where('data_admin', ['email' => $email])->row_array();

		// var_dump($admin_data);
		// die();
		
		if($admin_data) {
			// If Admin is Active
			if($admin_data['status'] == 1) {
				if($password == $admin_data['password']) {
				// if(password_verify($password, $admin_data['password'])) {
					$data_user = [
						'is_login' => true, 
						'email' => $admin_data['email'],
						'name' => $admin_data['name']
					];
					
					$this->session->set_userdata($data_user);
					redirect('dashboard');
				}
				else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password is Wrong!</div>');
					redirect('auth');
				}
			}
			
			else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not Activated</div>');
				redirect('auth');
			}
		}
		else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not Registered</div>');
			redirect('auth');
		}
	}

	public function logout() {
		$this->session->unset_userdata('is_login');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been Logged Out !</div>');
		redirect('auth');
	}

}

