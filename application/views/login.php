<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Page</title>

</head>
<body>

<div id="container">
<div id="login">
	<br>
	<br>
	<center><h1>Employee Login</h1>

	<?php
	
	echo form_open('index.php/site/login_validation');
	echo validation_errors();
	
	echo "<p>Email: ";
	echo form_input('email', $this->input->post('email'));
	echo "<p>";
	
	echo "<p>Password: ";
	echo form_password('password');
	echo "<p>";
	
	echo "<p>";
	echo form_submit('login_submit', 'Login');
	echo "<p>";
	
	echo form_close();
	
	
	
	?>
	
	<hr/>
	<h1>Employee Search</h1></center>
	<div id="search">
	

		<?php
	
	echo form_open('index.php/site/search');
	echo validation_errors();
	
	echo "<p>First Name: ";
	echo form_input('firstname', $this->input->post('firstname'));
	echo "<p>";
	
	echo "<p>Last Name: ";
	echo form_input('lastname', $this->input->post('lastname'));
	echo "<p>";
	
	echo "<p>Department Name: ";
	echo form_input('dept', $this->input->post('dept'));
	echo "<p>";
	
	echo "<p>Current Job Title: ";
	echo form_input('jobtitle', $this->input->post('jobtitle'));
	echo "<p>";
	
	echo "<p><center>";
	echo form_submit('mysearch', 'Search');
	echo "<p></center>";
	
	echo form_close();
	
	
	
	?>

	</div>
	</div>
</body>
</html>