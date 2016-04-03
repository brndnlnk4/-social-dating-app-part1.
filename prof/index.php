<!DOCTYPE html> 
<HTML lang='en-US'>

  <head>
 	<?php $thisPg = "prof"; ?> 
<?php
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
//$error = NULL;
if(!isset($maxUpl)){

if(isset($_FILES['uploadedfile'])){
	$file = $_FILES['uploadedfile'];
	$user = $_SESSION['username'];	
		///file properties					
		$file_name = $file['name'];			
		$file_tmp = $file['tmp_name'];		
		$file_size = $file['size'];			
		  global $file_name;				
			///file extension & checks		
			$file_ext = explode('.', $file_name);
 			$file_ext = end($file_ext);	
			$file_ext = strtolower($file_ext);
										
			$allowed_ext =  array( 'jpg', 'png', 'bmp', 'gif');
																	
		  if(in_array($file_ext, $allowed_ext)){ 		   	
		   
			if($file_size <= 1000000){								
			   									
																	
			   $file_name_new = uniqid('', true) . '.' . $file_ext;
																	
			   $file_destination = "upl/news_pics/".$file_name_new;
				 
		 																
 if(move_uploaded_file($file_tmp, $file_destination)){
	 
    echo "<b class='has-success well center-block text-center lead fade-in'>Cool You Successfully Uploaded Pic!</b>";
	$errors = false;					
	$pic_upld = 'upl/news_pics/'.$file_name_new;							
		} // END OF IF_MOVE_UPL_FILE			
		else{
			 $errors = true;
 
		}
	  } 								
    } 
  }//END OF IF FILES(ISSET)	
}//END OF IF MAX UPLOADS NOT REACHED  
/////////////////////////////////////////////////////////		
/////////////////////////////////////////////////////////		
/////////////////////////////////////////////////////////	

?>

  
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
<script src='\m8tom8\js/bootstrap.js'></script>
	
 	<script src='/m8tom8/js/jquery-1.11.3.min.js' ></script>
	<script src='/m8tom8/js/jquery-ui.js' ></script>
	<script src='/m8tom8/js/custom.js' ></script>   
 	<script src='/m8tom8/js/jquery.easing.min.js' ></script>
    
	<link rel='stylesheet' type='text/css' href='/m8tom8/css/bootstrap.css' />   
    <link rel='stylesheet' type='text/css' href='/m8tom8/css/jquery-ui.css' />	
	<link rel='stylesheet' type='text/css' href='/m8tom8/css/prof.css' />
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
	    <div class='col-lg-1'></div>
	     <div class='col-lg-10'>
		  <div class='well' id='content1' >
		
	<?/// LEFT TBL \\\?><?/// LEFT TBL \\\?>
	<?/// LEFT TBL \\\?><?/// LEFT TBL \\\?>
	<?/// LEFT TBL \\\?><?/// LEFT TBL \\\?>
		<div class='pull-left leftTbl' id='leftTbl'>
		 <div class='table'>
		  <table class='table table-responsive table-condensed' width='100%' >
			<tbody>
			 <tr>
			  <th colspan=''>
				  
  <?/// TABS \\\?> <?/// TABS \\\?>
  <?/// TABS \\\?> <?/// TABS \\\?>
  <?/// TABS \\\?> <?/// TABS \\\?>
  <?/// TABS \\\?> <?/// TABS \\\?>
   <div id='profTabsLeft' class='profTbsLeft'>
	<ul class='list-group' id='profLeft'>
	 <li class='list-inline' >
	  <a type='button' class='' href='#inbox'>Inbox</a>
	 </li>
	 <li class='list-inline' >
	  <a type='button' class='btn btn-sm' href='#friends'>Friends</a>
	 </li>
	 <li class='list-inline' >
	  <a type='button' class='btn btn-sm' href='#likes'>Likes</a>
	 </li>
	</ul>
 
	<?/// INBOX \\\?> 
	<ul id='inbox'>
	   
<?php
	$listCnt = 0;
	global $listCnt;
?>

