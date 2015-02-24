<?php
require 'connect.php';
ob_start();
$college = $contact = $country = $email = $firstname = $lastname = $password = $password_confirm = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$errors = array();
if (isset($_POST['signup'])){
	$errors = array();
	//FIRSTNAME
	if(empty($_POST['firstname']))
	{
		$errors[] = "Please enter your first name.";
		
	}
	else
	{
		$firstname=test_input($_POST['firstname']);
		
		 if (!preg_match("/^[a-zA-Z]{3,20}$/",$firstname))
		  {
          $errors[] = "First name must contain letters only(no space allowed),atleast 3 letters."; 
	   
           }
	 /*else
	 {
		 if(strlen($firstname)<=2)
		 {
			 $errors[] = "Please enter first name with atleast 3 letters.";
			 
		 }
	 }*/
	}
	
//LASTNAME
	
	if(empty($_POST['lastname']))
	{
		$errors[] = "Please enter your last name.";
	}
	else
	{
		$lastname=test_input($_POST['lastname']);
		 if (!preg_match("/^[a-zA-Z]{2,20}$/",$lastname)) {
       $errors[] = "Last name must contain letters only(no space allowed),atleast 2 letters."; 
         }
	
	}

//CONTACT NO.
  if(empty($_POST['contact']))	
  {
	  $errors[]="Please enter your mobile number.";
  }
  else
  {
	$contact=test_input($_POST['contact']);
	if(!preg_match("/^[0-9]{10}$/",$contact))
	{
		$errors[]="please enter a valid mobile number of 10 digits.";
	}
	
  }

//COLLEGE
   if(empty($_POST['college']))	
  {
	  $errors[]="Please enter your college.";
  }
  else
  {
	$college=test_input($_POST['college']);
	if(!preg_match("/^[a-zA-Z ]{3,100}$/",$college))
	{
		$errors[]="College name must contain atleast 3 letters.";
	}
	
  } 
  //COUNTRY
 if(empty($_POST['country']))	
  {
	  $errors[]="Please enter your country.";
  }
  else
  {
	$country=test_input($_POST['country']);
	if(!preg_match("/^[a-zA-Z ]{2,50}$/",$country))
	{
		$errors[]="Country name must contain atleast 2 letters .";
	}
	
  }

//EMAIL
    if (empty($_POST["email"])) {
     $errors[] = "Please enter your email address.";
   }
    else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = "Please enter a valid email address."; 
     }
	 else if(!preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/', $email))
	 {
		 $errors[] = "Please enter a valid email address.";
	 }
   }

