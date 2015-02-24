<?php
require 'connect.php';

$email=$_POST['email'];
if(isset($_POST['email']) && !empty($_POST['email']))
{
$querry2=mysql_query("select * from activated where email='$email'");
         while($row1=mysql_fetch_array($querry2))
         {
             $reg=$row1['reg_id'];
             $fullname=$row1['name']; 
            
         } 
         
}         
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <link rel="shortcut icon" href="images/tsfevicon.jpg"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        
       
        
        
        
        
        
        
		 </head>
    <body>
    
  <div id="techno">
  <h1 style="font-size:60px;font-weight:900;margin-top:20px;margin-left:450px;">Technoshine X.4</h1>
  </div>         
            	<div id="errors" style="width:350px;height:150px;position:absolute;top:230px;left:900px;">
                
				
				
				
                
                </div>			
                <div id="container_demo" >
                
                    <div id="wrapper">
                        <div id="login" class="animate form" style="font-size:20px;">
                         <p> 
                         <?php
                        
                       
                         echo 'Name: '.$fullname;
                         echo '<br/>';
                         
                          echo 'Registration ID: '.$reg;
                          
                           
                         ?>
                         <br/>
                         <br/>
                         <form action="check.php" method="post">
                                     <label for="username" class="uname" data-icon="u" > Your Email</label>
                                    <input id="username" name="email" required type="email" placeholder="Email"/>
                                    <br/>
                                    <br/>
                                    <p class="login button"> 
                             
                                    <input type="submit" value="SUBMIT"/>
                                    </p>
                                </form>    
                                </p>    
                           
                  
		         		
                    </div>
                </div>  
        </div>
    </body>
</html>