<?/// CREATE MEM_MSG TBL WITH INBOX COLLUMN AND REPLY COLLUMN ROWS CONTAINING REPLIES + REGULR MSG //?>
<?/// CREATE MEM_MSG TBL WITH INBOX COLLUMN AND REPLY COLLUMN ROWS CONTAINING REPLIES + REGULR MSG //?>

	<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/inbox.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/inbox.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/inbox.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/inbox.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/inbox.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/inbox.php"); ?>
	
	</ul>
	
    <?/// FRIENDS \\\?>
	<ul id='friends' >
	 <li>
	  <table class='table table-condensed table-responsive' width='100%' >
	   <tbody>
	    <tr>
		 <th>
		  ◌
		  <?//space 4 avatar\\?>
		 </th>
		 <th>
		  <small>
		   Friends
		  </small>
		 </th>
		 <th>
		  <small>
		   Status
		   <?//online offline\\?>
		  </small>
		 </th>
		 <th>
		  <small>
		   State
		  </small>
		 </th>
		</tr>
		
		<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/fList.php"); ?>
		<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/fList.php"); ?>
		<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/fList.php"); ?>
		<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/fList.php"); ?>
		<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/fList.php"); ?>
 
	   
	   </tbody>
	  </table>
	 </li>
	</ul>

    <?/// LIKES \\\?> <?/// LIKES \\\?>
    <?/// LIKES \\\?> <?/// LIKES \\\?>
	<ul id='likes'>
	 <li>
	 
	   <ul class='list-inline' >
	   
	    <li class='list-item' >
		   <a href='' target='_self' >
			<img src='' class='img-responsive img-rounded' title='Likes' />		   
		   </a>
		 <hr />
		</li>
	    <li class='list-item' >
			<span class='' style='color:#888;'>
			 <?="UserName"?> Likes You!
			</span>
		 <hr />			
		</li>

	   </ul>
	 </li>
	</ul>
										 
			   </div>
			  </th>
			 </tr>
			</tbody>
		  </table>
		 </div>
		</div>			
	
	<?/// RIGHT TBL \\\?><?/// RIGHT TBL \\\?>	
	<?/// RIGHT TBL \\\?><?/// RIGHT TBL \\\?>	
	<?/// RIGHT TBL \\\?><?/// RIGHT TBL \\\?>	
		<div class='rtTbl' id='rightTbl'>
		 <table class='table table-condensed table-responsive' width='100%' >
		  <tbody>
		   <tr>
		   
		    <th colspan='100%' >
			 <?// PROFILE RIGHT \\?>
			 
			  <span class='center-block text-center' style='font-size:130%;'>
			  Your Profile
			  </span>
			</th>
	
		   </tr>
		   <tr>
			<td colspan='30%'>
			 <div id='dropDfltPic' class='well well-sm'>
			  <p align='center' >
			  
			   <?// POPUP \\?>
			   <span id='popupDflt' class='lead fade' style='float:left;border:1px solid #777;background-color:#ddd;padding:2px 4px;position:absolute;margin:-30px;font-weight:bold;'>
			    Drag here to change Default Pic.
			   </span>
			   
				<center>
				 Profile Picture
				</center>
		  
   <?// DEFAULT PICTURE \\?><?// DEFAULT PICTURE \\?>
   <?// DEFAULT PICTURE \\?><?// DEFAULT PICTURE \\?>
	 <div class='text-center' style='border:1px solid #fff;border-top:0;border-radius:0 0 8px 8px;box-shadow:0px 4px 5px #111;background-color:#aaa;padding:5px;'>
		  

			<img src='upl/Brandon2.jpg' id='dfltPicture' title='Profile Picture' width='160px' class='img-rounded' style='max-width:165px;max-height:180px;'/>
			 
	  <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/><!--bytes-->
	  <input name="uploadedfile" type="file" type='button' class='btn btn-block btn-warning' style='border-bottom:#aaa;'  />

	  <input type="submit" name="newPic" value="Upload" type='button' class='btn btn-sm btn-info pull-left' style='color:#eee;font-weight:bold;width:100%;border:1px solid white;' ></input>
 	 </div>
			 </p>			 
			 </div>
			</td>
			<td colspan='65%'>
			 <?php
			  $picCntr = 0;
			   global $picCntr;
			 ?>
			 <div id='dragDfltPic' class='well well-sm'>
			  <ul class='list-group list-inline' >
	   <?// PIC GALLERY \\?><?// PIC GALLERY \\?>
	   <?// PIC GALLERY \\?><?// PIC GALLERY \\?>
		
		
		<?php include($_SERVER['DOCUMENT_ROOT']."/m8tom8/incl/pics.php"); ?>
 			   <li class='list-group-item' id='<?="pic".$picCntr++?>' onMouseOver='this.getElementsByTagName("small")[0].className="fade in"' onMouseOut='this.getElementsByTagName("small")[0].className="fade"' onDrag='this.getElementsByTagName("small")[0].style.display="none"' onMouseDown='drag2where(this.id)'>
			    <?//POP UP\\?>
			    <small class='fade' style='padding:1px 3px;margin-top:-20px;color:#fff;background-color:rgba(0,0,0,0.30);position:absolute;border-radius:2px;'>
				 <b style='font-size:80%;'>DOUBLE CLICK TO DRAG</b>
				</small>
				 
				 <img src='upl/Brandon1.jpg' title='Your Picture' width='100px' class='img-responsive img-rounded' style='cursor:pointer;' />
 			    				
			   </li>
			   <li class='list-group-item' id='<?="pic".$picCntr++?>' onMouseOver='this.getElementsByTagName("small")[0].className="fade in"' onMouseOut='this.getElementsByTagName("small")[0].className="fade"' onDrag='this.getElementsByTagName("small")[0].style.display="none"' onMouseDown='drag2where(this.id)'>
			    <?//POP UP\\?>
			    <small class='fade' style='padding:1px 3px;margin-top:-20px;color:#fff;background-color:rgba(0,0,0,0.30);position:absolute;border-radius:2px;'>
				 <b style='font-size:80%;'>DOUBLE CLICK TO DRAG</b>
				</small>
				 
				 <img src='upl/Brandon2.jpg' title='Your Picture' width='100px' class='img-responsive img-rounded' style='cursor:pointer;' />
 			    				
			   </li>
			   <li class='list-group-item' id='<?="pic".$picCntr++?>' onMouseOver='this.getElementsByTagName("small")[0].className="fade in"' onMouseOut='this.getElementsByTagName("small")[0].className="fade"' onDrag='this.getElementsByTagName("small")[0].style.display="none"' onMouseDown='drag2where(this.id)'>
			    <?//POP UP\\?>
			    <small class='fade' style='padding:1px 3px;margin-top:-20px;color:#fff;background-color:rgba(0,0,0,0.30);position:absolute;border-radius:2px;'>
				 <b style='font-size:80%;'>DOUBLE CLICK TO DRAG</b>
				</small>
				 
				 <img src='upl/Brandon3.jpg' title='Your Picture' width='100px' class='img-responsive img-rounded' style='cursor:pointer;' />
 			    				
			   </li>
			   <li class='list-group-item' id='<?="pic".$picCntr++?>' onMouseOver='this.getElementsByTagName("small")[0].className="fade in"' onMouseOut='this.getElementsByTagName("small")[0].className="fade"' onDrag='this.getElementsByTagName("small")[0].style.display="none"' onMouseDown='drag2where(this.id)'>
			    <?//POP UP\\?>
			    <small class='fade' style='padding:1px 3px;margin-top:-20px;color:#fff;background-color:rgba(0,0,0,0.30);position:absolute;border-radius:2px;'>
				 <b style='font-size:80%;'>DOUBLE CLICK TO DRAG</b>
				</small>
				 
				 <img src='upl/Brandon4.jpg' title='Your Picture' width='100px' class='img-responsive img-rounded' style='cursor:pointer;' />
 			    				
			   </li>
			   <li class='list-group-item' id='<?="pic".$picCntr++?>' onMouseOver='this.getElementsByTagName("small")[0].className="fade in"' onMouseOut='this.getElementsByTagName("small")[0].className="fade"' onDrag='this.getElementsByTagName("small")[0].style.display="none"' onMouseDown='drag2where(this.id)'>
			    <?//POP UP\\?>
			    <small class='fade' style='padding:1px 3px;margin-top:-20px;color:#fff;background-color:rgba(0,0,0,0.30);position:absolute;border-radius:2px;'>
				 <b style='font-size:80%;'>DOUBLE CLICK TO DRAG</b>
				</small>
				 
				 <img src='upl/Brandon5.jpg' title='Your Picture' width='100px' class='img-responsive img-rounded' style='cursor:pointer;' />
 			    				
			   </li>
 

			<?/// DROPOFF EDIT OR TRASH \\\\?>
				<br>
				 <li id='dropBin4Pix' class='well list-inline' style='display:none;width:99%;min-height:90px;background-color:#ddd;padding:5px 8px;' >
									
				   <div class='well well-lg' id='dropTrash' style='width:49%;float:left;display:block;'>
					<img src='/m8tom8/css/img/trash.png' width='40%'  class='img-rounded img-responsive center-block' title='trash' />
				   </div>
								
				   <div class='well well-lg' id='dropEdit' style='width:49%;float:left;display:block;'>
					<img src='/m8tom8/css/img/edit.png' width='40%' class='img-rounded img-responsive center-block' title='edit' />			   				   
				   </div>			   
				 </li>			   
				
			  </ul>
			 </div>
			</td>
		   </tr>
		   <tr>
		    <td colspan='100%'>
			
	<?// EDIT PROFILE FORMS \\?>
	<?// EDIT PROFILE FORMS \\?>
		<div class='well well-sm' >
		   <div class='table well well-lg' style='padding:5px 9px;'>
			<table class='table table-responsive table-condensed'>
			 <tbody>
			  <tr>
			   <th colspan='100%'>
			    <span class='center-block text-center' style='font-size:140%;background-color:rgba(0,0,0,0.05);'>
				 
				 <?/// PROFILE EDIT COLLAPSE BUTTON \\?>
				 <button class='btn btn-lg btn-info' type='button' onmousedown='toggleProfEdit(this);' >
					Profile Information
					&nbsp;&nbsp;
				  <span class='caret'>&nbsp;</span>
				 </button>
				 
				</span>
			   </th>
			  </tr>
 <?// PERSONAL PROFILE INFO \\?> <?// PERSONAL PROFILE INFO \\?>
 <?// PERSONAL PROFILE INFO \\?> <?// PERSONAL PROFILE INFO \\?>
 <?// PERSONAL PROFILE INFO \\?> <?// PERSONAL PROFILE INFO \\?>
 <?// PERSONAL PROFILE INFO \\?> <?// PERSONAL PROFILE INFO \\?>
			  <tr>
			   <td colspan='' >
			   
		<div class='profEditTgl fade'>

		
		 <div class='center-block' id='ntrstCont'>
		  <ul class='list-inline text-center'>
		   <li>	
			<b class='label label-primary'>I'm Interested in Girls</b>
			 <input type='radio' onchange='upDbMemIntrst(this.value);$("#m8_pref_guy").show();$("#m8_pref_lady").hide();$("#profEditBtmTabs").slideDown("fast");$("#ntrstCont").slideUp("fast");' class='input-lg form-control' name='gender_srch' value='man' />
		   </li>
		   <li>
			<b class='label label-primary'>I'm Interested in Guys</b>	
			 <input type='radio' onchange='upDbMemIntrst(this.value);$("#m8_pref_lady").show();$("#m8_pref_guy").hide();$("#profEditBtmTabs").slideDown("fast");$("#ntrstCont").slideUp("fast");'  class='input-lg form-control' name='gender_srch' value='woman' /> 
		   </li>
		  </ul>			   
		 </div>
		
		<?/// TABS 4 BTM EDIT FRMS \\\?>
		<?/// TABS 4 BTM EDIT FRMS \\\?>
		  <div id='profEditBtmTabs' style='display:none;min-height:270px;'>
			<ul class='list-inline'>
			 <li >
			  <a href='#tab1' type='button' class='' >
			   Basic-Info
			  </a>
 		   </li>
		   <li >
			  <a href='#tab2' type='button' class='' >
			   Your-Interests 
			  </a>
 		   </li>
		   <li >
			  <a href='#tab3' type='button' class='' >
			   About-You
			  </a>
 		   </li>
		   <li >
			  <a href='#tab4' type='button' class='' >
			   Your-Account
			  </a>
 		   </li>
		  </ul>
		  
		<?// BTM EDIT FRMS \\?>  
		<div id='tab1'>
		 <form>
		  <div id='t1'>
		 
			<div style='margin-bottom:10px;'>
			 <label for='quick_desc' class='label label-info'>Job or degree</label>
			  <input type='text' name='quick_desc' maxlength='60' class='form-control input-sm' style='width:100%;' placeholder='Titles, Job, Skills' />
			</div>

			<div style='margin-bottom:10px;'>
			 <label for='have_kids' class='label label-info'>Do you have kids?</label>
			  <select name='have_kids' class='form-control' >
			   <option value='no' >No</option>			  
			   <option value='yes'>Yes</option>
			  </select>
			</div>
			
			<div style='margin-bottom:10px;'>
			 <label for='ethnicity' class='label label-info'>Your Ethnicity</label>
			  <select name='ethnicity' class='form-control' >
				 <option ></option>			
				 <option value='this.inmerHTML'>African American</option>
				 <option value='this.inmerHTML'>Hispanic</option>
				 <option value='this.inmerHTML'>African</option>
				 <option value='this.inmerHTML'>Caucasian</option>
				 <option value='this.inmerHTML'>Indian</option>
				 <option value='this.inmerHTML'>Middle Eastern</option>
				 <option value='this.inmerHTML'>Asian</option>
			  </select>
			 </div>
			</div>
			
		  <center>
			<span id='subtBtnGrp' class='btn-group btn-group-md' >
				<input onmousedown='submitMsg()' type='button' class='btn btn-info' name='sndProfInfo' value='Done' style='float:left;width:70px;' />
				<input type='reset' class='btn btn-info' name='' value='Clear' style='float:left;width:70px;' />								   				
			</span>				  
		  </center>			
		 </form>			
		</div>
		<?/// END tab1 \\\?>
		
		<div id='tab2'> 
		 <form>
		  <div id='t2'>
		 
			<div style='margin-bottom:10px;padding:0 10px;'>
			 <b class='label label-primary center-block lead'>
			  <button class='btn btn-primary' type='button' onclick='showTblHair()'>
			   Select the most attractive hair and eye color combination
			   &nbsp;&nbsp;
			   <span class='caret'>&nbsp;</span>
			  </button>
			 </b>
 			   <table id='tblHairEye' class='table-condensed table-responsive text-center table-striped' width='100%' align='center' >
				<tbody>
				 <tr>
				  <td>
				<label class='label label-info pull-right'>Red hair light-brown eyes</label>
				  </td>
				  <td>
			    <input class='form-control' type='checkbox' value='Red hair light-brown eyes' style='width:20px; ' />
				  </td>
				  <td>
			     <label class='label label-info pull-right'>Red hair blue eyes</label>
				   </td>
				   <td>
				 <input class='form-control' type='checkbox' value='Red hair blue eyes' style='width:20px; ' />
 				   </td>
				  </tr>
				  <tr>
 				   <td>
				 <label class='label label-info pull-right'>Red hair brown eyes</label>				   
				   </td>
				   <td>
 	 	 	 	<input class='form-control' type='checkbox' value='Red hair brown eyes' style='width:20px; ' /> 
 				   </td>
 				   <td>
				 <label class='label label-info pull-right'>Red hair hazel-green eyes</label>
 				   </td>
 				   <td>				   
 	 	 	 	<input class='form-control' type='checkbox' value='Red hair hazel-green eyes' style='width:20px; ' /> 
 				   </td>
				  </tr>
				  <tr>				   
 				   <td>
				 <label class='label label-info pull-right'>Blonde hair light-brown eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Blonde hair light-brown eyes' style='width:20px; ' /> 
 				   </td>
 				   <td>
				 <label class='label label-info pull-right'>Blonde hair blue eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Blonde hair blue eyes' style='width:20px; ' />
 				   </td>
				  </tr>
				  <tr>				   
 				   <td>
				 <label class='label label-info pull-right'>Blonde hair brown eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Blonde hair brown eyes' style='width:20px; ' />
 				   </td>
 				   <td>
				 <label class='label label-info pull-right'>Blonde hair hazel-green eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Blonde hair hazel-green eyes' style='width:20px; ' />
 				   </td>
				  </tr>
				  <tr>				   
 				   <td>
				 <label class='label label-info pull-right'>Brown hair light-brown eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Brown hair light-brown eyes' style='width:20px; ' />
 				   </td>
 				   <td>
				 <label class='label label-info pull-right'>Brown hair blue eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Brown hair blue eyes' style='width:20px; ' />
 				   </td>
				  </tr>
				  <tr>				   
 				   <td>
				 <label class='label label-info pull-right'>Brown hair brown eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Brown hair brown eyes' style='width:20px; ' />
 				   </td>
 				   <td>
				 <label class='label label-info pull-right'>Brown hair hazel-green eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Brown hair hazel-green eyes' style='width:20px; ' />
 				   </td>
				  </tr>
				  <tr>				   
 				   <td>
				 <label class='label label-info pull-right'>Black hair light-brown eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Black hair light-brown eyes' style='width:20px; ' />
 				   </td>
 				   <td>
				 <label class='label label-info pull-right'>Black hair blue eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Black hair blue eyes' style='width:20px; ' />
 				   </td>
				  </tr>
				  <tr>				   
 				   <td>
				 <label class='label label-info pull-right'>Black hair brown eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Black hair brown eyes' style='width:20px; ' />
 				   </td>
 				   <td>
				 <label class='label label-info pull-right'>Black hair hazel-green eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Black hair hazel-green eyes' style='width:20px; ' />
 				   </td>
				  </tr>
				  <tr>				   
 				   <td>
				 <label class='label label-info pull-right'>Brunette hair blue eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Brunette hair blue eyes' style='width:20px; ' />
 				   </td>
 				   <td>
				 <label class='label label-info pull-right'>Brunette hair brown eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Brunette hair brown eyes' style='width:20px; ' />
 				   </td>
				  </tr>
				  <tr>				   
 				   <td>
				 <label class='label label-info pull-right'>Brunette hair hazel-green eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Brunette hair brown eyes' style='width:20px; ' />
				   </td>
				   <td>
				 <label class='label label-info pull-right'>Brunette hair brown eyes</label>
 				   </td>
 				   <td>		
 	 	 	 	<input class='form-control' type='checkbox' value='Brunette hair hazel-green eyes' style='width:20px; ' />
				   </td>
				  </tr>
			   <tbody>
			  </table>	
				</div>
			
				<div style='margin-bottom:10px;'>
				 <label for='' class='label label-info'>What type of partner are you looking for in relationship?</label>
				  <select name=''  class='input-sm form-control' >
				   <option></option>
				   <option value='Deep and romantic'>Deep and romantic</option>
				   <option value='Passionate and loving'>Passionate and loving</option>
				   <option value='Caring and friendly'>Caring and friendly</option>
				   <option value='Leading and intense'>Leading and intense</option>
				   <option value='Shy but deep and kind'>Shy but deep and kind</option>
				   <option value='Fun but chill and smart'>Fun but chill and smart</option>
				  </select>		
				</div>
				 
				<div id='m8_pref_lady' style='display:none;margin-bottom:10px;'>
				 <label for='m8_pref_lady' class='label label-info  '>My Man Must be...</label>
				  	
				  <select name='m8_pref_lady'  class='input-sm form-control' >
				   <option></option>
				   <option value='this.innerHTML'>Motivated and Serious</option>
				   <option value='this.innerHTML'>Awesome Body</option>
				   <option value='this.innerHTML'>Very Intelligent</option>
				   <option value='this.innerHTML'>Sexy Swag</option>
				   <option value='this.innerHTML'>Fairly Tall</option>
				   <option value='this.innerHTML'>Video Gamer</option>
				   <option value='this.innerHTML'>God Loving</option>
				   <option value='this.innerHTML'>Open Minded</option>
				   <option value='this.innerHTML'>Music-Movie Guru</option>		
				  </select>
				</div> 
				 
				<div id='m8_pref_guy' style='display:none;margin-bottom:10px;'>
				 <label for='m8_pref_guy' class='label label-info'>My Woman Must be...</label>
				  <select name='m8_pref_guy'  class='input-sm form-control' >
				   <option></option>					   
				   <option value='this.innerHTML'>Motivated and Serious</option>
				   <option value='this.innerHTML'>Very Intelligent</option>
				   <option value='this.innerHTML'>Great Body</option>
				   <option value='this.innerHTML'>Sexy Personality</option>
				   <option value='this.innerHTML'>Open Minded</option>
				   <option value='this.innerHTML'>Video Gamer</option>
				   <option value='this.innerHTML'>God Loving</option>
				   <option value='this.innerHTML'>Music-Movie Guru</option>				   
				  </select>	
				</div>
			</div>
			
			  <center>
				<span id='subtBtnGrp' class='btn-group btn-group-md' >
					<input onmousedown='submitMsg()' type='button' class='btn btn-info' name='sndProfInfo' value='Done' style='float:left;width:70px;' />
					<input type='reset' class='btn btn-info' name='' value='Clear' style='float:left;width:70px;' />								   				
				</span>				  
			  </center>			
 		  </form>
		</div>
		<?/// END tab2 \\\?>
			
		<div id='tab3'>
 		 <form>
		  <div id='t3'>
		   <div style='margin-bottom:10px;'>
		    <label for='prof_desc' class='label label-primary'>Personal Description</label>
			 <textarea class='form-control' name='prof_desc' placeholder='Tell me about yourself'></textarea>
		   </div>
		  
		  <div style='margin-bottom:10px;'>
		   <label for='prof_hobbies' class='label label-primary'>what would you do on a friday night</label>
			<textarea class='form-control' name='prof_desc' placeholder='Things you do in your free time'></textarea>
		  </div>
	     </div>
 
		  <center>
			<span id='subtBtnGrp' class='btn-group btn-group-md' >
				<input onmousedown='submitMsg()' type='button' class='btn btn-info' name='sndProfInfo' value='Done' style='float:left;width:70px;' />
				<input type='reset' class='btn btn-info' name='' value='Clear' style='float:left;width:70px;' />								   				
			</span>				  
		  </center>			
         </form>	
		</div>
		
		<?/// END tab3 \\\?>
			
		<div id='tab4' >
		  <form>
		   <div id='t4'>
			 <span class='center-block label label-default'>
			  <strong>
			  Profile Settings
			  </strong>
			</span>  
 				<ul class='list-inline center-block bg-muted' >
				 <li class='list-group-item' style='width:49%;min-height:110px;'>
				  <center>
				   <strong>
				    Make profile Private or Public
					<br>
					 <sub class='text-muted'> 
					  Allow only friends/public to see profile.
					 </sub>
				   </strong>
				  <br> 
				   <span class='btn-group btn-group-md'>
					<button type='button' class='btn btn-primary'>
					    Public
					</button>
					<button type='button' class='btn btn-primary'>
					    Private
					</button>
				   </span>				   
				  </center>
				 </li>
				 <li class='media media-right' style='width:50%;min-height:110px;'>
				 
				    <small class='text-muted text-center'>
				     Member-Info
				    </small>
				   <br>

				  <span class='bg-warning'>
				   <b class='label label-warning'>
 				    Email:
				   </b>
					  ex@boob.com
 				  </span>
			     <br>
				  <span class='bg-warning'>
				   <b class='label label-warning'>
 				    Name:
				   </b>
					  exName
 				  </span>
			     <br>
				  <span class='bg-warning'>
				   <b class='label label-warning'>
 				    Birthday
				   </b>
					  10-29-1989
 				  </span>
				 </li>
				</ul>
			  <?//// ACCOUNT STATUS \\\\?>
			  <p align='center' valign='center' class='bg-success'>
			   <b class='text-center text-muted'>
			    Account Status:
			    <text class='badge'>
				 Good
				</text>				
			   </b>

			  </p>
			</div>
		   
		  <center>
			<span id='subtBtnGrp' class='btn-group btn-group-md' >
				<input onmousedown='submitMsg()' type='button' class='btn btn-info' name='sndProfInfo' value='Done' style='float:left;width:70px;' />
				<input type='reset' class='btn btn-info' name='' value='Clear' style='float:left;width:70px;' />								   				
			</span>				  
		  </center>			
         </form>				  	
		</div>
				
