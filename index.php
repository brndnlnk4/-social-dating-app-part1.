<!DOCTYPE html> 
<HTML lang='en-US'>

  <head>
	
 	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-type" content="text/html" />
	<meta http-equiv="content-type" content="cache" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="BrandonOsuji" />	
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="keywords" content="" />
	<meta name="description" content="" /> 	
	
    <link rel='icon' href='css/icon.ico' /> 
	
	<script src='js/bootstrap.js' ></script>	
	<script src='js/jquery-1.11.3.min.js' ></script>
	<script src='js/jquery-ui.js' ></script>
	<script src='js/custom.js' ></script>   
 	<script src='js/jquery.easing.min.js' ></script>
    
	<link rel='stylesheet' type='text/css' href='css/bootstrap.css' />   
    <link rel='stylesheet' type='text/css' href='css/jquery-ui.css' />	
	<link rel='stylesheet' type='text/css' href='css/custom.css' />
  	 	 
	 <title>
		M8toM8	
	 </title>
	
	</head>

<body onscroll='loginFix()'>

<?///////////////////////////////////////////?>

	<?php include("incl/usr_reg.php"); ?>
   
<?///////////////////////////////////////////?>
   
<ul class='list-group topBanner'>
 <li class='center-block'>
 
 <?// login and p.w. inputs \\?> 
   <div class='pull-right login'>
	<form action=' ' method='POST' class='form-horizontal' >
	 <label for='usr_login' class='label' >
	  <small>
	  Username  
	  </small>
	 </label>
	   <input type='text' name='usr_login'  onfocus='' maxlength='20' placeholder='Login' id='usrName' value='' class='input-sm text-primary' autofocus required />
	   <input type='submit' type='button' class='btn btn-sm btn-primary' name='submit' value='Login' style='box-shadow:0px 3px 4px #333;float:right;' />	  
	  <br>
	 <label for='pw' class='label' >
	  <small>
	  Password  
	  </small>
	 </label>	  
	   <input type='password' name='pw'  onfocus='' maxlength='20' placeholder='Password' class='input-sm text-primary' value=''  required />
	   <input type='hidden' name='yomama' value='<?=$_SERVER['REMOTE_ADDR']?>' />	
	  <?/// submit \\\?>
	  <input type='reset' type='button' class='btn btn-sm btn-info' value='Clear' style='box-shadow:0px 3px 4px #333;float:right;' />					 
	</form>
   </div>
   
  <p align='center' class='text-center' >
   <img src='/m8tom8/css/img/LOGOTXT.png' width='150px' class='img-responsive' title='M8toD8' style='margin-left:15px;' />
  </p>
 
 </li>
</ul>
 
