<?php
ob_start();
session_start();
$con=mysql_connect("localhost","technos_cad","Centre4@ppdvlpmnt");
	        if(!$con)
	        {
	            die('Could not connect' . mysql_error());
	        }
	        mysql_select_db("technos_cad", $con);
	        $name=$_SESSION['email'];
?>
<html>
	<head>
		<title>Technoshine x.4</title>
		<script type="text/javascript" src="bootstrap-3/js/bootstrap.min.js"></script>	
		<link rel="stylesheet" type="text/css" href="bootstrap-3/css/bootstrap.min.css">
	</head> 
	<body>
		<?php
		 if( $_FILES['file']['name'] != "")
		{       
		        $query="SELECT email FROM photos WHERE email='$name'";
			 $query_run=mysql_query($query);
			 if(mysql_num_rows($query_run) == 1)
			 {
			    header("location: http://cadnitd.co.in/REGISTRATION/prompt.php?x=5");
			 }
		         else	 
		         {

			$tmp_file=$_FILES['file']['tmp_name'];
			$target_file=basename($_FILES['file']['name']);
			$upload_dir="uploads";
			       
			if (file_exists("uploads/" . $target_file))
			{
				$target_file="11".$target_file;
			
			}
			if (file_exists("uploads/" . $target_file))
			{
				$target_file="22".$target_file;
			
			}
			if (file_exists("uploads/" . $target_file))
			{
				$target_file="33".$target_file;
			
			}
			
                         
		        move_uploaded_file ($tmp_file,$upload_dir."/".$target_file);
			
			
			
			
			
		
		
		
		
		$sql="INSERT INTO photos(email,image) VALUES ('$name','$target_file')";
		if(!mysql_query($sql,$con))
		{
			die('Error '. mysql_error());
		}
		mysql_close($con);
		
	        header("location: http://cadnitd.co.in/REGISTRATION/prompt.php?x=6");
		}
		}
		else
		{
		
		       
		
			header("location: http://cadnitd.co.in/REGISTRATION/prompt.php?x=7");
			
		}
		
		ob_flush();
		?>
		
	</body>	

</html>