<?//// END BTM FRM 'TABS' \\\?>
</div>	
<?//// END BTM FRM 'TABS' \\\?>
		
				 <span style='display:inline-block;width:100%;margin:0 auto;background-color:#eee;border-radius:10px;border:1px solid #ccc;'>
				   
				   <?/// MESSAGE TO DISPLAY WHEN FORM SUBMITTED \\\?>
				   <small id='msgOnSubmit' class='fade' style='display:none;text-align:center;color:#555;font-size:145%;font-weight:bold;'>
				      &nbsp;&nbsp;
					   You have Successfully updated your Profile!
				   </small>		
				   

					
				 </span>
			    </div>
			<?/// END profEditTglSectn \\\?>
			
			
	  <?/// MOTD \\\?><?/// MOTD \\\?>
	  <?/// MOTD \\\?><?/// MOTD \\\?>
	    <div class='center-block text-center list-group-item-info' id='motd'>
		   <h2 class='bg-primary'>
		   Message of the Day
		   </h2>			
			<p align='center well well-lg' >

 
			  <?// NAME \\?>
			  <strong class='text-center'>
			   <?="Brandon O."?>
			  </strong>
			  
				 <br>
				 
				<?// MSG \\?>
				<?=nl2br(" Welcome to M8 2 D8!Hope you enjoy your new account. \n If you have any questions just give me a shoud")?>
				 
			</p>			
	    </div>
	
			   </td>
			  </tr>
			 </tbody>
			</table>
		   </div>
		  </form>
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
	    <div class='col-lg-1'></div>		 
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
function submitMsg(){
	document.getElementById("msgOnSubmit").className = "fade in";
	 $("#msgOnSubmit").fadeTo(2500, ".9", function(){
	  $("#msgOnSubmit").fadeTo(500, "0", function(){ 	 
	   $("#msgOnSubmit").attr("class","fade");
		 document.getElementById("msgOnSubmit").style.display = "none";
	   })
	 })
}
function upDbMemIntrst(manOrWoman){
	$(function(){
		$.post('', {manOrWoman:manOrWoman}, function(){
			///AFTER DB UPDATE: CR8 DB_CHKR VIA PHP TO CONFIRM 'man-woman' INTEREST ISSET
			///AND IF ISSET: REMOVE 'display:none' FROM #profEditBtmTabs VIA PHP
		})
	})
}

