<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_content extends CI_Model {

        //Model Insert Content
        function saverecords($data) {

                $this->db->insert('data_content', $data);
                return true;
	}

        //Model Delete Content
        function deleterecords($id) {
                $query=$this->db->get("data_content");
                return $query->result();

                $this->db->where("id", $id);
                $this->db->delete("data_content");
                return true;
        }
}