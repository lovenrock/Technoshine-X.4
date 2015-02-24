<?php
require 'connect.php';
if(isset($_GET['email']))
{
	$email = $_GET['email'];
	$activation=$_GET['key'];
	 $querry5=mysql_query("select * from activated where email='$email'");
         $narrow= mysql_num_rows($querry5);
         if($narrow==0)
         {
	$querry1=mysql_query("select * from users where email='$email'");
	  while($row=mysql_fetch_array($querry1))
	  {
	  	$check=$row['email'];
	  	$contact=$row['contact'];
	  	$firstname=$row['first'];
	  	$lastname=$row['last'];
	  	
	  	}
	$emailid=md5($check); 
	$add=$check.$contact;
	$add_encrypt=md5($add); 
	$cont=$_GET['key1'];	
	if($activation==$emailid && $add_encrypt==$cont)
	{
	$querry = "UPDATE users SET check_value =  '1' WHERE  email = '$email'";
	mysql_query($querry);
	$querry2 = "select * from activated";
	$result=mysql_query($querry2);
	$reg_id=mysql_num_rows($result);
	
	$reg_id = $reg_id+1;
	$reg_id="TSX.4_".$reg_id;
	$result1=mysql_query("INSERT INTO `activated` VALUES('".mysql_real_escape_string($firstname." ".$lastname)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($reg_id)."')");
	
	
	
        header("location: http://cadnitd.co.in/REGISTRATION/prompt.php?x=1&id=$reg_id");
         }
        }
          else
          {
              header("location: http://cadnitd.co.in/REGISTRATION/prompt.php?x=3&");
          }
        }
        
        else
        {
           header("location: http://cadnitd.co.in/REGISTRATION/prompt.php?x=2&");
        }
       


?>