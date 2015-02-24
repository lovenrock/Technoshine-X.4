<?php
ob_start();
session_start();
?><html>
	<head>
		<title>Technoshine x.4</title>
		<script type="text/javascript" src="bootstrap-3/js/bootstrap.min.js"></script>	
		<link rel="stylesheet" type="text/css" href="bootstrap-3/css/bootstrap.min.css">
	</head>
	<body>
	    <?php
	
	$con=mysql_connect("localhost","technos_cad","Centre4@ppdvlpmnt");
	if(!$con)
	{
	    die('Could not connect' . mysql_error());
	}
	mysql_select_db("technos_cad", $con);
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	$result = mysql_query("SELECT * FROM users WHERE email='$email'"); 
	while($row = mysql_fetch_array($result)) 
	    {
	        if($pass==$row['password'])
	        {
	            $_SESSION["email"]=$email;
	            $querry1=mysql_query("select * from users where email='$email'");
	  while($row=mysql_fetch_array($querry1))
	  {
	  	$check=$row['check_value'];
	  	$displayname=$row['first'];
	  	}
	             $querry2=mysql_query("select * from activated where email='$email'");
         while($row1=mysql_fetch_array($querry2))
         {
            $reg=$row1['reg_id'];
            $fullname=$row1['name'];
            }
         $_SESSION['reg']=$reg;  
         $_SESSION['fullname']= $displayname;
	            header('location:index.php');
	        }
	        else
	        {
	        
	        header('location:index.php');
	        ?>
	        	
	            <div style="padding-top:15%;padding-left:10%">
	            	<h2>Wrong entry.<a href="index.php">Signin again.</a></h2>
	            </div>
	            <?php
	        }
	    }
ob_flush();
	?>
	</body>
	</html>