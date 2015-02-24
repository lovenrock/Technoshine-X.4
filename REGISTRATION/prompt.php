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
                           
                          <?php 
                          if($_GET['x']==0)
                          {
                          $email=$_GET['email'];
                          echo "A verification link has been sent to your email:"; ?> <h3 style="color:white;"> <?php echo $email; ?> </h3>
                          </br>
                          <?php echo "Kindly check your mail."; 
                          
                          ?>  
                           <p class="login button" style="position:relative;right:259px;top:20px;width:500px;"> 
                                <a href="http://cadnitd.co.in" > <input type="button" value="Home" /> </a>
			   </p></br>
			   
			<p class="login button" style="position:relative;bottom:0px;right:260px;width:500px;"> 
                                <a href="http://cadnitd.co.in/REGISTRATION/login.php" > <input type="button" value="Login" /> </a>
			   </p>					

                        
			<?php   }
			else if($_GET['x']==1)
			{
			   $reg_id=$_GET['id'];
			   echo 'Your account has been successfully activated.';  
			   echo 'Your <span style="color:yellow;">Technoshine X.4 </span> id is:'.' '; ?> <span style="color:white;"> <?php echo $reg_id ?> </span>
			   Now You can log in..
			   <p class="login button" style="position:relative;top:25px;right:260px;width:500px;"> 
                                <a href="http://cadnitd.co.in/REGISTRATION/login.php" > <input type="button" value="Login" /> </a>
			   </p>	
		<?php	}
		         else if($_GET['x']==2)
		         {
		            
			    echo 'This email can not be retrieved.';
		         }
		         else if($_GET['x']==3)
		         {
		            echo 'You have already activated your account.';
		         }
		          else if($_GET['x']==5)
		         {
		            echo 'You have already uploaded a picture';
		             ?>
		          <p class="login button" style="position:relative;right:259px;top:20px;width:500px;"> 
                                <a href="http://cadnitd.co.in/justclick/index.php" > <input type="button" value="Just Click" /> </a>
			   </p>
			   <?php
		         }
		          else if($_GET['x']==6)
		         { 
		            echo '!!!...Uploaded Successfully...!!! ';
		            ?>
		          <p class="login button" style="position:relative;right:259px;top:20px;width:500px;"> 
                                <a href="http://cadnitd.co.in/justclick/index.php" > <input type="button" value="Just Click" /> </a>
			   </p>
			   <?php
		         }
		         else if($_GET['x']==7)
		         { 
		            echo 'Please upload a picture...!!!';
		            ?>
		          <p class="login button" style="position:relative;right:259px;top:20px;width:500px;"> 
                                <a href="http://cadnitd.co.in/justclick/index.php" > <input type="button" value="Just Click" /> </a>
			   </p>
			   <?php
		         }

		         else if($_GET['x']==4)
		         {
		           $email=$_GET['email'];   
                          echo "Your Password has been sent to your email:"; ?> <h3 style="color:white;"> <?php echo $email; ?> </h3>
                          </br>
                          <?php echo "Kindly check your mail."; 
                          
                          ?>  
                           <p class="login button" style="position:relative;right:259px;top:20px;width:500px;"> 
                                <a href="http://cadnitd.co.in" > <input type="button" value="Home" /> </a>
			   </p></br>
			   
			<p class="login button" style="position:relative;bottom:0px;right:260px;width:500px;"> 
                                <a href="http://cadnitd.co.in/REGISTRATION/login.php" > <input type="button" value="Login" /> </a>
			   </p>		
		 <?php        } ?>
		         		
                    </div>
                </div>  
        </div>
    </body>
</html>