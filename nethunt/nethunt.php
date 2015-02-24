<?php 
ob_start();
session_start();
require 'connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nethunt</title>
<link rel="shortcut icon" href="image/tsfevicon.jpg"> 
<link type="text/css" rel="stylesheet" media="screen"  href="css/start_page.css">
</head>

<body>

<div id="key_container">
<?php
$email=$_SESSION['email'];
if(isset($_SESSION['email']))
{
    $result=mysql_query("select * from nethunt_users where email='$email'");
      while($row=mysql_fetch_array($result))
      {
         $level=$row['level'];
         $name=$row['name'];
         $id=$row['id'];
      }
   switch($level)
   {
           case 1: ?>
               <a href="http://cadnitd.co.in/nethunt/adbvjh.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a> 
        <?php  break;
           case 2:  ?>
               <a href="http://cadnitd.co.in/nethunt/bklkl.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>  
        <?php  break;
            case 3:   ?>
               <a href="http://cadnitd.co.in/nethunt/cjkbj.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
        <?php  break;
           case 4:    ?>
               <a href="http://cadnitd.co.in/nethunt/dlkpo.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
      <?php    break;
           case 5:    ?>
               <a href="http://cadnitd.co.in/nethunt/ekniu.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
       <?php   break;
           case 6:   ?>
               <a href="http://cadnitd.co.in/nethunt/fwnlsf.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
       <?php   break;
            case 7:   ?>
               <a href="http://cadnitd.co.in/nethunt/gplmjy.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
       <?php   break;
           case 8:     ?>
               <a href="http://cadnitd.co.in/nethunt/hplxde.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
       <?php   break;
           case 9:     ?>
               <a href="http://cadnitd.co.in/nethunt/imksrf.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
      <?php    break;
           case 10:    ?>
               <a href="http://cadnitd.co.in/nethunt/jxdpkj.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
     <?php     break;
            
           case 11:   ?>
               <a href="http://cadnitd.co.in/nethunt/kebnd.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
     <?php     break;
           case 12:    ?>
               <a href="http://cadnitd.co.in/nethunt/lpasxm.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
      <?php    break;
           case 13:     ?>
               <a href="http://cadnitd.co.in/nethunt/mrxfk.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
     <?php     break;
            case 14:    ?>
               <a href="http://cadnitd.co.in/nethunt/nrxrkl.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
      <?php    break;
           case 15:     ?>
               <a href="http://cadnitd.co.in/nethunt/ogyver.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
       <?php   break;
           case 16:     ?>
               <a href="http://cadnitd.co.in/nethunt/pedgvr.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
       <?php   break;
           case 17:     ?>
               <a href="http://cadnitd.co.in/nethunt/qfslou.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
       <?php   break;
           case 18:     ?>
               <a href="http://cadnitd.co.in/nethunt/rlkff.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
       <?php   break;
           case 19:     ?>
               <a href="http://cadnitd.co.in/nethunt/sytevv.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
       <?php   break;
           case 20:     ?>
               <a href="http://cadnitd.co.in/nethunt/tqedmk.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
       <?php   break;
            case 21:     ?>
               <a href="http://cadnitd.co.in/nethunt/uqedmk.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
       <?php   break;
             case 22:     ?>
               <a href="http://cadnitd.co.in/nethunt/last.php"><img id="key" alt="key" src="image/keytorevolve.png" /></a>
       <?php   break;
 }      
} 
  else
  {
     header('location: http://cadnitd.co.in/REGISTRATION/login_nethunt.php');
  }


  ?>

</div>
<div id="arrow">
<img id="arrow_image" src="image/arrow.png" alt="arrow"  />
</div>
<span style="color:yellow;position:absolute;top:40px;left:1150px;font-size:15px;">
<?php 
if(isset($_SESSION['email']))
{
  $name=$_SESSION['fullname'];
  $reg=$_SESSION['reg'];
  echo "Welcome,"." ".strtoupper($name); ?>  </br>
 <?php echo $reg; ?> </br>
 <a href="http://cadnitd.co.in/REGISTRATION/logout.php" style="color:white;text-decoration:none;">Logout</a>
<?php   }
ob_flush();

 ?>
 
</span>
 
</body>
</html>