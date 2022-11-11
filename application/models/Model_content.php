<?php
class Model_content extends CI_Model {
	
	function saverecords($data) {
        $this->db->insert('data_content', $data);
        return true;
	}
	
}