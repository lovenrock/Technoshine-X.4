<?php
require 'connect.php';
session_start();
ob_start();
$email=$_SESSION['email'];
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
<?php 

   $result=mysql_query("select * from nethunt_users where email='$email'");
      while($row=mysql_fetch_array($result))
      {
         $level=$row['level'];
         $name=$row['name'];
         $id=$row['id'];
      }
  ?>
<span style="color:yellow;font-size:20px;position:absolute;left:600px;top:40px;"> <?php echo 'Welcome,'." ".$name; ?>   </br>
<?php echo $id; 

?>
</span>
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
<p style="color:white;font-size:24px;"><?php echo '!!!!!!!!CONGRATULATIONS!!!!!!!!'; ?> </p> </br>
<p style="color:white;font-size:24px;"><?php echo 'You have successfully found the treasure...'; ?> </p>  </br>
<p style="color:white;font-size:24px;"><?php echo 'We will get back to u soon...'; ?>
<div style="position:relative;top:30px;left:105px;"><img src="image/last_treasure.png" alt="treasure" width="180" height="150"/></div>



<?php
ob_flush();
?> </p>   </br>
</div>
</div> 
 
       
</div>


</body>

</html>