<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class User extends RestController {

    // Add User
    public function user_post(){
        $data = [
            'profile_picture' => $this->input->post('profile_picture'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'nik' => $this->input->post('nik'),
            'sales_segmen' => $this->input->post('sales_segmen'),
            'password' => $this->input->post('password'),
            'status' => 1
        ];

        $insert = $this->db->insert('data_user', $data);

        if($insert) {
            $this->response([
                'status' => true,
                'message' => 'User has been Registered!'
            ], 201);
        }
        else {
            $this->response([
                'status' => false,
                'message' => 'Failed to Register New User!'
            ], 400);
        }
    }

    // Show User
    public function user_get() {
        $id_user = $this->input->get('id');

        $check_user = $this->db->get_where('data_user', ['id_user' => $id_user])->row_array();

        //If Using id_user
        if($id_user) {
            if($check_user) {
                $this->response([
                    'status' => true,
                    'message' => 'User has been Registered!',
                    'data' => $check_user
                ], 200);
            }
            else {
                $this->response([
                    'status' => false,
                    'message' => 'User not Found!',
                ], 404);
            }
        }
        else {
            $data = $this->db->get('data_user')->result();

            $this->response($data, RestController::HTTP_OK);
        }
    }
    
    // Edit User
    public function user_put() {
        $id_user = $this->put('id_user');

        $data = array (
            'profile_picture' => $this->put('profile_picture'),
            'username' => $this->put('username'),
            'email' => $this->put('email'),
            'phone' => $this->put('phone'),
            'nik' => $this->put('nik'),
            'sales_segmen' => $this->put('sales_segmen'),
            'password' => $this->put('password'),
        );

        $this->db->where('id_user', $id_user);
        $update = $this->db->update('data_user', $data);
        
        if($update) {
            $this->response([
                'status' => true,
                'message' => 'User has been Editted!'
            ], 200);
        }
        else {
            $this->response([
                'status' => false,
                'message' => 'Failed to Edit User!'
            ], 400);
        }
    }

    // Delete User
    public function user_delete() {
        $id_user = $this->delete('id_user');

        $check_user = $this->db->get_where('data_user', ['id_user' => $id_user])->row_array();
        
        if($check_user) {
            $this->db->where('id_user', $id_user);
            $this->db->delete('data_user');

            $this->response(array('status' => 'User Deleted Successfully'), 200);
        }
        else {
            $this->response(array('status' => 'User not Found'), 404);
        }
    }
}