<section class='content'>
 <div class='container-fluid' >
  <div class='row'>
   <div class='col-xl-12'>
    <div class=' center-block' id='content' >

	<?/// PROFILE  TBL \\\?><?/// PROFILE  TBL \\\?>	
	<?/// PROFILE  TBL \\\?><?/// PROFILE  TBL \\\?>	
	<?/// PROFILE  TBL \\\?><?/// PROFILE  TBL \\\?>	
	<div id='homeTblCont'>
	 <table class='table-responsive' width='60%' >
	  <tbody>
	   <tr>
		<th colspan='50%' >
		 <div class='well well-sm' style='border-right:none;background-color:#010710;border-radius:10px 0 0 10px;' >
		  <div class='center-block' id='flwrBg'>
		   <div class='text-center' style=''>
			<p align='center' valign='center'>
			 <img src='/m8tom8/css/img/new-2.jpg' class='img-rounded img-responsive' width='100%' />
			</p>
		   </div>
		  </div>
		 </div>	
		</td>		 
	   </th>
	   <th colspan='' >
		 <div class='well well-sm' style='border-left:none;border-radius:0 10px 10px 0;' >
		  <div class='center-block' >
		   <div class='text-center' style='padding:10% 7%;background-color:rgba(0,0,0,0.04);'>
			<p align='center' >
			 <h2 class='lead'>
			  Find a Mate 2 Date 2Day!
			 </h2>
			  <summary>
			   <b>M8 to D8</b> is a free social web application which provides a fun and simple experience for singles looking for the perfect partner.
			    Once you register you will have access to a user-friendly interface that will transform your
			   <b>soul-searching</b> into one of exuberance and adventure.  
			  </summary>
			   <br>
			    <strong>
			     Join now for free!
			    </strong>
			   <br>
			  <?/// registration button \\\?> 	   
			  <button type='button' class='btn btn-lg btn-info' onclick='openFuncUsrReg()' style='width:140px;border:3px solid #162338;box-shadow:0px 2px 3px #162338;'>
			   <b>
			    Register
			   </b>
			  </button>
			</p>			
		   </div>
		  </div>
		 </div>	
		</td>		 
	   </th>
      </tr>
     </tbody>
    </table>
   </div>
   <section class='content' >
    <div class='container-fluid'>
	 <div class='row'>
	  <div class='col-lg-2'></div>

	  <div class='col-lg-2 btm1'>	
		<p align='center'>
	      <b>
		   Horoscope Match
	      </b>		
			<img src='/m8tom8/css/img/horoscope.png' width='200px' class=' img-responsive img-rounded' style='background-color:rgba(255, 123, 123, 0.27);padding:3px 12px;' />
		   <br> 
		  <small>		
		    Find matches with similar and compatible traits. 
			Your zodiac means much more than symbolic caricatures, join now to see for yourself and I promise you that you will not be dissapointed.
		  </small>
		</p>
	  </div>	  
	  <div class='col-lg-2 btm2'>
		 <p align='center'>
	      
		  <b>
		   Global Interaction
	      </b>
		  
			<img src='/m8tom8/css/img/wrld.jpg' width='200px' class='  img-responsive img-rounded' style='background-color:rgba(255, 123, 123, 0.27);padding:3px 12px;' />
		   
		   <br>
		  <small>		
		   You can link up with anybody from anywhere around the world by signing up. 
		   We have members from all corners of the globe, give it a shot and register to explore the variety of singles.
		  </small>
		 </p>
 
	  </div>
	  <div class='col-lg-2 btm3'>
		 <p align='center'>
	      <b>
		   Free Registration
	      </b>		
			<img src='/m8tom8/css/img/joinfree.png' width='200px' class=' img-responsive img-rounded' style='background-color:rgba(255, 123, 123, 0.27);padding:3px 12px;' />
		   <br>
		  <small>		
		   Register at no charge, there are no hidden fees or ridiculous methods used to extract any kind of payment. 
		   Our social app is totally free and readily available to the public.
		  </small>
		 </p>
 
	  </div>
	  <div class='col-lg-2 btm4'>
		 <p align='center'>
	      <b>
		    Gorgeous Singles
	       </b>		
			<img src='/m8tom8/css/img/sgl.jpg' width='200px' class='  img-responsive img-rounded' style='background-color:rgba(255, 123, 123, 0.27);padding:3px 12px;' />
		   <br>
		  <small>
			Browse our members index and get in contact with the perfect single for you, M8toD8's social platform and services are exclusively designed for singles around the world. 
 		  </small>
		 </p>
	   </div>
	  <div class='col-lg-2'></div>	  
	 </div>
	</div>
   </section>
	<span class='center-block' >
	 <h2 class='text-center lead' style='background-color:rgba(59, 67, 85, 0.12);min-height:100px;'>
	  <br>
	  <div style='width:20%;margin:0 auto;padding:12px 0;background-color:rgba(255, 123, 123, 0.27);border-radius:10px;'>
	   <small class='text-primary' >
	    <button onclick='openFuncUsrReg()' type='button' class='btn btn-link' >
	     Join M8 to D8 Today
	    </button>
	   <br>

	   </small>	  
	  </div>
	  <br>
	 </h2>
	</span>
	<?/// END OF PROFILE \\\?>
	</div>	  
   </div>
  </div>
 </div>
