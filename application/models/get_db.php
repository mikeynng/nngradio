<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Get_db extends CI_Model {

		function getAll() {

		$firstname = $this->db->query("SELECT * FROM employees");
		/*$lastname = $this->db->query("SELECT last_name FROM employees");
		$jobtitle = $this->db->query("SELECT title FROM titles");
		$dept = $this->db->query("SELECT dept_name FROM departments");
		$deptid = $this->db->query("SELECT dept_no FROM departments"); */
		
		return $firstname->result();
	/*	return $lastname->result();
		return $jobtitle->result();
		return $dept->result();
		return $deptid->result(); */

}

		public function employee_getall() {
		
			$query = $this->db->get('employees');
			return $query->result();
			
		
		}
		}


