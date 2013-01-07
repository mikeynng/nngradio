<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Get_db extends CI_Model {

	function getAll() {

$query = $this->db->query("SELECT * FROM employees");
$query1 = $this->db->query("SELECT * FROM titles");
$query2 = $this->db->query("SELECT * FROM departments");
	
	return $query->result();
	return $query1->result();
	return $query2->result();
}

	public function employee_getall() {
	
		$query = $this->db->get('employees');
		return $query->result();
		
	
	}
	
	function update2($data) {
	
		$this->db->update_batch("employees", $data, "emp_no");
	
	}
	
	}


