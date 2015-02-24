<?php

session_start();

?>


<!DOCTYPE html>
<html>
    <head> 
        <title>Online Events</title>
        <link rel="shortcut icon" href="images/tsfevicon.jpg" /> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/common.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
        <link rel="stylesheet" type="text/css" href="css/buttn.css"/>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
        
       <!-- FOR OVERLAY-->
       <link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="normalize.css" />
   		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/style8.css" />
        <link rel="stylesheet" type="text/css" href="css/style9.css" />
        <link rel="stylesheet" type="text/css" href="css/style10.css" />
		<link rel="stylesheet" type="text/css" href="css/style12.css" />
		<script src="js/snap.svg-min.js"></script>
  		<script src="js/modernizr.custom.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style7.css" />

       <!-- FOR OVERLAY-->
        
        
    </head>
    <body>
     
       <div class="container">
			<header>
				<h1>ONLINE EVENTS</h1>

				<div style="position:absolute;left:1100px;top:15px;">
				<?php
				  if(!isset($_SESSION['email']))
				     {  ?>
   					 <a href="http://cadnitd.co.in/index.php" style="font-size:36px;color:#2A80A8;font-family:Forte;font-weight:bolder;">HOME</a>
   				  <?php  }
   				        else
   				        {
   				           $email=$_SESSION['email'];
   				           $reg_id=$_SESSION['reg'];  ?>
   				           <span style="color:yellow;font-weight:bold;font-size:15px;"> <?php echo  welcome." ".$email." ".$reg_id;  ?> </span>
   				        </br>   <a href="http://cadnitd.co.in/REGISTRATION/logout.php" style="font-size:20px;color:#2A80A8;font-family:Forte;font-weight:bolder;">Logout</a>
   				    <?php    } ?>
   				 </div>
				<div class="support-note"><!-- let's check browser support with modernizr -->
					<!--span class="no-cssanimations">CSS animations are not supported in your browser</span-->
					<span class="no-csstransforms">CSS transforms are not supported in your browser</span>
					<!--span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span-->
					<span class="no-csstransitions">CSS transitions are not supported in your browser</span>
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
      <div id="footer">
      <ul>
      <li><a href="https://www.facebook.com/pages/Technoshine-X4/1464096923851565?ref=ts&fref=ts" target="_blank"><img src="images/facebook.png" height="50" width="50"/></a></li>
       <li><a href="https://plus.google.com/u/0/b/107823971173619031030/107823971173619031030/about?hl=en" target="_blank"><img src="images/google.png" height="50" width="50"/></a></li>
      <li><a href="https://www.youtube.com/channel/UC3NK5zo-glhp0rHks4BAnwA/feed" target="_blank"><img src="images/youtube.png" height="50" width="50"/></a></li>
    </ul>
    </div>
			<section class="main">
			
				<ul class="ch-grid">
					<li>
						<div class="ch-item">	
							<div class="ch-info">
								<h3>Code Zip</h3>
								<p><a id="trigger-overlay5" href="#">Know More</a></p>
							</div>
							<div class="ch-thumb ch-img-1"></div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<h3>Code War</h3>
								<p><a id="trigger-overlay4" href="#">Know More</a></p>
							</div>
							<div class="ch-thumb ch-img-2"></div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<h3>Just Click</h3>
								<p><a id="trigger-overlay3" href="#">Know More</a></p>
							</div>
							<div class="ch-thumb ch-img-3"></div>
						</div>
					</li>
                    </ul>
       			<ul class="ch-grid">
                    <li>
						<div class="ch-item">	
							<div class="ch-info">
								<h3>Net Hunt</h3>
								<p><a id="trigger-overlay1" href="#">Know More</a></p>
							</div>
							<div class="ch-thumb ch-img-4"></div>
						</div>
					</li>
                    <li>
						<div class="ch-item">	
							<div class="ch-info">
								<h3>Inspire India</h3>
								<p><a href="#" id="trigger-overlay2" >Know More</a></p>
							</div>
							<div class="ch-thumb ch-img-5"></div>
						</div>
					</li>
				</ul>
				
			</section>
			
        </div>
        
        <div id="tech" ><img src="images/lg1.png" width="300" height="300" /></div>
        
        
    <div class="overlay5 overlay-boxes">
			<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="101%" viewBox="0 0 1440 806" preserveAspectRatio="none">
				<path d="m0.005959,200.364029l207.551124,0l0,204.342453l-207.551124,0l0,-204.342453z"/>
				<path d="m0.005959,400.45401l207.551124,0l0,204.342499l-207.551124,0l0,-204.342499z"/>
				<path d="m0.005959,600.544067l207.551124,0l0,204.342468l-207.551124,0l0,-204.342468z"/>
				<path d="m205.752151,-0.36l207.551163,0l0,204.342437l-207.551163,0l0,-204.342437z"/>
				<path d="m204.744629,200.364029l207.551147,0l0,204.342453l-207.551147,0l0,-204.342453z"/>
				<path d="m204.744629,400.45401l207.551147,0l0,204.342499l-207.551147,0l0,-204.342499z"/>
				<path d="m204.744629,600.544067l207.551147,0l0,204.342468l-207.551147,0l0,-204.342468z"/>
				<path d="m410.416046,-0.36l207.551117,0l0,204.342437l-207.551117,0l0,-204.342437z"/>
				<path d="m410.416046,200.364029l207.551117,0l0,204.342453l-207.551117,0l0,-204.342453z"/>
				<path d="m410.416046,400.45401l207.551117,0l0,204.342499l-207.551117,0l0,-204.342499z"/>
				<path d="m410.416046,600.544067l207.551117,0l0,204.342468l-207.551117,0l0,-204.342468z"/>
				<path d="m616.087402,-0.36l207.551086,0l0,204.342437l-207.551086,0l0,-204.342437z"/>
				<path d="m616.087402,200.364029l207.551086,0l0,204.342453l-207.551086,0l0,-204.342453z"/>
				<path d="m616.087402,400.45401l207.551086,0l0,204.342499l-207.551086,0l0,-204.342499z"/>
				<path d="m616.087402,600.544067l207.551086,0l0,204.342468l-207.551086,0l0,-204.342468z"/>
				<path d="m821.748718,-0.36l207.550964,0l0,204.342437l-207.550964,0l0,-204.342437z"/>
				<path d="m821.748718,200.364029l207.550964,0l0,204.342453l-207.550964,0l0,-204.342453z"/>
				<path d="m821.748718,400.45401l207.550964,0l0,204.342499l-207.550964,0l0,-204.342499z"/>
				<path d="m821.748718,600.544067l207.550964,0l0,204.342468l-207.550964,0l0,-204.342468z"/>
				<path d="m1027.203979,-0.36l207.550903,0l0,204.342437l-207.550903,0l0,-204.342437z"/>
				<path d="m1027.203979,200.364029l207.550903,0l0,204.342453l-207.550903,0l0,-204.342453z"/>
				<path d="m1027.203979,400.45401l207.550903,0l0,204.342499l-207.550903,0l0,-204.342499z"/>
				<path d="m1027.203979,600.544067l207.550903,0l0,204.342468l-207.550903,0l0,-204.342468z"/>
				<path d="m1232.659302,-0.36l207.551147,0l0,204.342437l-207.551147,0l0,-204.342437z"/>
				<path d="m1232.659302,200.364029l207.551147,0l0,204.342453l-207.551147,0l0,-204.342453z"/>
				<path d="m1232.659302,400.45401l207.551147,0l0,204.342499l-207.551147,0l0,-204.342499z"/>
				<path d="m1232.659302,600.544067l207.551147,0l0,204.342468l-207.551147,0l0,-204.342468z"/>
				<path d="m-0.791443,-0.360001l207.551163,0l0,204.342438l-207.551163,0l0,-204.342438z"/>
			</svg>
			<button type="button" class="overlay-close">Close</button>
			<nav>
            <p id="fest_headings">Code Zip</p>
            <h3>This is the event for code golfers and recreational programmers. We are rendering you with a platform where you can show off your coding dexterity by solving algorithmic puzzles, using the least number of keystrokes.</h3>
				<h6>
					<a href="#">Start The Event..</a>
				</h6>
			</nav>
		</div>
		<script src="js/demo10.js"></script>
        
        
		<div class="overlay1 overlay-genie" data-steps="m 701.56545,809.01175 35.16718,0 0,19.68384 -35.16718,0 z;m 698.9986,728.03569 41.23353,0 -3.41953,77.8735 -34.98557,0 z;m 687.08153,513.78234 53.1506,0 C 738.0505,683.9161 737.86917,503.34193 737.27015,806 l -35.90067,0 c -7.82727,-276.34892 -2.06916,-72.79261 -14.28795,-292.21766 z;m 403.87105,257.94772 566.31246,2.93091 C 923.38284,513.78233 738.73561,372.23931 737.27015,806 l -35.90067,0 C 701.32034,404.49318 455.17312,480.07689 403.87105,257.94772 z;M 51.871052,165.94772 1362.1835,168.87863 C 1171.3828,653.78233 738.73561,372.23931 737.27015,806 l -35.90067,0 C 701.32034,404.49318 31.173122,513.78234 51.871052,165.94772 z;m 52,26 1364,4 c -12.8007,666.9037 -273.2644,483.78234 -322.7299,776 l -633.90062,0 C 359.32034,432.49318 -6.6979288,733.83462 52,26 z;m 0,0 1439.999975,0 0,805.99999 -1439.999975,0 z">
			<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1440 806" preserveAspectRatio="none">
				<path class="overlay-path" d="m 701.56545,809.01175 35.16718,0 0,19.68384 -35.16718,0 z"/>
			</svg>
			<button type="button" class="overlay-close">Close</button>
			<nav>
                <p id="fest_headings">Net Hunt</p>
				<h3>Every solution to every problem is simple.Its the distance between the two where the Mystery lies". 
                YES, You are here to solve the mystery.The Mystery of answers to the given questions.You will have to think extremely to unravel each layer of Mystery.
                 SO, GO AHEAD & solve the Mystery of NETHUNT...</h3>
                <h6>
                
                <a href="#">NetHunt is over...</a>
                </h6>
			</nav>
		</div>
		<script src="js/classie.js"></script>
		<script src="js/demo12.js"></script>
        
        
        		<div class="overlay2 overlay-contentpush">
			<button type="button" class="overlay-close">Close</button>
			<nav>
                <p id="fest_headings" style="margin-bottom:0px;">Inspire India</br>Topics For Submission</p>
				<h3><span style="color:white;">1.</span> what will be your contribution to &quotThe Prime Minister's Swachh Bharat Abhiyan&quot </br>

