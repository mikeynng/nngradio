<title>Add Employee</title>
<div id = "content">
	<h1>Add Employee</h1>
	
	<?php
	
	echo form_open('index.php/site/validation_add');
	echo validation_errors();
	
	echo "<p>First Name: ";
	echo form_input('fname');
	echo "<p>";
	
	echo "<p>Last Name: ";
	echo form_input('lname');
	echo "<p>";
	
	echo "<p>Employee #: ";
	echo form_input('emp_no');
	echo "<p>";
	
	echo "<p>Job Title: ";
	echo form_input('title');
	echo "<p>"; 
	
	echo "<p>Gender: Male ";
	echo form_radio('gender', 'M', TRUE);
	echo "Female ";
	echo form_radio('gender', 'F');
	echo "<p>";
	
	echo "<p>Manager?: Yes ";
	echo form_radio('manager', 'Y', TRUE);
	echo "No ";
	echo form_radio('manager', 'N');
	echo "<p>";
	
	echo "<p>Department#: ";
	echo form_input('dept_no');
	echo "<p>"; 
	
	
	echo "<p>";
	echo form_submit('login_submit', 'Add Employee');

	
	echo form_close();
	
	
	
	?>
	
	
</div>