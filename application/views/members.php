<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Members Page</title>

</head>
<body>

<div id="container">
	<h1>Members</h1>
	
	<?php
	
	echo "<pre>";
	print_r ($this->session->all_userdata());
	echo "</pre>";
	
	
	?>
	
	<a href='<?php echo base_url()."index.php/main/logout" ?>'>Logout</a>

</div>
</body>
</html>