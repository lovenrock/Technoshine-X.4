<?php
session_start();
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Technoshine X.4</title>
<link rel="shortcut icon" href="images/tsfevicon.jpg" />
    <!--FOR MAIN BACKGROUND-->
<link href="css/video-background.css" type="text/css" rel="stylesheet" />
    <!--FOR MAIN BACKGROUND-->
    
   
    
    <!--MAIN JAVASCRIPT FILE-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
     <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
    <!--MAIN JAVASCRIPT FILE-->
    
    
    
    
    <!--for swatch book-->
<link rel="stylesheet" type="text/css" href="css/swatch-book/swatch-demo.css" />
<link rel="stylesheet" type="text/css" href="css/swatch-book/swatch-style3.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
    <!--swatch book-->

   
   
   
   
   
    <!--FOR NEWS TICKER-->
<link href="css/news-ticker/style.css" rel="stylesheet" type="text/css" />
<link href="css/news-ticker/ticker-style.css" rel="stylesheet" type="text/css" />
  <!--news ticker-->
   
   
    <!--FOR OVERLAY-->
<link rel="stylesheet" type="text/css" href="css/overlay/style6.css" />
<script src="js/overlay/modernizr.custom.js"></script>
    <!--FOR OVERLAY-->
    
    
    <!--FOR SPONSORS-->
    <link rel="stylesheet" type="text/css" href="css/SPONSORS/sponsors.css" />
    <!--FOR SPONSORS-->
    
    
  <!--      for timer 
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
        <link rel="stylesheet" href="css/timer/styles.css" />
        <link rel="stylesheet" href="css/timer/jquery.countdown.css" />
       for timer  -->
        
        
        

        
        
        
        
        
        
       
</head>


<body>

     <!--VIDEO BACKGROUND-->
<video autoplay="autoplay" loop="loop" id="bgvid" poster="images/back.jpg">
<source src="video/video54.mp4" type="video/mp4"/>
</video>
     <!--END OF VIDEO BACKGROUND-->
     
     

<!--HEADER STARTS-->
<div id="header">

    <!--NIT LOGO-->
   <!-- <div id="logo">
        <img src="images/NIT_Durgapur_Logo(white).png" id="dgp-logo" class="header-panel" />
    </div>-->
    <!--END OF NIT LOGO-->

     <!--TECHNOSHINE NAME DIV-->
   <!-- <div id="technoshine-logo">
        <img src="images/technoshine logo.png" id="technoshine-image" class="header-panel" />
    </div>-->
     <!--END OF TECHNOSHINE NAME DIV-->

    <!--NIT PRESENTS PARA-->
    <!--<p id="nit-presents"><span style="color:rgb(62, 84, 131);font-size:xx-large;">CAD</span></br> <span style="margin-left:30px;">    Presents</span></p>-->
    <!--NIT PRESENTS PARA END-->

    <!--TEXT X.4-->
    <p id="x4" ><span id="x">X</span>.<span id="span-4">4</span></p>
    <!--END OF TEXT X.4-->


    <!--LOGIN AND REGISTRATION --> 
   <div id="login">
    <ul>
    
      <?php
      
        if(!isset($_SESSION['email']))
   { 
   ?>
      
   
          <li ><a href="http://cadnitd.co.in/REGISTRATION/login.php" class="round green">Login<span class="round">
                Welcome...
           </span></a></li>
          <li><a href="http://cadnitd.co.in/REGISTRATION/registration.php" class="round red">Sign Up<span class="round">Join Us...</span></a></li>
       <?php
      
      }
      else
      { 
            $email=$_SESSION['email'];
            $reg_id=$_SESSION['reg'];
            $fullname=$_SESSION['fullname'];
            
            ?>
            
          <li ><a href="http://cadnitd.co.in/REGISTRATION/logout.php" class="round green" >Logout<span class="round">
               Logout...
           </span></a></li>
      
          <li style="position:absolute;left:130px;top:110px;"><span style="color:#ff6633;font-size:20px;"> <span style="color:yellow;"> <?php  echo "Welcome";?></span>  
          <?php echo strtoupper($fullname); ?> 
          
         </br>
       <?php  echo $reg_id; ?> </span></li>  
   <?php   }
   ?>
    
        </ul>
    </div>
   <!--END OF LOGIN AND REGISTRATION -->
   
