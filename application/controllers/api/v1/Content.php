<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Content extends RestController {

    // Add Content
    public function content_post(){
        $data = [
            'thumbnail_picture' => $this->input->post('thumbnail_picture'),
            'categories' => $this->input->post('categories'),
            'document_title' => $this->input->post('document_title'),
            'document_version	' => $this->input->post('document_version'),
            'document_caption' => $this->input->post('document_caption'),
            'document_file' => $this->input->post('document_file'),
            'picture_1' => $this->input->post('picture_1'),
            'picture_2' => $this->input->post('picture_2'),
            'picture_3' => $this->input->post('picture_3'),
        ];

        $insert = $this->db->insert('data_content', $data);

        if($insert) {
            $this->response([
                'status' => true,
                'message' => 'Content has been Uploaded!'
            ], 201);
        }
        else {
            $this->response([
                'status' => false,
                'message' => 'Failed to Upload Document!'
            ], 400);
        }
    }

    // Show Content
    public function content_get() {
        $id_content = $this->input->get('id');

        $check_content = $this->db->get_where('data_content', ['id_content' => $id_content])->row_array();

        //If Using id_content
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
    
    // Edit Content
    public function content_put() {
        $id_content = $this->put('id_content');

        $data = array (
            'thumbnail_picture' => $this->input->post('thumbnail_picture'),
            'categories' => $this->input->post('categories'),
            'document_title' => $this->input->post('document_title'),
            'document_version	' => $this->input->post('document_version'),
            'document_caption' => $this->input->post('document_caption'),
            'document_file' => $this->input->post('document_file'),
            'picture_1' => $this->input->post('picture_1'),
            'picture_2' => $this->input->post('picture_2'),
            'picture_3' => $this->input->post('picture_3'),
        );

        $this->db->where('id_content', $id_content);
        $update = $this->db->update('data_content', $data);
        
        if($update) {
            $this->response([
                'status' => true,
                'message' => 'Content has been Updated!'
            ], 200);
        }
        else {
            $this->response([
                'status' => false,
                'message' => 'Failed to Update Content!'
            ], 400);
        }
    }

    // Delete Content
    public function content_delete() {
        $id_content = $this->delete('id_content');

        $check_content = $this->db->get_where('data_content', ['id_content' => $id_content])->row_array();
        
        if($check_content) {
            $this->db->where('id_content', $id_content);
            $this->db->delete('data_content');

            $this->response(array('status' => 'Content Deleted Successfully'), 200);
        }
        else {
            $this->response(array('status' => 'Content not Found'), 404);
        }
    }
}