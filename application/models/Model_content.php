<?php
class Model_content extends CI_Model {
	
	function saverecords($data) {
        $this->db->insert('floucloud', $data);
        return true;
	}
	
}