</div> 
<!--END OF HEADER DIV-->

     <!--FACEBOOK LIKE BOX-->
<div id="comment_box" style="position:absolute;top:800px;left:20px;background-color:rgba(81, 85, 87, 0.5);box-shadow:0 0 5px 5px #71848D;">
<iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FTechnoshine-X4%2F1464096923851565%3Fref%3Dts%26fref%3Dts&amp;width=220px&amp;height=395&amp;colorscheme=dark&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height:395px;" allowTransparency="true"></iframe>
</div>
     <!--END OF FACEBOOK LIKE BOX-->



    <!--FOR NEWS TICKER-->
<ul id="js-news" class="js-hidden">
<li class="news-item"><a href="http://cadnitd.co.in/SCHEDULE.pdf" target="_blank"><strong><font color="red">   TECHNOSHINE SCHEDULE   </font></strong></a>Click on updates..!!!!!</li>
                
                
                <li class="news-item">Lets Congratulate<font color="red"> Rub Rakha</font>....The winner of NetHunt....... </li>
                  <li class="news-item">We will come back soon with Technoshine X.5...!!!!!</li>
                 <li class="news-item"><a href="http://cadnitd.co.in/SCHEDULE.pdf" target="_blank"><strong><font color="red">   TECHNOSHINE SCHEDULE   </font></strong></a>Click on updates..!!!!!</li>

		 <li class="news-item">We will come back soon with Technoshine X.5...!!!!!</li>
		<li class="news-item"><strong> NETHUNT   </strong></a>is over..............!!!!!!!!</li>
		<li class="news-item">JustClick is over.....!!!</li>
		
                <li class="news-item">We will come back soon with Technoshine X.5...!!!!!</li>

		<li class="news-item">Technoshine X.4 is over....</li>
                
</ul>

	<noscript>
		<h2>Latest News</h2>
		<ul id="no-js-news">
			<li class="news-item">Registration has started!!!! REGISTER YOURSELF..</li>
			<li class="news-item">Registration has started!!!! REGISTER YOURSELF..</li>
			<li class="news-item">Registration has started!!!! REGISTER YOURSELF..</li>
			<li class="news-item">Technoshine X.4 is coming on 31st Oct 2014...</li>
			<li class="news-item">Registration has started!!!! REGISTER YOURSELF..</li>
			<li class="news-item">Registration has started!!!! REGISTER YOURSELF.</li>
			<li class="news-item">Registration has started!!!! REGISTER YOURSELF..</li>
		</ul>
	</noscript>
  <!-- for news ticker-->	
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>  
<script src="js/news-ticker/jquery.ticker.js" type="text/javascript"></script>
<script src="js/news-ticker/site.js" type="text/javascript"></script>
   <!--END OF FOR NEWS TICKER-->  
<script type="text/javascript">
$('#js-news').ticker();
</script>
     <!--END OF NEWS TICKER-->
     
     
     
 <!--    FOR TIMER 
     <div id="timer" style="position:absolute;left:952px;top:470px;">
          <div id="countdown" ></div>
          <p id="note" style="color:white;font-size:16px;"></p>
        </div>  
     
     FOR TIMER-->
     
      <div  style="position:absolute;left:980px;top:470px;color:yellow;font-size:15px;">
      <!-- <span>NetHunt & Just Click Has Started....</span></br>  -->
      
      
      
    
   
  
   
   <br/>
    <br/>
    <br/>
   <!--  <a href="http://cadnitd.co.in/SCHEDULE.pdf" style="color:RED;font-weight:bold;position:relative;left:30px;top:-70px;font-size:20px;text-decoration:none;">SCHEDULE</a> <br/>
   
    <a href="http://cadnitd.co.in/ONLINE/online.php" style="color:yellow;font-weight:bold;position:relative;left:30px;top:-70px;font-size:20px;text-decoration:none;">Inspire India</br>
    Kindly mail your articles at <font color="white">technoshine.ca@gmail.com</font></a> 
     <a href="https://www.hackerrank.com/code-war" style="color:yellow;font-weight:bold;position:relative;left:-200px;top:-40px;font-size:20px;text-decoration:none;"> CodeWar </a></br>
       <span style="color:white;font-weight:bold;position:relative;left:30px;top:-40px;font-size:20px;text-decoration:none;">will start on Oct 31, 2014 at 09:00 PM </br>
