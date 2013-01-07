<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title ?></title>

</head>
<body>
<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
	
	<?php
	
	
	foreach($results as $row) { 
	
	//.... Not sure how to do this.. 
	echo $row->first_name;
	echo "<br>";
	
	}
	
	?>
</div>

</body>
</html>