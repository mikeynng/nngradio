<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

public function index() {

$this->frames();

}
/*-----------------------------------------
FRAME LAYOUT
-------------------------------------*/
public function frames() {

$this->load->view("frame");

}

/*-----------------------------------------
SEARCH
-------------------------------------*/

public function search() {

$this->load->model("get_db");

$data['title'] = "Array Values";
	$data['results'] = $this->get_db->getAll();
	$this->load->view("view_db", $data);

}

/*-----------------------------------------
LOGIN PAGE
-------------------------------------*/
public function login() {

$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view('login');
$this->load->view("site_footer");

}

/*-----------------------------------------
LOGIN VALIDATION
-------------------------------------*/

public function validate_credentials2() {

$this->load->model('model_users');

if ($this->model_users->can_log_in()) {

return true; } else {

$this->form_validation->set_message('validate_credentials2', 'Incorrect username/password.');
return false;
}

}

public function login_validation() {

	$this->load->library('form_validation');
	$this->form_validation->set_rules("email", "Email", "required|valid_email|trim|xss_clean|callback_validate_credentials2");
	$this->form_validation->set_rules("password", "Password", "required|md5|trim");

if ($this->form_validation->run() == FALSE) {

	$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view('login');
$this->load->view("site_footer");

} else {

	$data = array (
	
	'email' => $this->input->post('email'),
	'is_logged_in' => 1
	
	
	);
	$this->session->set_userdata($data);
	redirect('index.php/site/home');

} }

/*-----------------------------------------
LOGOUT FUNCTION
-------------------------------------*/
public function logout() {
$this->session->sess_destroy();
redirect('index.php/site/login');
}

/*-----------------------------------------
RESTRICTED VIEW
-------------------------------------*/
public function restricted() {

$this->load->view('restricted');

}

/*-----------------------------------------
HOME PAGE
-------------------------------------*/

public function home() {

if ($this->session->userdata('is_logged_in')) { 
	
$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("content_home");
$this->load->view("site_footer");

		}
	else {
	
redirect('index.php/site/restricted');

} 
}

/*-----------------------------------------
EMPLOYEE DETAILS PAGE
-------------------------------------*/

public function employee_details() {

 if ($this->session->userdata('is_logged_in')) { 

$data["message"] = "";

$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("content_employee_details", $data);
$this->load->view("site_footer");

}

else {
	
redirect('index.php/site/restricted');

}


}

/*-----------------------------------------
ADD EMPLOYEE
-------------------------------------*/
function addEmployee() {

if ($this->session->userdata('is_logged_in')) { 

$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("addemployee");
$this->load->view("site_footer");

}
else {
	
redirect('index.php/site/restricted');

}

}

	public function validation_add() {

$this->load->library('form_validation');
$this->form_validation->set_rules("fname", "First Name", "required|trim|");
$this->form_validation->set_rules("lname", "Last Name", "required|trim");
$this->form_validation->set_rules("title", "Job Title", "required|trim|");
$this->form_validation->set_rules("dept", "Department", "required|trim");
$this->form_validation->set_rules("emp_no", "Employee #", "required|trim");

if ($this->form_validation->run() == FALSE) {

$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("addemployee");
$this->load->view("site_footer");

} else {

$this->load->model("get_db");

$fname = $this->input->post('fname');
	$lname = $this->input->post('lname');
	$jtitle = $this->input->post('title');
	$gender = $this->input->post('gender');
	$dept = $this->input->post('dept_no');
	$emp_no = $this->input->post('emp_no');
	$manager = $this->input->post('manager');
	
	$newRow = array('emp_no' => $emp_no,'first_name'=> $fname, 'last_name' =>$lname, 
	'gender' => $gender);
	
	$newRow2 = array('title' => $jtitle, 'emp_no' => $emp_no);
	
	$newRow3 = array('dept_no' => $dept, 'emp_no' => $emp_no) ;
	
	$str = $this->db->insert_string('employees', $newRow);	
	$this->db->insert('employees', $newRow);
	$this->db->insert('titles', $newRow2);
	
	if ($manager = 'Y') {
	
	$this->db->insert('dept_manager', $newRow3);
	
	} else {
	
	$this->db->insert('dept_emp', $newRow3);
	
	/*		'jobtitle'=> $this->input->post('jtitle'), 
		'gender'=> $this->input->post('gender'),
		'department'=> $this->input->post('dept'),
		));
	
	
	$this->get_db->insert2($newRow2); */
	
	$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("addemployee");
$this->load->view("site_footer");
	echo "Added!"; 

} }

}
 

