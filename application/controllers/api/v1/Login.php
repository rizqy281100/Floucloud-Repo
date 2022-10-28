<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH .'/libraries/JWT.php';
use \Firebase\JWT\JWT;

use chriskacerguis\RestServer\RestController;

class Login extends RestController {

     //Login User
     public function user_login () {
        $data = [
            'email' => trim($this->input->post('email', true)),
            'password' => md5(trim($this->input->post('password'), true))
        ];

        $check = $this->db->get_where('data_user', array('email' => $this->input->post('email', true)));
        $row = $this->db->get_where('data_user', $data)->row();

        if($check->num_rows() >= 1) {
            if($row) {
                $result = [
                    'id_user' => $row->id_user,
                    'profile_picture' =>$row->profile_picture,
                    'username' => $row->username,
                    'email' => $row->email,
                    'phone' => $row->phone,
                    'nik' => $row->nik,
                    'sales_segmen' => $row->sales_segmen,
                    'password' => $row->password,
                    'status' => $row->status,
                    'is_login' => $row->is_login
                ];

                $this->response(['error' => false, 'message' => 'User has Logged In', 'Result' => $result], 201);
            }
            else {
                $this->response(['error' => true, 'message' => 'Login Failed'], 401); 
            }
        }
        else {
            $this->response(['error' => true, 'message' => 'User not Found'], 401);
        }
    }
}