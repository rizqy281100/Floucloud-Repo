<?php
class Auth extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function all() {
		$data = $this->db->query("SELECT * from data_admin");
		return $data->result();
	}
}