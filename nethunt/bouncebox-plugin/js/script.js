$(document).ready(function(){

	/* Converting the #box div into a bounceBox: */
	$('#box').bounceBox();

	/* Listening for the click event and toggling the box: */
	$('a.questions').click(function(e){

		$('#box').bounceBoxToggle();
		e.preventDefault();
				
	});
	var status=1;
	/* When the box is clicked, hide it: */
	

	$('#submit_button').click(function(e){
			e.preventDefault();
		$('#box').bounceBoxHide();
	
			
		if(status==1)
		   { 
		     document.getElementById('question_link1').style.display='none';
			/* document.getElementById('question_link2').style.display='inline';*/
			 $('#question_link2').fadeIn(6000);
			 document.getElementById('key_container').style.animation="motion1 6s forwards";
			 document.getElementById('key_container').style.WebkitAnimation="motion1 6s  forwards";
			 document.getElementById('key_container').style.MozAnimation="motion1 6s forwards";
			 status=2;
			/* if(status=2)
			 document.getElementById('key_container').style.left="430px";
			  document.getElementById('key_container').style.top="290px";*/
			  
			 
		   }
			
	    else if(status==2)
		   { 
		     document.getElementById('question_link2').style.display='none';
			 /*document.getElementById('question_link3').style.display='';*/
			 $('#question_link3').fadeIn(6000);
			  document.getElementById('key_container').style.animation="motion2 6s forwards";
			 document.getElementById('key_container').style.WebkitAnimation="motion2 6s forwards";
			 document.getElementById('key_container').style.MozAnimation="motion2 6s forwards";
			 
			 status=3;
			 
		   }   
		 	
		else if(status==3)
		   { 
		     document.getElementById('question_link3').style.display='none';
			/* document.getElementById('question_link4').style.display='inline';*/
			  $('#question_link4').fadeIn(6000);
			   document.getElementById('key_container').style.animation="motion3 6s forwards";
			 document.getElementById('key_container').style.WebkitAnimation="motion3 6s forwards";
			 document.getElementById('key_container').style.MozAnimation="motion3 6s forwards";
			 
			 status=4;
			 
		   }
			
		else if(status==4)
		   { 
		     document.getElementById('question_link4').style.display='none';
			/* document.getElementById('question_link5').style.display='inline';*/
			  $('#question_link5').fadeIn(6000);
			   document.getElementById('key_container').style.animation="motion4 6s forwards";
			 document.getElementById('key_container').style.WebkitAnimation="motion4 6s forwards";
			 document.getElementById('key_container').style.MozAnimation="motion4 6s forwards";
			 
			 status=5;
			 
		   }
			
		else if(status==5)
		   { 
		     document.getElementById('question_link5').style.display='none';
			 /*document.getElementById('question_link6').style.display='inline';*/
			  $('#question_link6').fadeIn(6000);
			   document.getElementById('key_container').style.animation="motion5 6s forwards";
			 document.getElementById('key_container').style.WebkitAnimation="motion5 6s forwards";
			 document.getElementById('key_container').style.MozAnimation="motion5 6s forwards";
			 
			 status=6;
			 
		   }
			
		else if(status==6)
		   { 
		     document.getElementById('question_link6').style.display='none';
			/* document.getElementById('question_link7').style.display='inline';*/
			  $('#question_link7').fadeIn(6000);
			   document.getElementById('key_container').style.animation="motion6 6s forwards";
			 document.getElementById('key_container').style.WebkitAnimation="motion6 6s forwards";
			 document.getElementById('key_container').style.MozAnimation="motion6 6s forwards";
			 
			 status=7;
			 
		   }
			
		else if(status==7)
		   { 
		     document.getElementById('question_link7').style.display='none';
			 /*document.getElementById('question_link8').style.display='inline';*/
			  $('#question_link8').fadeIn(6000);
			   document.getElementById('key_container').style.animation="motion7 6s forwards";
			 document.getElementById('key_container').style.WebkitAnimation="motion7 6s forwards";
			 document.getElementById('key_container').style.MozAnimation="motion7 6s forwards";
			 
			 status=8;
			 
		   }
			
		else if(status==8)
		   { 
		     document.getElementById('question_link8').style.display='none';
			/* document.getElementById('question_link9').style.display='inline';*/
			  $('#question_link9').fadeIn(6000); 
			  document.getElementById('key_container').style.animation="motion8 6s forwards";
			 document.getElementById('key_container').style.WebkitAnimation="motion8 6s forwards";
			 document.getElementById('key_container').style.MozAnimation="motion8 6s forwards";
			 
			 status=9;
			 
		   }
			
		else if(status==9)
		   { 
		     document.getElementById('question_link9').style.display='none';
			/* document.getElementById('question_link10').style.display='inline';*/
			  $('#question_link10').fadeIn(6000);
			   document.getElementById('key_container').style.animation="motion9 6s forwards";
			 document.getElementById('key_container').style.WebkitAnimation="motion9 6s forwards";
			 document.getElementById('key_container').style.MozAnimation="motion9 6s forwards";
			 
			 status=10;
			 
		   }             
		else if(status==10)
		   { 
		     
			 /*document.getElementById('question_link10').style.display='none';*/
			  $('#question_link10').fadeOut(4000);
			   document.getElementById('key_container').style.animation="motion10 6s forwards";
			 document.getElementById('key_container').style.WebkitAnimation="motion10 6s forwards";
			 document.getElementById('key_container').style.MozAnimation="motion10 6s forwards";
			 
			  
			  $('#treasure_container').fadeOut(15000);
			  $('#treasure_container2').fadeIn(15000);
			  
			 
		   }                       
		}); 

       
	   
	   
});	
function myFunction() {
 var name = document.getElementById('input_place').value;

// Returns successful data submission message when the entered information is stored in database.
 var dataString = 'name1=' + name ;
 if (name == '')
 {
 alert("Please Fill All Fields");
 }
 else
 {
//AJAX code to submit form.
 $.ajax({
 type: "POST",
 url: "match_answer.php",
 data: dataString,
 cache: false,
// success: function(html) {
 //alert(html);
 //}
 });
 }
 return false;
}



