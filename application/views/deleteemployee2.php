<!DOCTYPE html>
<html lang="en">
<head>
	<title>Delete Employee</title>

</head>
<body>
<div id="container">
<div id="content">
	<h1>Delete Employee</h1>
	
	<?php /*
	
	foreach($query as $row) { 
	
	echo "ID: "; echo $row->emp_no; echo "&nbsp";
	echo "<b>First Name:</b> &nbsp"; echo $row->first_name; echo "&nbsp";
	echo "<b>Last Name:</b> &nbsp"; echo $row->last_name;echo "&nbsp";
	echo "<b>Gender:</b> &nbsp"; echo $row->gender;echo "&nbsp";
	echo "<br>";
	
	
	} */
	
	echo form_open('index.php/site/validation_delete');
	echo validation_errors();
	echo "<p><p><b>Type the ID number of the Employee you want Deleted:</b> <p>";
	echo form_input('id');
	echo "<p>";
	echo "<p>";
	echo form_submit('login_submit', 'Delete Employee');
	echo form_close();
	
	?>
</div>

</body>
</html>