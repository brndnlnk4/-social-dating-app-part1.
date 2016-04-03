<!DOCTYPE html> 
<HTML lang='en-US'>

  <head>
	<?php $thisPg = "like"; ?>

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
	<link rel='stylesheet' type='text/css' href='/m8tom8/css/likes.css' />
	<link rel='stylesheet' type='text/css' href='/m8tom8/css/dflt.css' />
  	 	 
	 <title>
		M8toM8	
	 </title>
	
	</head>
 
<body>

<?/// NAV \\\?>
	<?php require_once($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/nv.php"); ?>
<?/// END NAV \\\?>

<div class="wrapper2" >
 
<div class="wrapper" >
	
 <section class='content'>
  <div class='container' >
   <div class='row'>
 	 <div class='col-lg-12'>
	  <div class='well' id='content1' >
 
 		
	
<?/// LIKES TBL \\\?><?/// LIKES TBL \\\?>	
<?/// LIKES TBL \\\?><?/// LIKES TBL \\\?>	
<?/// LIKES TBL \\\?><?/// LIKES TBL \\\?>	
<div class='table' id=''>
 <table class='table table-condensed table-responsive' width='100%' >
  <tbody>
   </tr>
   <tr>
    <td colspan='100%' style='background-color:rgba(245, 230, 230, 0.52)'>
	 
	
	<?/// NEXT AND BACK ARROWS \\\?>
	 <span class='pull-left' title='Last Picture' onclick='backLikes()'>
	  &nbsp;
	 </span>	 
	 <span class='pull-right' title='Next Picture' onclick='nextLikes()'>
	  &nbsp;
	 </span>
	  <div class='center-block' id='picLikeContainer'>
	  
	  <center class='text-center'>
	   <img src='css/img/like.gif' id='likePopup' title='liked' width='90px' class='text-center img-circle' style='display:none;margin:0 auto;box-shadow:0px 3px 5px #555;padding:3px;border:1px solid #999;z-index:950;position:absolute;top:20%;left:49%;right:auto;'/>
	  </center>
	  
	  <?/// PICTURE SCROLL 4 LIKES \\\?>
	  <?/// PICTURE SCROLL 4 LIKES \\\?>
	  
	   <img src='/m8tom8/prof/upl/Brandon1.jpg' id='likesPic' title='Click to Like' width='60%' class='text-center img-responsive img-rounded' onclick='liked(this.name)' name='<?="0"?>' style='margin:0 auto;min-width:60%;min-height:60%;' />
	  
	  </div>
	</td>
   </tr>
   <tr>
	<td colspan='100%'>
 	 <div class='well well-sm' >
	  <div class='' >
	   <div class='table well well-lg' style='padding:5px 9px;'>
		 
		 <span class='lead text-center center-block'>
		  Click on the picture to <b>Like</b> member.
		 </span>

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
var pic = document.getElementById("likesPic");

 function liked(img_Id){
	
	$(function(){
		
		  $('#likePopup').show(function(){
			  $('#likePopup').fadeOut('fast',function(){
				  $(pic).fadeOut("fast",function(){
					
					//$.post( , {id:img_Id}, function(nextPic){
					 
							//$(pic).attr('src',nextPic, function(){
								
								$(pic).fadeIn('fast');
							
							//})
						 	
					//})
					
				  })
			  })
		  })
		
	 })
 }
 function nextLikes(){
 var picId = pic.name;
 
	 $(function(){
		 //////SEND PIC ID AND PULL PACK RANDOM PIC BY ID USING PHP RAND()
		 //////SEND PIC ID AND PULL PACK RANDOM PIC BY ID USING PHP RAND()
		 
		$(pic).fadeOut("fast",function(){
			
			//$.post( , {next_id:picId}, function(nextPicWithId){
			 
				// var picNid = nextPicWithId.split('#');
				// var nextPic = picNid[0];
				// var nextId = picNid[1];
			 
					//$(pic).attr('src',nextPic, function(){
						//$(pic).attr('name',nextId,function(){
						
							$(pic).fadeIn('fast');
					
						//})
					//})
					
			//})
							 
		})	
	})	 
 }
 function backLikes(){
 var picId = pic.name;
 var picId = --picId;	 
 
	 $(function(){
		$(pic).fadeOut("fast",function(){
			
			//$.post( , {prev_id:picId}, function(nextPic){
			 
					//$(pic).attr('src',nextPic, function(){
						//$(pic).attr('name',nextId,function(){

						$(pic).fadeIn('fast');
					
						//})
					//})
					
			//})
							 
		})			 
	 })	 
 }
</script>
</html>