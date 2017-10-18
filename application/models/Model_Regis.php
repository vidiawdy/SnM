<?php

class Model_Regis extends CI_Model{
	function input_data($data){
        $condition = "username =" . "'" . $data['username'] . "' OR " . "phone_number =" . "'" .$data['phone_number']."'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if($query->num_rows()==0){
			$this->db->insert('user', $data);
			if ($this->db->affected_rows() > 0) {
				return true;}} else return false;}}
