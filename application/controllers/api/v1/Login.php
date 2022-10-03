<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH .'/libraries/JWT.php';
use \Firebase\JWT\JWT;

use chriskacerguis\RestServer\RestController;

class Login extends RestController {

    private $secret = 'This Key is Secret';

    public function login() {

        $date = new DateTime();

        if(!$this->user->is_valid()) {
            return $this->response([
                'success' => false,
                'message' => 'Email or Password is Wrong!'
            ]);
        }

        $user = $this->user->get('email', $this->input->post('email'));

        $payload['id'] = $user->id;
        $payload['email'] = $user->email;
        $payload['iat'] = $date->getTimestamp();
        $payload['exp'] = $date->getTimestamp() + 60*60*2;

        $output['id_token'] = JWT::encode($payload, $this->secret);
        
        $this->response($output);
    }
}