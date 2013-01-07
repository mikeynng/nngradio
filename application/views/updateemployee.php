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
	
	echo "<p>Job Title: ";
	echo form_input('jtitle');
	echo "<p>";
	
	echo "<p>Gender: Male ";
	echo form_radio('gender', 'accept', TRUE);
	echo "Female ";
	echo form_radio('gender', 'accept');
	echo "<p>";
	
	$department = array(
                   'd1'  => 'Sales',
                   'd2'    => 'Engineering',
                   'd3'   => 'Design',
                   'd4' => 'HR',
				   'd5' => 'Widget Manufacturing',
                 );
	echo "<p>Department: ";			 
	echo form_dropdown('dept', $department, 'd1');
	
	
	echo "<p>";
	echo form_submit('login_submit', 'Update Employee');

	
	echo form_close();
	
	
	
	?>
	
	
</div>