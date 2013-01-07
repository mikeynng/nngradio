<?php

class Employee_delete extends CI_Model {


public function can_delete() {
		$this->db->where('emp_no', $this->input->post('emp_no'));

	
	// Gets the infor from the table users
	$query = $this->db->get('employees');
	
	if ($query->num_rows() == 1) {
	
	
	return true; }
	
	else {
	
	return false; }
	
	}
	}