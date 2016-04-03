<!DOCTYPE html> 
<HTML lang='en-US'>

  <head>
	<?php $thisPg = "srch"; ?>
	
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
	
 	<script src='/m8tom8/js/jquery-1.11.3.min.js' ></script>
	<script src='/m8tom8/js/jquery-ui.js' ></script>
	<script src='/m8tom8/js/custom.js' ></script>   
 	<script src='/m8tom8/js/jquery.easing.min.js' ></script>
    
	<link rel='stylesheet' type='text/css' href='/m8tom8/css/bootstrap.css' />   
    <link rel='stylesheet' type='text/css' href='/m8tom8/css/jquery-ui.css' />	
	<link rel='stylesheet' type='text/css' href='/m8tom8/css/srch.css' />
	<link rel='stylesheet' type='text/css' href='/m8tom8/css/dflt.css' />
  	 	 
	 <title>
		M8toM8	
	 </title>
	
	</head>
 
<body>
    
  <span id='msgSntPopup' class='well well-sm' style='display:none;z-index:1500;background-color:rgba(167, 208, 244, 0.83);min-width:30%;position:fixed;top:25px;left:40%;right:auto;border:4px solid #777;border-radius:7px;box-shadow:0px 3px 5px #333;'>
	<h1 class='text-center lead'>
	 <?/// jQry will insrt msg here \\\\?>
	</h1>
 </span>   


<?/// NAV \\\?>
	<?php require_once($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/nv.php"); ?>
<?/// END NAV \\\?>

<div class="wrapper2" >

<div class="wrapper" >
 
 <section class='content'>
  <div class='container' >
   <div class='row'>
    <div class='col-lg-1' ></div>
 	 <div class='col-lg-10'>
	  <div class='well' id='content1' >

 		
	
	<?/// PROFILE  TBL \\\?><?/// PROFILE  TBL \\\?>	
	<?/// PROFILE  TBL \\\?><?/// PROFILE  TBL \\\?>	
	<?/// PROFILE  TBL \\\?><?/// PROFILE  TBL \\\?>	
	<div class='table' id=''>
	 <table class='table table-condensed table-responsive' width='100%' >
	  <tbody>
	   <tr>
		<th colspan='100%' style='background-color:rgba(0,0,0,0.023);'>
		 <p align='center'>
		  <center>
		   <b style='font-size:150%;color:#777;'>
			Find a M8
		   </b>
		  </center>
		 </p>
		</th>
	   </tr>
	   <tr>
		<td colspan='100%'>
		 <p align='center' >
		  
		  <ul class='text-center list-horizontal list-group' >
		   <li id='fltrRzltPopup' class='center-block list-group-item' style='max-width:75%;background-color:rgba(198, 154, 154, 0.17);'>
			<strong class='text-muted lead'>
			 You can narrow your search by filling out all fields.
			</strong>
		   </li>
		   <li class='list'>
		   <form>
			<table class='table table-responsive table-condensed' >
			 <tbody>
			  <tr style='background-color:rgba(0,0,0,0.03);'>
			   <td colspan='40%'>
			   
			    <?/// M8 SEARCH INPUT \\\?>
				 <input type='name' id='srchFld' name='srch' value='Search M8' onKeyUp='' onMouseUp='this.value=""' onFocus='this.value=""' class='input-lg form-control' placeholder='Search M8' />
			  
			   </td>
			   <td id='fltrNput1'>
				<span>	
				
				 <label for='male' style='float:left;width:30px;'>Guys</label>
				  <input type='radio' name='gender' class='input-lg' value='male' style='float:left;width:30px;' />
				 <label for='female' style='float:left;width:30px;'>Ladies</label>
				  <input type='radio' name='gender' class='input-lg' value='female' style='float:left;width:30px;' checked />
				
				</span>
			   </td>
			   <td id='fltrNput2'>
				<select class='input-lg form-control' >
				 <option value='' selected>Select Race</option>
 				 <option value='this.inmerHTML'>African American</option>
				 <option value='this.inmerHTML'>Hispanic</option>
				 <option value='this.inmerHTML'>African</option>
				 <option value='this.inmerHTML'>Caucasian</option>
				 <option value='this.inmerHTML'>Indian</option>
				 <option value='this.inmerHTML'>Middle Eastern</option>
				 <option value='this.inmerHTML'>Asian</option>
				</select>		    
			   </td>
			   <td id='fltrNput3'>
				<select class='input-lg form-control'>
				 <option value='' selected>Select Age</option>
				 <option value=''>18-28</option>
				 <option value=''>29-38</option>
				 <option value=''>39-48</option>
				 <option value=''>49-58</option>
				 <option value=''>59-68</option>
				</select>
			   </td>
			  </tr>
			 </tbody>
			</table>	   
			</form>
		   </li>

		  </ul>
		 </p>
		 <div class='well well-sm' >
		  <div class='' >
		   <div class='table well well-lg text-center' style='padding:5px 9px;background-color:rgba(0,0,0,0.04);'>
			
			 
	<?//////////////////////////////////////////////?>

		<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/find.php"); ?>
			  
	<?//////////////////////////////////////////////?>		  
			  
			
		   </div>
		  </div>
		 </div>	
		</td>
	   </tr> 
	  </tbody>
	 </table>
	</div>
		   
		  
	  <?/// END OF PROFILE \\\?>
	  </div>
	 </div>
    <div class='col-lg-1' ></div>	 
   </div>
  </div>
 </section>
 
</div>
<?/// END OF WRAPPER \\\?>
	
<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/ftr.php"); ?>
	
	
</div>
<?/// END OF WRAPPER 2 \\\?>
  
</body>
<script>
var fltrRzltPopup = document.getElementById("fltrRzltPopup");
var  fltrNput1 = document.getElementById("fltrNput1");
var  fltrNput2 = document.getElementById("fltrNput2");
var  fltrNput3 = document.getElementById("fltrNput3");

fltrRzltPopup.style.opacity = "0";
fltrNput1.style.display = "none";
fltrNput2.style.display= "none";
fltrNput3.style.display = "none";
$(function(){
	$('#srchFld').on('focus',function(){
		
		$(fltrRzltPopup).fadeTo(500,'1', function(){
		 $(fltrNput3).slideDown('slow', function(){
		  $(fltrNput2).slideDown('slow', function(){
		   $(fltrNput1).slideDown('slow', function(){
 			$(fltrRzltPopup).fadeTo(2000,'.9', function(){
			 $(fltrRzltPopup).fadeTo(500,'0', function(){
				fltrRzltPopup.style.opacity = "0";
			 })			
			})			   
		   })
		  }) 
		 })
  
	
		})	
	})
})
</script>
<script>
function addMem(memId){
 $(function(){
	 
 })
}
function likeMem(memId){
 $(function(){
	 
 })	
}
</script>
</html>