end on Nov 1, 2014 at 12:00 AM   </span> -->
     <span style="color:yellow;font-weight:bold;position:relative;left:30px;top:-70px;font-size:20px;text-decoration:none;">Technoshine X.4 is Over..!!!!</span></br></br></br>
     <span style="color:white;font-weight:bold;position:relative;left:30px;top:-70px;font-size:20px;text-decoration:none;">We will come back soon with....</br></br><span style="font-size:25px;">Technoshine</span><span id="span-4" style="font-size:40px;">X</span>.<span id="span-4" style="font-size:40px;" >5</span></span>
  
    </div>
    
    
     
 <!--     JavaScript includes for timer 
		<script src="js/timer/jquery-1.11.1.js"></script> 
		<script src="js/timer/jquery.countdown.js"></script>
		<script src="js/timer/script.js"></script>
    JavaScript includes for timer --> 
     




     <!--SOCIAL BUTTONS-->
<div id="social_buttons">
    <a target="_blank" href="https://www.facebook.com/pages/Technoshine-X4/1464096923851565?ref=ts&fref=ts" > <img src="images/facebook.png"  /> </a>
    <a target="_blank" href="https://www.youtube.com/channel/UC3NK5zo-glhp0rHks4BAnwA/feed" > <img src="images/youtube.png"  /> </a>
    <a target="_blank" href="https://plus.google.com/u/0/b/107823971173619031030/107823971173619031030/about?hl=en" > <img src="images/google.png"  /> </a>
</div>
     <!--END OF SOCIAL BUTTONS-->



<!--FOR OVERLAY-->
  <!--UPDATE IMAGE CONTAINER-->
  <div id="update-button">
	<a id="trigger-overlay"><img src="images/updates.png" width="140" height="140" /></a>
  </div>
  <!--END OF UPDATE IMAGE CONTAINER-->	
  
		<!-- open/close -->
		<div class="overlay overlay-door">
			<button type="button" class="overlay-close">Close</button>
			<nav>
                <h2 style="font-size:55px;padding:20px;margin-bottom:50px;font-family:Monotype Corsiva;"><b>UPDATES</b></h2>
				
				<ul>
			<li><a href="http://cadnitd.co.in/SCHEDULE.pdf" target="_blank">TECHNOSHINE SCHEDULE</a></li>	
                	<li><a href="#" >Technoshine X.4 is Over...!!!!</a></li>
                          
                               
                                         <li><a href="#">We will come back soon with Technoshine X.5...</a></li>
					<li><a href="http://cadnitd.co.in/REGISTRATION/registration.php">REGISTER YOURSELF!!!</a></li>
				
				<!--	<li></li> -->
					
				</ul>
			</nav>
		</div>
		<script src="js/overlay/classie.js"></script>
		<script src="js/overlay/demo1.js"></script>
 <!--END OF OVERLAY-->


