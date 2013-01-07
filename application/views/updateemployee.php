<title>Employee Update</title>
<div id = "content">
	<h1>Employee Update</h1>
	
	<?php
	
	echo form_open('index.php/site/validation_update');
	echo validation_errors();
	
	echo "<p>First Name: ";
	echo form_input('fname');
	echo "<p>";
	
	echo "<p>Last Name: ";
	echo form_input('lname');
	echo "<p>";
	
	echo "<p>Employee Number: ";
	echo form_input('emp_no');
	echo "<p>";

	echo "<p>";
	echo form_submit('login_submit', 'Update Employee');

	
	echo form_close();
	
	
	
	?>
	
	
</div>