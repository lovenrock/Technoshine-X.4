<?php
ob_start();
require 'connect.php';
require 'core.php';
$user_answer="";
$error="";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = strtolower($data);
  return $data;
}

$email=$_SESSION['email'];
 $result=mysql_query("select * from nethunt_users where email='$email'");
      while($row=mysql_fetch_array($result))
      {
         $level=$row['level'];
         $name=$row['name'];
         $id=$row['id'];
      }
if(isset($_SESSION['email']))
{      
if($level==17)
{
$querry = mysql_query("select * from questions where level_no = '17'");
while($row=mysql_fetch_array($querry))
{
	$answer = $row['answer'];
	$question = $row['question'];
}



if(isset($_POST['submit']))
{
	if(empty($_POST['answer']))
	{
		$error = "Please enter your answer.";
	}
	else
	{
	   $user_answer = test_input($_POST['answer']);
    
	   if($user_answer==$answer)
	  {
	  
	    $result=mysql_query("UPDATE `nethunt_users` SET `level`=`level`+1 WHERE `email`='$email'") or print mysql_error();
            $result=mysql_query("UPDATE `nethunt_users` SET `time`=DATE_ADD(NOW(), INTERVAL '10:30' HOUR_MINUTE ) WHERE `email`='$email'") or print mysql_error(); 
	    header("location:rlkff.php");
	  }
	   else
	   {
	     $error = "Wrong Answer";
	   }
	}
}
?>













<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NetHunt</title>
<link rel="shortcut icon" href="image/tsfevicon.jpg"> 
<link rel="stylesheet" type="text/css" href="css/start_hunt.css" />
<script type="text/javascript" src="bouncebox-plugin/js/jquery-1.11.1.js"></script>
<script type="text/javascript" language="javascript">
 
     $(function() {
 
            $(this).bind("contextmenu", function(e) {
 
                e.preventDefault();
 
            });
 
        }); 
</script>
</head>

<body>
<span style="color:yellow;font-size:25px;position:absolute;left:600px;top:90px;"> <?php echo 'You are at level'; ?>  
<span style="font-size:40px;color:white;"> <?php echo $level; ?> </span> </span>
<span style="color:yellow;font-size:20px;position:absolute;left:600px;top:40px;"> <?php echo 'Welcome,'." ".$name; ?> </br>
<?php echo $id; ?>
</span> 
<img alt="nethunt" src="image/nethunt.png" height="100" width="320" style="position:absolute;top:220px;left:30px;" />
<!--division for all links home discuss and logout-->
<div id="button_container">
<a href="http://cadnitd.co.in/index.php" class="redButton" target="_blank" ><img class="button_image" alt="home" src="image/HOME_LINK.png" /></a>
<a href="https://www.facebook.com/groups/264277007009318/?fref=ts"  target="_blank" class="redButton" ><img class="button_image" alt="discuss" src="image/DISCUSS_LINK.png" /></a>
<a href="http://cadnitd.co.in/REGISTRATION/logout.php" class="redButton" ><img class="button_image" alt="logout" src="image/LOGOUT_LINK.png" /></a>
</div>

<!-- division for question box(black board)-->
<div id="box"> 
<div id="black_board">

<div style="width:420px;height:280px;position:relative;left:45px;top:30px;">
<p style="color:white;font-size:24px;"><?php 

echo $question;
  ?> </p>

</div>
</div> 
<div id="answer">
<form id="answer_form" method="post" >
 <!--  <input type="text" id="input_place" name="answer" placeholder="    Type Your Answer" />
   <input type="submit" id="submit_button" name="submit" value="Submit" /> -->
 

</form>
</div>  

<?php 
if(isset($_POST['submit'])){
?>	<span style="color:yellow;font-size:24px;font-weight:700;position:relative;left:110px;"><?php echo $error; ?> </span>
<?php }

	 ?>
       
</div>

<span style="position:absolute;color:yellow;top:250px;left:950px;font-size:18px;">Answer may contain letters and digits.</br>Spaces are not allowed in answer.</br>If your answer is <span style="color:white">Net Hunt</span> ,</br> simply type it as <span style="color:white">nethunt</span></span>
</body>

</html>

<?php
}
else
 {
     if($level<=20)
     {
         level($level);
     }
     else 
     {
         header('Location:last.php');   
     }
 }  
 
 }
 else
{
     header('Location:http://cadnitd.co.in/index.php');
}
ob_flush();
?> 