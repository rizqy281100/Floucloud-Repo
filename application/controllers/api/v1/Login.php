<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH .'/libraries/JWT.php';

use chriskacerguis\RestServer\RestController;

class Login extends RestController {

     //Login User
    public function login_post() {
        $email = $this->post('email');
        $password = $this->post('password');

        if(!empty($email) && !empty($password)) {
            $con['returnType'] = 'single';
            $con['conditions'] = array(
                'email' => $email,
                'password' => md5($password),
                'status' => 1
            );

            $user = $this->user->getRows($con);
            
            if($user) {
                $this->response([
                    'status' => true,
                    'message' => 'User Login Successfull'
                ], 201);
            }
            else {
                $this->response([
                    'status' => false,
                    'message' => 'User Data is Wrong or Not Exist!'
                ], 400);
            }
        }
        else {
            $this->response("Please Input Email and Password", RESTController::HTTP_BAD_REQUEST);
        }
    }
}