</section>
 
<section class='content-fluid' style='width:100%; background-color:#162338;padding:0 5px;border-top:15px solid rgba(255,255,255,0.3);'>
 <div class='container-fluid' >
  <div class='row'>
   <div class='col-xl-12' >
    <p align='center' >
	 <small class='center-block'  style='border-top:15px solid rgba(59, 67, 85, 0.12);margin-top:7px;background-color:#162338;min-height:80px;background-image:url("css/img/bannerBGBTM2.jpg");background-size:cover;background-position:center;'>
		&nbsp;
 
	 </small>
	</p>
   </div>
  </div>
 </div> 
</section>	 
  
</body>
<?//██████████████████████████████████████████████████████████████████████████
//░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ 			
////////////////////////██████████//█████████///////////////////////////////			
////////////////////////////██//////██//////////////////////////////////////			
////////////////////////////██////////████//////////////////////////////////			
////////////////////////////██ ///////////██////////////////////////////////			
////////////////////////██████//////████████////////////////////////////////
//░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
//██████████████████████████████████████████████████████████████████████████
 ///////////////////////////////////////////////////////////////////////////?>
<script>
///////////////login section fix on scroll\\\\\\\\\\\\\\
function loginFix(){
	var login = document.getElementsByClassName("login")[0];
	 if(document.body.scrollTop > 100){
		$('.login input[type="submit"]').css('width','200px');
		$(login).css('background-color','rgba(0,0,0,0)');
		 $(login).css('margin-top','3px');
			$('.login input[type="text"]').fadeOut('fast');
		   $('.login input[type="password"]').fadeOut('fast');		 
		  $('.login label').fadeOut('fast');
		 $('.login input[type="reset"]').fadeOut('fast');		 
		  $(login).hover(function(){
		  if(document.body.scrollTop > 100){  	  
		   $('.login input[type="text"]').fadeIn('fast');
		    $('.login input[type="password"]').fadeIn('fast');		 
		     $('.login label').fadeIn('fast');
		      $('.login input[type="reset"]').fadeIn('fast');	
			   $(login).css('background-color','rgba(0,0,0,0.45)');
			    $('.login input[type="submit"]').css('width','65px');
			   }
			},
			  function(){
				if(document.body.scrollTop > 100){  
					$('.login input[type="text"]').fadeOut('fast');
				   $('.login input[type="password"]').fadeOut('fast');		 
				  $('.login label').fadeOut('fast');
				 $('.login input[type="reset"]').fadeOut('fast');	
				$(login).css('background-color','rgba(0,0,0,0)');		 
			   $('.login input[type="submit"]').css('width','200px');		 
				}
			  })				

 	 }else if(document.body.scrollTop < 100){
		 $(login).css('background-color','rgba(255,255,255,0.15)');
		  $(login).css('margin-top','20px');
		   $('.login input[type="text"]').show();
		    $('.login input[type="password"]').show();		 
		     $('.login label').show();
		      $('.login input[type="reset"]').show();
			   $('.login input[type="submit"]').css('width','65px');
	}
}
</script>
<script>
/////////////// REGISTRATION PROCESS \\\\\\\\\\\
	function showEmail2(email1value){
	 var email2row = document.getElementById("email2tr");
	 var email1 = document.getElementById("email1");
	 var email2 = document.getElementById("email2");		
	  var valueLen = lastIndexOf(email1value);
		if(valueLen == 5){
			email2row.style.visibility = "visible";
			//btn4Stp2.removeAttribute("disabled");
		}
 	}


	function showStp2(){
	 var email2row = document.getElementById("email2tr");
	 var email1 = document.getElementById("email1");
	 var email2 = document.getElementById("email2");		
		if(email1.value == email2.value){
			
		}
	}
 

 //////new acct registration
		var progressBar = document.getElementById("progBar");
		var progressBarStyle = document.getElementById("progBar").style;
		var progress_5Percent = progressBarStyle.width = 5 + '%';
		var progress_10Percent = progressBarStyle.width = 10 + '%';
		var progress_15Percent = progressBarStyle.width = 15 + '%';
		var progress_20Percent = progressBarStyle.width = 20 + '%';
		var progress_30Percent = progressBarStyle.width = 30 + '%';
		var progress_50Percent = progressBarStyle.width = 50 + '%';
		var progress_65Percent = progressBarStyle.width = 65 + '%';
		var progress_80Percent = progressBarStyle.width = 80 + '%';
		var progress_100Percent = progressBarStyle.width = 100 + '%';
	////PROGRESS PERCENT/////	
	function progress_10percent(){
		progressBarStyle.width = progress_10Percent;		
	}
	function progress_15percent(){
		progressBarStyle.width = progress_15Percent;		
	}
	function progress_20percent(){
		progressBarStyle.width = progress_20Percent;
	}
	function progress_30percent(){
		progressBarStyle.width = progress_30Percent;
	}
	function progress_50percent(){
		progressBarStyle.width = progress_50Percent;
	}
	function progress_65percent(){
		progressBarStyle.width = progress_65Percent;
	}
	function progress_80percent(){
		progressBarStyle.width = progress_80Percent;
	}