$(function(){
	$('#profEditBtmTabs').tabs();
})
</script>	
<script>
$(function(){
	$('#usrMenu').button({
	icons:{
		 secondary: 'ui-icon ui-icon-home'
		}, text:true
	});
	////inbox//////////////
	$('#profTabsLeft').tabs();
	 ////inbox rply delete btn////////////
	 $('#delRplyBtn').buttonset();
	  /////inbox msg////////////
	  $('#inbox').accordion({active:false, collapsible:true});
	
})
</script>
<script>
function drag2where(li_Id){
   li_Img = document.getElementById(li_Id).getElementsByTagName("img")[0].src;	
   li_Id = '#'+li_Id;
   /////////DRAG/////////////
	$(function(){
		$(li_Id).draggable({containment:'#rightTbl', revert:true, opacity:'.7', 
			start: function(){
				$(li_Id).css('z-index','900');
				$('#dropBin4Pix').fadeIn("fast");
 			},
			stop: function(){
				$(li_Id).css('z-index','100');				
				$('#dropBin4Pix').fadeOut("fast");
			}
		})
		
   /////////DROP/////////////
		$('#dropDfltPic').droppable({tolerance:'touch', accept:li_Id,
 			over: function(){
				$('#dropDfltPic').css('background-color','#bbb');
				$('#popupDflt').attr('class','lead fade in');
			},
			out: function(){
				$('#dropDfltPic').css('background-color','#ddd');
				$('#popupDflt').attr('class','lead fade');
			},
			drop: function(){
				$('#popupDflt').attr('class','lead fade');
				$('#dfltPicture').attr('src',li_Img);
			}
		});	
		

		$('#dropTrash').droppable({tolerance:'touch', accept:li_Id, 
			over: function(){
				$('#dropTrash').css('background-color','#ff3333');
			
			},
			out: function(){
				$('#dropTrash').css('background-color','');
				
			},
			drop: function(){
				$('#dropTrash').css('background-color','#ccc');
				
			}
		});
	

	$('#dropEdit').droppable({tolerance:'touch', accept:li_Id, 
			over: function(){
				$('#dropEdit').css('background-color','#60afff');
			
			},
			out: function(){
				$('#dropEdit').css('background-color','');
				
			},
			drop: function(){
				$('#dropEdit').css('background-color','#ccc');
				
			}
		});
   })
}
</script>
<script>
var tblHair = document.getElementById("tblHairEye");
tblHair.style.display = "none";

function showTblHair(){
	$(tblHair).toggle();
}
</script>
<script>
var profEdit = document.getElementsByClassName("profEditTgl")[0];
profEdit.style.display = "none";

function toggleProfEdit(elm){
	 
	 elm.onclick = function(){
		$('#motd').toggle();
		 if(profEdit.className == "profEditTgl fade in"){
			 profEdit.style.display = "none";
			 profEdit.className = "profEditTgl fade";
		}else if(profEdit.className == "profEditTgl fade"){
			profEdit.style.display = "block";		 
			profEdit.className = "profEditTgl fade in";
	 }
   }
}
</script>
 
</html>