<!-- for swatch book-->

       <section class="main">
			    <!-- sb-container -->
				<div id="sb-container" class="sb-container">
				
					<div>
						<span class="sb-icon icon-cog"></span>
						<h4 id="swatch"><span><a href="ONLINE/online.php" target="_blank" id="event-link">Online Events</a></span></h4>
					</div>
					<div>
						<span class="sb-icon icon-flight" ></span>
						<h4 id="swatch"><span><a href="OFFLINE EVENTS/in.php" target="_blank" id="event-link">Offline Events</a></span></h4>
					</div>	
					<div>
						<span class="sb-icon icon-eye"></span>
						<h4 id="swatch"><span><a href="https://www.facebook.com/events/485472628258902/?fref=ts" id="event-link" target="_blank">Workshops</a></span></h4>
					</div>	
					<div>
						<span class="sb-icon icon-install"></span>
						<h4 id="swatch"><span><a href="GALLERY/si.html" id="event-link" target="_blank">Gallery</a></span></h4>
					</div>	
					<div>
						<span class="sb-icon icon-bag"></span>
						<h4 id="swatch"><span><a href="#" id="event-link" >Sponsors</a></span></h4>
					</div>	
					<div>
						<span class="sb-icon icon-globe"></span>
						<h4 id="swatch"><span><a href="ABOUT US/index.html" id="event-link" target="_blank">About Us</a></span></h4>
					</div>	
					<div>
						<span class="sb-icon icon-picture"></span>
						<h4 id="swatch"><span><a href="CONTACT US/index.html" id="event-link" target="_blank">Contact Us</a></span></h4>											
					</div>	
                   
					
					<div>
						<h4><span style="color:#467B80;">Menu</span></h4>
						<!--<span class="sb-toggle" style="color:white;">TECHNOSHINE<br /><br/>X.4</span>-->
						<h5><span>Technoshine X.4</span></h5>
					</div>
					
					
				</div>
                <!-- sb-container -->
				
			</section>
  <!--END OF SWATCH BOOK-->
          
  <div id="links">
  
  
  </div>        
                  
   <div id="footer">
    <h5> All rights regarding TS X.4 Reserved to  © Centre For Application Development ® NIT DGP.</h5> 
    <h6>Designed By,</h6>
    <h3>Web Team</h3>
    </div>
    
    
 <!--SPONSORS-->
 <div id="sponsors">
 <p>Our Sponsors</p>
 <hr />
 </div>
   <div id="wrapper">
			<div id="carousel">
				<div id="blue">
					<img src="images/sponsors/pinnacle.jpg" alt="pinnacle" width="170" />
					<h3>Pinnacle Infotech</h3>
					<p>Pinnacle Infotech Solutions...</p>
				</div>
				<div id="pink">
					<img src="images/sponsors/code.jpg" alt="codechef" width="200" />
					<h3>Code Chef</h3>
					<p>A Directi Educational Initiative... </p>
				</div>
				<div id="white">
					<img src="images/sponsors/cmc.jpg" alt="cmc" width="200" />
					<h3>CMC</h3>
					<p>Our IT Partner.... </p>
				</div>
              <!--  <div id="white">
					<img src="images/sponsors/lemon.jpg" alt="lemon" width="200" height="220" />
					<h3>Lemon Grass</h3>
					<p>LemonGrass Hotels Pvt. Ltd....</p>
				</div>   -->
                <div id="white">
					<img src="images/sponsors/hackerrank.png" alt="niit" width="200" />
					<h3>Hacker Rank</h3>
					<p>Our Education Partner.....</p>
				</div>
         <!--       <div id="pantaloons">
					<img src="images/sponsors/pantaloons.png" alt="pantaloons" width="200" height="200" />
					<h3>Pantaloons</h3>
					<p>Celebrate the Fresh Look,Fresh Feel & Fresh Attitude at Pantaloons Fresh Fashion!..</p> 
				</div> -->
                
			</div>
		</div>
        
        <script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script src="js/sponsors/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
		<script type="text/javascript">
			
				$('#carousel').carouFredSel({
					items: 1,
					scroll: {
						duration: 2500,
						timeoutDuration: 1500,
						easing: 'elastic'
					}
				
			});
		</script>
    
 <!--SPONSORS-->
    
  
  
  
  
     
    

<!-- SCRIPT FOR swatch book -->

<!-- <script type="text/javascript" src="js/jquery-1.11.1.js"></script> -->
<script type="text/javascript" src="js/swatch-book/modernizr.custom.79639.js"></script> 
<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->


    <!--   <script type="text/javascript" src="js/jquery-1.11.1.js"></script> -->
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
	   <script type="text/javascript" src="js/swatch-book/jquery.swatchbook.js"></script>
	   <script type="text/javascript">
		$(function() {
			
				$( '#sb-container' ).swatchbook( {
					/*// number of degrees that is between each item
					angleInc : 18,
					neighbor : 18,
					// if it should be closed by default
					initclosed : false,
					// index of the element that when clicked, triggers the open/close function
					// by default there is no such element
					closeIdx : -1*/
				} );
			
			});
		</script>
        
<!--END OF SCRIPT FOR SWATCH BOOK-->
  
 </body>
</html>  