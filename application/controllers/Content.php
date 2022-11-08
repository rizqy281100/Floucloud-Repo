<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {
   
    public function index() {
        $this->load->database();
        $this->load->model('Model_content');

        $title['title'] = 'Floucloud Repository';
        $this->load->view('template/header', $title);
        $this->load->view('template/navbar', $title);
        $this->load->view('template/sidebar', $title);
        $this->load->view('menu/content');
        $this->load->view('template/footer');

        if($this->input->post('save')) {
            $data['thumbnail_picture']=$this->input->post('thumbnail_picture');
            $data['categories']=$this->input->post('categories');
            $data['document_title']=$this->input->post('document_title');
            $data['document_version']=$this->input->post('document_version');
            $data['document_caption']=$this->input->post('document_caption');
            $data['content_link']=$this->input->post('content_link');
            $data['picture_1']=$this->input->post('picture_1');
            $data['picture_2']=$this->input->post('picture_2');
            $data['picture_3']=$this->input->post('picture_3');

            $response=$this->Model_content->saverecords($data);

            if($response==true) {
                echo "Content Link Successfully Uploaded";
            }
            else {
                echo "Content Link Failed to Upload";
            }
        }
    }
}