//password
  if(empty($_POST['password']))	
  {
	  $errors[]="Please enter your password.";
  }
  else
  {
	$password=test_input($_POST['password']);
	if(!preg_match("/^[a-zA-Z0-9_]{6,25}$/",$password))
	{
		$errors[]="Password must contain atleast 6 characters: letters,digits and  _";
	}
	
  }
  
  //password_check
  if(empty($_POST['password_confirm']))
  {
	  $errors[] = "Please enter confirm password";
  }
 else
 {
    $password_confirm=test_input($_POST['password_confirm']);

    if($password!=$password_confirm)
   {
	$errors[] = "password doesn't match.";
   }
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
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
        <title>Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
        <link rel="shortcut icon" href="images/tsfevicon.jpg"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        
        
        <script type="text/javascript">
function validate()
{
var x=document.forms["signup"]["firstname"].value
if (x==null || x=="")
  {
  alert("Firstname should not be empty");
  return false;
  }
 else
 {
	 var letters = /^[A-Za-z ]+$/;  
      if(!x.match(letters))  
      {  
       
      alert('First name must contain letters only.');  
      return false;  
      }  

	 if(x.length<=2)
	 {
		 alert("First name should contain atleast 3 letters.");
		 return false;
	 }
 }
 var x=document.forms["signup"]["lastname"].value
if (x==null || x=="")
  {
  alert("Lastname should not be empty");
  return false;
  }
   else
 {
	 var letters = /^[A-Za-z ]+$/;  
      if(!x.match(letters))  
      {  
       
      alert('Last name must contain letters only.');  
      return false;  
      }  
	 if(x.length==1)
	 {
		 alert("Last name should contain atleast 2 letters.");
		 return false;
	 }
 }
 
  x=document.forms["signup"]["contact"].value
if (x==null || x=="" || x.length!=10)
  {
  alert("Contact must be valid that should be of 10 digits.");
  return false;
  }
  
  x=document.forms["signup"]["college"].value
if (x==null || x=="")
  {
  alert("Enter your College.");
  return false;
  }
   else
 {
	 var letters = /^[A-Za-z ]+$/;  
      if(!x.match(letters))  
      {  
       
      alert('College must contain letters only.');  
      return false;  
      }  
	 if(x.length<=2)
	 {
		 alert("College must contain atleast 3 letters.");
		 return false;
	 }
 }
  
  
 
 x=document.forms["signup"]["country"].value
if (x==null || x=="")
  {
  alert("Enter your Country.");
  return false;
  }
   else
 {
	 var letters = /^[A-Za-z ]+$/;  
      if(!x.match(letters))  
      {  
       
      alert('Country must contain letters only.');  
      return false;  
      }  
	 if(x.length<=2)
	 {
		 alert("Country must contain atleast 3 letters.");
		 return false;
	 }
 }

x=document.forms["signup"]["email"].value
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
var letters = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
else if(!x.test(letters))
{
	alert("Not a valid e-mail address");
  return false;
}

x=document.forms["signup"]["password"].value
if (x==null || x=="" || x.length<6 )
  {
  alert("Password should be atleast 6 Letters");
  return false;
  }
  else
  {
	  var pass = /^[A-Za-z0-9_]+$/;
	  if(!x.match(pass))
	  {
		  alert("password must contain letters,digit and  _");
		  return false;
	  }
  }
  
  x=document.forms["signup"]["password"].value
  y=document.forms["signup"]["password_confirm"].value
if (x!=y)
  {
  alert("Password not matched");
  return false;
  }

}

</script>
        
        
		
    </head>
    <body>
    <div id="techno"  style="position:relative;top:25px;left:0px;">
  <h1 style="font-size:60px;font-weight:900;">Technoshine X.4</h1>
  </div> 
        <div class="container">  
         <div id="errors" style="width:350px;height:450px;position:absolute;right:100px;top:130px;">
        <?php
		if (isset($_POST['signup'])){
		 if(!empty($errors))
		 {
                      
		     echo '<p><strong style="color:red;">Unable to process</strong></p>';
                     //echo '<p style="color:white;">please fix the following:</p>';
                     echo '<ul>';
                     foreach ($errors as $value)
                     {
                         echo '<li style="color:white;">'.'<span style="color:red;">*</span>'.$value.'</li>';
                     }
                     echo '</ul>';
                  //header('Location:register.php?val=2');
		 }  
		  else
		 {
	     	 
		 //check email is already exist or not..
                         $query="SELECT email FROM users WHERE email='$email'";
			 $query_run=mysql_query($query);
			 if(mysql_num_rows($query_run) == 1)
			 {
                           ?>
                              <script type="text/javascript">
                                   alert('The Emailid already exists..');
		     
                              </script>
                          <?php
			  
			 }
			 
			 else
			 {
				$querry=("insert into users values('$firstname','$lastname','$contact','$college','$country','$email','$password','0')");
				mysql_query($querry);
				$activation=md5($email);
				$add=$email.$contact;
				$activate=md5($add);
				$message = 'To activate this account please click on this link ';
				$message .= " http://cadnitd.co.in".'/REGISTRATION/activate.php?email='.urlencode($email)."&key=$activation"."&key1=$activate";
				$subject = 'Verification mail from TECHNOSHINE X.4';
				$headers = 'From: technoshine.ca@gmail.com';
				if(mail($email,$subject,$message,$headers))
				{
					
					header("location: http://cadnitd.co.in/REGISTRATION/prompt.php?email=$email&x=0");
					
				}
				
  			  } 
			 
		 }
		}
		 ?>

		 
         </div>
           <div id="container_demo" >
               <div id="wrapper">
                       <div id="register" class="animate form">
                            <form  onsubmit="return validate();" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="signup" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <input  name="firstname" required type="text" placeholder="First Name" value="<?php echo $firstname ?>" />
                                   
                                </p>
                                <p> 
                                    <input  name="lastname" required type="text" placeholder="Last Name" value="<?php echo $lastname ?>" /> 
                                </p>
                                <p> 
                                    <input name="contact" required type="text" placeholder="Contact No." value="<?php echo $contact ?>" /> 
                                </p>
                                <p> 
                                    <input name="college" required type="text" placeholder="College Name"value="<?php echo $college ?>" /> 
                                </p>
                                  <p> 
                                    <input name="country" required type="text" placeholder="Country" value="<?php echo $country ?>" /> 
                                </p>
                                <p> 
                                    <input name="email" required type="email" placeholder="Email" value="<?php echo $email ?>" /> 
                                </p>
                                <p> 
                                    <input name="password" required type="password" placeholder="Password"/>
                                </p>
                                <p> 
                                    <input name="password_confirm" required type="password" placeholder="Confirm Password"/>
                                </p>
                                <p class="signin button" > 
                                    <input type="submit" value="Sign up" name="signup" /> 
                                </p>
                           </form>         
				
                               <p align="right" class="change_link" style="color:white;margin-bottom:0px;">  
					Already Joined?&nbsp;<a href="http://cadnitd.co.in/REGISTRATION/login.php" style="text-decoration:none;">Login</a>
				</p>
				
				<p class="login button" style="position:relative;left:250px;bottom:620px;width:500px;"> 
                                <a href="http://cadnitd.co.in" > <input type="button" value="Home" /> </a>
			   </p>	
                            
                        </div>
		</div>
            </div>  
            
        </div>
    </body>
</html>