<title>Contact Page</title>
<div id = "contact">
<style>#contact { 
width: 170px; 
		min-height: 100%
		margin: 0 auto;
		padding: 20px;
	}
</style>
<br><br>
<div id = "content">
<li>View full employee details </li>
The full details of any employee should be viewable. 
This includes salary, gender and age information. Priority: Who: HR only
<li> View brief employee details </li>
The brief details of any employee should be viewable. This information is typically restricted to contact information, such as name, department, manager-status. Age, gender, and hire 
date information is restricted to HR only. Priority: ImportantWho: all




 <!--

$this->load->helper("form");

echo $message;

echo validation_errors();

echo form_open("index.php/site/send_email");


echo form_label("Name: ", "fullname");
$data = array("name" => "fullName", "id" => "fullName", "value" => "");

echo form_input($data);


echo form_label("Email: ", "fullname");
$data = array("name" => "email", "id" => "email", "value" => "");

echo form_input($data);


echo form_label("Message: ", "message");
$data = array("name" => "message", "id" => "message", "value" => "");


echo form_textarea($data);

echo form_submit("contactSubmit", "Send!");


echo form_close();


</div>