////////////END OF PROGRESS BAR FNC \\\\\\
	
	progressBarStyle.width = progress_5Percent;
	
////////////END OF PROGRESS BAR FNC \\\\\\
	

var EditModal = document.getElementById('usrRegModal');
var RegModalClose = document.getElementById("RegModalClose");
var carSlider = document.getElementById("car_slidr");

//////// OPEN MODAL FUNCTION
	function openFuncUsrReg(){
		EditModal.style.display = "block";
		carSlider.style.visibility = "hidden";
	}
	// CLOSE MODAL FUNCTION
	RegModalClose.onclick = function(){closeFuncUsrReg()};
		function closeFuncUsrReg(){
			EditModal.style.display = "none";
			carSlider.style.visibility = "visible";		
		}
	//CLICKS OUTSIDE MODAL WINDOW CLOSES MODAL WINDOW
	 window.onclick = function(e){
		if(e.target == EditModal){
			EditModal.style.display = "none";
			carSlider.style.visibility = "visible";			
			}
		}
//////////////////////REGISTRATION MODAL\\\\\\\\\\\\\\\\
	var tblStp1 = document.getElementsByClassName(" step1")[0];
	var tblStp2 = document.getElementsByClassName(" step2")[0];
	var tblStp3 = document.getElementsByClassName(" step3")[0];
 
	var yoName = document.getElementById("yoName");
	var dob1 = document.getElementById("dob1");
	var email2row = document.getElementById("email2tr");
	var email22row = document.getElementById("email22tr");
	var email1 = document.getElementById("email1");
	var email2 = document.getElementById("email2");
	var usrNpt = document.getElementById("usrNpt");
	var pw1 = document.getElementById("pw1");
	var pw2 = document.getElementById("pw2");
	var pw2lbl = document.getElementById("pw2lbl");
	var swordColor = document.getElementById("swordColor");
	var regSubmitBtn = document.getElementById("regSubmitBtn");
	var btn4Stp2 = document.getElementById("btnContStp2");
		/////real form inputs for php to look 4 ////
		var real_name = document.getElementById("real_name");
		var usr_dob = document.getElementById("usr_dob");
		var usr_email = document.getElementById("usr_email");
		var usr_name = document.getElementById("usr_name");
		var urs_pw = document.getElementById("urs_pw");

   function fillValue(input, value){
	   if(input){
		   input.value = value;
	   }
   }		
		
	/////if name is entered///
		function yonameSet(){
	 	  var nameLen = yoName.value;
			if(nameLen.lastIndexOf('') > 6){
				progress_10percent();
				fillValue(real_name, yoName.value);				
		}
	}	
	///// if email 1 filled show email 2////
	function showEmail2(nputVal){
	 progressBar.className = "progress-bar progress-bar-striped active progress-bar-warning";

 	 var at = nputVal.indexOf('.');
	 var email_ending = nputVal.slice(at);
 		if((nputVal.lastIndexOf('@') > 1)
			&&((((email_ending == ".com") 
			|| email_ending == ".net") 
			|| email_ending == ".org") 
			|| email_ending == ".eu")){
			progress_20percent();
			email2row.style.display = "block";
			email22row.style.display = "block";
			progressBar.className = "progress-bar progress-bar-striped active";
 		}		
	}
	///// confirm emails match/////
	function showStp2Btn(val){
	 progressBar.className = "progress-bar progress-bar-striped active progress-bar-warning";
		
  		if(val == email1.value){
 		  btn4Stp2.removeAttribute("disabled");
		  progressBar.className = "progress-bar progress-bar-striped active progress-bar-success";
		  progress_30percent()	
		  fillValue(usr_email, val);		  
		  fillValue(usr_dob, dob1.value);		  
		}
	}
	//// continue to stp2 btn/////
	function showStp2(){
		tblStp2.className = " step2 collapse in";
		tblStp1.className = " step1 collapse";
	}	
	////check if username set///
	function chkUsrName(val){
	 progressBar.className = "progress-bar progress-bar-striped active progress-bar-warning";
 
		var usrnameLen = val.lastIndexOf('');
		if((usrnameLen.trim() > 3) && usrnameLen < 29){  
			progress_50percent();
		    progressBar.className = "progress-bar progress-bar-striped active progress-bar-success";
 		    fillValue(usr_name, val);
		}
	}
	/////check if passwrd > 7 char////
	 function yolo(){
	 progressBar.className = "progress-bar progress-bar-striped active progress-bar-warning";
		 
		var pw1Len = pw1.value.lastIndexOf('');
		 if((pw1Len > 6) && pw1Len < 19){
			progress_65percent();
		    progressBar.className = "progress-bar progress-bar-striped active progress-bar-success";
			pw2.style.display = "block";
			pw2lbl.style.display = "block";
		 }
	 }
	function chkIfMatchPW1(pw2val){
	 progressBar.className = "progress-bar progress-bar-striped active progress-bar-warning";

	 
		if(pw2val == pw1.value){
			tblStp3.className = " step3";
			progress_80percent();
		    progressBar.className = "progress-bar progress-bar-striped active progress-bar-success";			
			pw1.style.opacity = ".5";
			pw2.style.opacity = ".5";
			usrNpt.style.opacity = ".5";
 		    fillValue(urs_pw, pw2val);			
			document.getElementById("pw1").setAttribute("disabled","");
			document.getElementById("pw2").setAttribute("disabled","");
			document.getElementById("usrNpt").setAttribute("disabled","");
		}
	}	
	///// anti bot security question /////////
	function chkSwordColor(colorEntered){
		progressBar.className = "progress-bar progress-bar-striped active progress-bar-warning";		
		if((((((colorEntered == "blue") 
			|| colorEntered == "lightblue") 
			|| colorEntered == "skyblue") 
			|| colorEntered == "sky-blue") 
			|| colorEntered == "Blue") 
			|| colorEntered == "light-blue"){	  
 			regSubmitBtn.removeAttribute("disabled");
			progressBarStyle.width = progress_100Percent;
			progressBar.className = "progress-bar progress-bar-striped active progress-bar-success";
		}
	}
	function resett(){
			progress_50percent();
		    progressBar.className = "progress-bar progress-bar-striped active progress-bar-danger";					
			pw1.style.opacity = "1";
			pw2.style.opacity = "1";
			usrNpt.style.opacity = "1";			
			document.getElementById("pw1").removeAttribute("disabled");
			document.getElementById("pw2").removeAttribute("disabled");
			document.getElementById("usrNpt").removeAttribute("disabled");
	}
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
 
</script>
</html>