<span style="color:white;">2.</span> The Religious Taboo </br>

<span style="color:white;">3.</span> Vision 2020 </br>

<span style="color:white;">4.</span> An open letter to The Finance minister of India </br>

<span style="color:white;">5.</span> The impact of Indian culture on the Western World  </h3>
                <h6>
                <a href="#">Please mail your article at <span style="color:white;font-size:20px;">technoshine.ca@gmail.com</span>&nbsp till 05:00 PM on 1st Nov 2014.</a></br>
                Topic Language must be English...</br>
                You have to choose any one topic...</br>
                There is no word limit...
                </h6>
			</nav>
		</div>
		<script src="js/demo7.js"></script>
        
        
    <div class="overlay3 overlay-contentscale">
			<button type="button" class="overlay-close">Close</button>
			<nav>
                <p id="fest_headings">Just Click</p>
				<h3>Photography is a way of feeling, of touching, of loving caught in the corner and is conveyed to its spectators with aesthetic sense. 'Just Click' invites all the budding photographers to exhibit their talents. Lets see the world through your eyes. Exemplify your shot and flabbergast each one of us.</h3>
                <h6>
                <a href="#">JustClick is over...</a>
                </h6>
			</nav>
		</div>
		<script src="js/demo7_1.js"></script>
        
        
        <div class="overlay4 overlay-cornershape" data-path-to="m 0,0 1439.999975,0 0,805.99999 -1439.999975,0 z">
			<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1440 806" preserveAspectRatio="none">
				<path class="overlay-path" d="m 0,0 1439.999975,0 0,805.99999 0,-805.99999 z"/>
			</svg>
			<button type="button" class="overlay-close">Close</button>
			<nav>
                <p id="fest_headings">Code War</p>
				<h3>If you relish solving intricate algorithmic puzzles, then this is the event for you! We are furnishing you with a platform where you can gauze your coding dexterity against some of the world's top programmers, as geeky and crazy as you. So, what are you waiting for? Hitch onto the terminal and start cooking some code.</h3>
                <h6>
                <a href="#" >Code War is over...</br></a>
                </h6>
			</nav>
		</div>
		<script src="js/demo9.js"></script>
    
    </body>
</html>