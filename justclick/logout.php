<?php
ob_start();
session_start();
?>
<html>
	<head>
		<title>Technoshine x.4</title>
		<script type="text/javascript" src="bootstrap-3/js/bootstrap.min.js"></script>	
		<link rel="stylesheet" type="text/css" href="bootstrap-3/css/bootstrap.min.css">
	</head> 
	<body>
	<?php
	session_destroy();
	 header('location:index.php');
	 ob_flush();
	?>
	<div style="padding-top:15%;padding-left:15%">
		<h2>You have successfully logged out.
		<br>
		<a href="index.php">Log In</a> to just clicked again or go to the <a href="http://cadnitd.co.in/">Main Homepage</a></h2>
	</div>
	</body>
	</html>