<html lang="en">
<head>
	<title>Employees</title>

</head>
<body>
<div id="container">
<div id="content">
	<h1>Employee View</h1>
	
	

<?php

echo form_fieldset('Employees')
	
foreach($results as $row) { 
	
	echo "<ul><li>";
	echo "<b>First Name:</b> &nbsp"; echo $row->first_name; echo "&nbsp";
	echo "<b>Last Name:</b> &nbsp"; echo $row->last_name;echo "&nbsp";
	echo "<br></li></ul>";
	
	}

 echo form_fieldset_close();



</html>