/*-----------------------------------------
UPDATE EMPLOYEE
-------------------------------------*/

function updateEmployee() {

if ($this->session->userdata('is_logged_in')) {

$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("updateemployee");
$this->load->view("site_footer");

}

else {
	
redirect('index.php/site/restricted');

}

}

public function validation_update() {

$this->load->library('form_validation');
$this->form_validation->set_rules("fname", "First Name", "required|trim|");
$this->form_validation->set_rules("lname", "Last Name", "required|trim");
$this->form_validation->set_rules("jtitle", "Job Title", "required|trim|");
$this->form_validation->set_rules("dept", "Department", "required|trim");

if ($this->form_validation->run() == FALSE) {

$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("updateemployee");
$this->load->view("site_footer");

} else {

$this->load->model("get_db");
	
	$newRow = array(array(
		"first_name"=> $this->input->post('fname'), 
		'last_name'=> $this->input->post('lname'),
		'jobtitle'=> $this->input->post('jtitle'), 
		'gender'=> $this->input->post('gender'),
		'department'=> $this->input->post('dept'),
		));
	
	$this->get_db->update2($newRow);
	
	$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("updateemployee");
$this->load->view("site_footer");
	echo "Updated!"; 

} 

}

/*-----------------------------------------
DELETE EMPLOYEE
-------------------------------------*/

function viewEmployee() {

$this->load->model('get_db');
$data['query'] = $this->get_db->employee_getall();
$this->load->view('site_header');
$this->load->view('site_nav');
$this->load->view('deleteemployee2', $data);
$this->load->view('site_footer');

}

function deleteEmployee() {

if ($this->session->userdata('is_logged_in')) {

$this->load->model('get_db');		
$this->load->view('site_header');
$this->load->view('site_nav');
$this->load->view('deleteemployee');
$this->load->view('site_footer');

}

else {
	
redirect('index.php/site/restricted');

}
	
	}
	
function validation_delete() {

$this->load->library('form_validation');
$this->form_validation->set_rules("id", "Identification Number", "required|trim|callback_validate_credentials");
	
if ($this->form_validation->run() == FALSE) {

$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("deleteemployee");
$this->load->view("site_footer");

} else {

$data = array (

'emp_no' => $this->input->post('emp_no'),
);
	
	$emp_no = $this->input->post('emp_no');
	
	
	/* $tables = array ('table1', 'table2', 'table3'); */
	$this->db->where('emp_no', $emp_no);
	$this->db->delete('employees');
	
	
	$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("deleteemployee");
$this->load->view("site_footer");
	echo "Employee (ID number $emp_no) has been deleted!";
	/*$this->load->model("get_db");
	
	$oldRow = array ("id" => "5" );
	
	$this->get_db->delete1($oldRow);
	
	echo "Deleted!"; */

}

}


public function validate_credentials() {

$this->load->model('employee_delete');

if ($this->employee_delete->can_delete()) {

return true; } else {

$this->form_validation->set_message('validate_credentials', 'The ID you enetered is not in the database. ');

return false;
}

}


/*

public function send_email() {

$data["message"] = "";

$this->load->library("form_validation");

$this->form_validation->set_rules("fullName", "Full Name", "required|alpha");
$this->form_validation->set_rules("email", "Email Address", "required|valid_email");
$this->form_validation->set_rules("message", "Message", "required");

if ($this->form_validation->run() == FALSE) {

$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("content_contact", $data);
$this->load->view("site_footer");

} else {

$data["message"] = "The email has been sent";

	$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("content_contact", $data);
$this->load->view("site_footer");

}

}
*/


}