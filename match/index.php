<!DOCTYPE html> 
<HTML lang='en-US'>

  <head>
	<?php $thisPg = "match"; ?>
	
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
	<link rel='stylesheet' type='text/css' href='/m8tom8/css/match.css' />
	<link rel='stylesheet' type='text/css' href='/m8tom8/css/dflt.css' />
  	 	 
	 <title>
		M8toM8	
	 </title>
	
	</head>
 
<body>
    
  </div>
</div>
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
<div class='table' id='matchesTable'>
 <table class=' table-condensed table-responsive' width='100%' >
  <tbody>
   <tr>
    <th colspan='100%'>
	 <center> 
	  <strong class='lead center-block' style='font-size:150%;font-weight:bold;background-color:rgba(0,0,0,0.07);border-radius:10px 10px;border:1px solid #ccc;'>
	   Your Matches
	  </strong>
	  <hr />
	 </center>
	</th>
   </tr>

<?/////////////////////////////////////////////?>

	<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/matches.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/matches.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/matches.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/matches.php"); ?>
   
<?/////////////////////////////////////////////?>   


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

</script>
</html>