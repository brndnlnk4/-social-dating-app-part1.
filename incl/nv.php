 <?php
	function onPg($pg){
		global $thisPg;
			if($thisPg == $pg){
				echo " active bgActive ";
 			}
	}
 ?>
<style>
/****** PC, LABTOP VIEWPORT SCRN **********/
/****** PC, LABTOP VIEWPORT SCRN **********/
	
@media(min-width:768px){
	.bgActive{
		background:rgba(0,0,0,0.1);
	}	
	#navUl ul > li a {
		min-width:70px;
	}
	#usrMenu{
		color:#790909;
		text-decoration:none;
		color:#790909;
		text-decoration:none;
 		background-color:rgb(255, 172, 172);	
	}
	.leftTbl, #leftTbl{
		width:auto;
	}
	#rightTbl {
		 width:69%;
		 display: block;
		border:1px solid #e5e1e1;
		float:right; 
		min-height:875px;
		background-color: #eee;
		border-radius: 7px;
	}	
	#profTabsLeft.profTbsLeft{
		height:860px;
		overflow-y: auto;
	}	
	.ui-accordion .ui-accordion-content,
	.ui-accordion-content{
		padding:2.5px 2px;
		height:110px;
		max-width:225px;
	}	
	#usrMenu.btn.btn-link:first-child{
		font-size: 100%;
		font-weight:bold;
		position:relative;
  	}
	.usrMenu.navbar-right{
		padding:0;
		margin-right:0px;
		position:relative;
		top:0;	
	}	
	.menu.menu-dropdown{
  		margin: 0 auto;
		list-style-type: none;
		min-width: 134px;
		padding:0;
		background-color:rgb(255, 172, 172);   	
		font-size:97%;		
 	}	
}

/****** MOBILE AND TABLETS SCRN **********/
/****** MOBILE AND TABLETS SCRN **********/

div.leftTbl{
	width:100%;
	min-height:auto;
}
.rtTbl{
    width:100%;
    display: block;
    float:; 
    min-height:auto;
    background-color: #eee;
}
#profTabsLeft {
	height:auto;
    max-height: 860px;
    overflow-y: auto;
}
.ui-accordion-content{
	padding:2.5px 2px;
  	max-width:100%;
	height:auto;
}
#usrMenu.btn{
 	font-size: 115%;
	font-weight:bold;
	color:#fff;
	opacity:1;
	border:1px solid rgba(255,255,255,0.44);
}
.usrMenu{
 	position:relative;
		top:-20px;
	float:right;
	background-color: rgba(0,0,0,0.5);
	border-radius:10px;
	border-bottom:1px solid #666;
	color:#fff;
	font-weight:bold;
}
 
.menu{
	font-size:140%;
	width:100%;
	background-color: rgba(255,255,255,0.95);
}
</style>
<?//// NAV + TOP-MENU \\\?>
<span class='well center-block lead' id='topSpan'>

 <?/// LOGO \\\?>
 <img src='/m8tom8/css/img/LOGOTXT3.png' id='hvrLogoChng' title='M8toD8' alt='Welcome' width='100px' class='img-responsive img-rounded' />
 <?/// LOGO \\\?>


 
</span> 
<script src='\m8tom8\js/bootstrap.js'></script>
<?//// NAV \\\?>
<nav role='navigation' class='navbar navbar-default navbar-static-top' id='navElement' > 	 
 	 
 <?// dropdown \\?> 
  <ul class='list-group usrMenu navbar-right'>
    
   <li style='margin-top:-38px;height:37px;max-width:135px;display:block;float:left;border:none;'>
 	  <strong style='font-weight:boldest;letter-spacing:3px;'>
	   <a href='\m8tom8\prof' type='button' class='btn btn-link' id='usrMenu' style='font-size:120%;border-bottom:3px solid transparent;'>
		
		<img src='/m8tom8/css/img/contacts.png' title='M8toD8' alt='Welcome' width='30px' class='pull-left img-responsive img-rounded' />
	   
	   Account
		<span class='caret'>&nbsp;</span>
 	   </a>
	  </strong>
 	 <ul class='menu menu-dropdown'>
	  <li class='' >	  
	    <a href='\m8tom8\mem' >
	     View Profile
	    </a>
		 <hr />
	  </li>
	  <li class=''>
	    <a href='\m8tom8\contact' >
	     Contact Dev
	    </a>
		 <hr />	
	   </li>
	   <li class=''>
	    <a href='#' >
	     Log Out
	    </a>
		 <hr />
	   </li>
	 </ul>
	</li> 
 
  </ul>
 
 <div class='navbar-header'>
  <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#navUl' >
   <span class='icon-bar'></span>
   <span class='icon-bar'></span>
   <span class='icon-bar'></span>
   <span class='icon-bar'></span>
  </button>
  
 <a class='navbar-brand' href='\m8tom8\' style='background-color:rgba(226, 209, 209,0.25);'>
 
   <img src='/m8tom8/css/img/home.png' title='M8toD8' alt='Welcome' width='40px' class='img-responsive img-rounded' style='margin-top:-10px;' />

 </a>		  
 </div>
<div class='navbar-collapse collapse'  id='navUl'>
  <ul class='nav navbar-nav navbar-left' >
   <li class='<?=onPg('prof')?>'><a href='\m8tom8\prof\?inbox'>Inbox</a></li>
   <li class='<?=onPg('srch')?>'><a href='\m8tom8\srch'>Find</a></li>
   <li class='<?=onPg('match')?>'><a href='\m8tom8\match'>Matches</a></li>
   <li class='<?=onPg('like')?>'><a href='\m8tom8\likes'>Like</a></li>

  
 </div>
</nav>	
<script>

$(function(){
 var logo = document.getElementById('hvrLogoChng');
	$(logo).hover(function(){
		$(logo).attr("src","/m8tom8/css/img/LOGOTXT2.png");
	},
	function(){
		$(logo).attr("src","/m8tom8/css/img/LOGOTXT3.png");
	})
})
</script>
