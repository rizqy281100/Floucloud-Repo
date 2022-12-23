<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Content extends RestController {
    // Show Content
    public function content_get() {
        $id_content = $this->input->get('id');

        $check_content = $this->db->get_where('data_content', ['id' => $id_content])->row_array();

        //If Using id
        if($id_content) {
            if($check_content) {
                $this->response([
                    'status' => true,
                    'message' => 'Content has been Uploaded!',
                    'data' => $check_content
                ], 200);
            }
            else {
                $this->response([
                    'status' => false,
                    'message' => 'Content is not Found!',
                ], 404);
            }
        }
        else {
            $data = $this->db->get('data_content')->result();

            $this->response($data, RestController::HTTP_OK);
        }
    }
}