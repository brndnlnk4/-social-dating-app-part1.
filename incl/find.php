<table class='table table-responsive table-condensed' >
 <tbody>
  <tr style='background-color:rgba(0,0,0,0.03);'>
   <th colspan='100%' class='text-center'>
	Your Results 
   </th>
  </tr>
<tr align='center' valign='center'>
<?php
/*
/////////////////////////////////////////////	
/////////////PAGNINATION/////////////////////	
/////////////PAGNINATION/////////////////////	
/////////////////////////////////////////////	
 else{
    ///CHECK 4 ROWS IN VIDEO CMT TABLE///
    $Q = mysqli_query($dbCon,"SELECT * FROM `videos`") or die(mysqli_error($dbCon));
    /////////////////////////////////////
    if($Q){
        $r = mysqli_query($dbCon,"SELECT * FROM `videos`") or die(mysqli_error($dbCon));								 
        $rowCnt = mysqli_num_rows($r);
            $rows = $rowCnt; //max rows
            $diviser = $rowCnt / 8; //each pg = max rows divided by '5', '5' = limit
            $rowCnt = ceil($diviser); ///round up everything lol
	}				
	///////////////////////////////	
    if($rows > 8){
		$offset = '0';
		if(isset($_REQUEST['page'])){
			$p = intval($_REQUEST['page'], 0);
			$offset = 8 * $p; // limit end 'offset'	
		}
	}else{
		$p = 0;
		$offset = 0;
		}
        //////////
        //////////						    
 	global $left;
    global $right;
/////if vid srch not exec
		$qq = "SELECT id,			
					video_title,
					video_images,
					video_description,
					video_category,
					video_rating_title,
					video_rating,
					video_date,
					video_publisher,
					video_src,
					video_vote
			FROM `videos`
			ORDER BY `id` DESC 
		    LIMIT 8 OFFSET ".$offset;
		 $rlt = mysqli_query($dbCon, $qq) or print(mysqli_error($dbCon));
		  $cntt = @mysqli_num_rows($rlt);
		  if($cntt > 0){	 
			while($viD = mysqli_fetch_assoc($rlt)){}
*/
?>

		   <td colspan='20%'>
			<span  id='srchRzltMemIcons'>
				<ul class='list-inline list-group '>
				
				<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
				 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/adding.png";'>
				  <img src='<?="/m8tom8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/liked.png";'>
				  <img src='<?="/m8tom8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 
				</ul>	
				
				<?//// MEM THUMBNAIL \\\\?>
				<a href='/m8tom8/mem/' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
			   <img src='/m8tom8/prof/upl/Brandon5.jpg' width='120px' class='img-responsive img-rounded' />
			  </a>
			  
   			</span>		   
		   </td>
		   <td colspan='20%'>
			<span  id='srchRzltMemIcons'>
				<ul class='list-inline list-group '>
				
				<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
				 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/adding.png";'>
				  <img src='<?="/m8tom8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/liked.png";'>
				  <img src='<?="/m8tom8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 
				</ul>	
				
				<?//// MEM THUMBNAIL \\\\?>
				<a href='/m8tom8/mem/' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
			   <img src='/m8tom8/prof/upl/Brandon5.jpg' width='120px' class='img-responsive img-rounded' />
			  </a>
			  
   			</span>		   
		   </td>
		   <td colspan='20%'>
			<span  id='srchRzltMemIcons'>
				<ul class='list-inline list-group '>
				
				<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
				 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/adding.png";'>
				  <img src='<?="/m8tom8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/liked.png";'>
				  <img src='<?="/m8tom8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 
				</ul>	
				
				<?//// MEM THUMBNAIL \\\\?>
				<a href='/m8tom8/mem/' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
			   <img src='/m8tom8/prof/upl/Brandon5.jpg' width='120px' class='img-responsive img-rounded' />
			  </a>
			  
   			</span>		   
		   </td>
		   <td colspan='20%'>
			<span  id='srchRzltMemIcons'>
				<ul class='list-inline list-group '>
				
				<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
				 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/adding.png";'>
				  <img src='<?="/m8tom8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/liked.png";'>
				  <img src='<?="/m8tom8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 
				</ul>	
				
				<?//// MEM THUMBNAIL \\\\?>
				<a href='/m8tom8/mem/' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
			   <img src='/m8tom8/prof/upl/Brandon5.jpg' width='120px' class='img-responsive img-rounded' />
			  </a>
			  
   			</span>		   
		   </td>
		   <td colspan='20%'>
			<span  id='srchRzltMemIcons'>
				<ul class='list-inline list-group '>
				
				<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
				 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/adding.png";'>
				  <img src='<?="/m8tom8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/liked.png";'>
				  <img src='<?="/m8tom8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 
				</ul>	
				
				<?//// MEM THUMBNAIL \\\\?>
				<a href='/m8tom8/mem/' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
			   <img src='/m8tom8/prof/upl/Brandon5.jpg' width='120px' class='img-responsive img-rounded' />
			  </a>
			  
   			</span>		   
		   </td>
		  </tr>
		  <tr>
		   <td colspan='20%'>
			<span  id='srchRzltMemIcons'>
				<ul class='list-inline list-group '>
				
				<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
				 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/adding.png";'>
				  <img src='<?="/m8tom8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/liked.png";'>
				  <img src='<?="/m8tom8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 
				</ul>	
				
				<?//// MEM THUMBNAIL \\\\?>
				<a href='/m8tom8/mem/' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
			   <img src='/m8tom8/prof/upl/Brandon4.jpg' width='120px' class='img-responsive img-rounded' />
			  </a>
			  
   			</span>		   
		   </td>
		   <td colspan='20%'>
			<span  id='srchRzltMemIcons'>
				<ul class='list-inline list-group '>
				
				<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
				 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/adding.png";'>
				  <img src='<?="/m8tom8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/liked.png";'>
				  <img src='<?="/m8tom8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 
				</ul>	
				
				<?//// MEM THUMBNAIL \\\\?>
				<a href='/m8tom8/mem/' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
			   <img src='/m8tom8/prof/upl/Brandon4.jpg' width='120px' class='img-responsive img-rounded' />
			  </a>
			  
   			</span>		   
		   </td>
		   <td colspan='20%'>
			<span  id='srchRzltMemIcons'>
				<ul class='list-inline list-group '>
				
				<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
				 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/adding.png";'>
				  <img src='<?="/m8tom8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/liked.png";'>
				  <img src='<?="/m8tom8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 
				</ul>	
				
				<?//// MEM THUMBNAIL \\\\?>
				<a href='/m8tom8/mem/' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
			   <img src='/m8tom8/prof/upl/Brandon4.jpg' width='120px' class='img-responsive img-rounded' />
			  </a>
			  
   			</span>		   
		   </td>
		   <td colspan='20%'>
			<span  id='srchRzltMemIcons'>
				<ul class='list-inline list-group '>
				
				<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
				 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/adding.png";'>
				  <img src='<?="/m8tom8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/liked.png";'>
				  <img src='<?="/m8tom8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 
				</ul>	
				
				<?//// MEM THUMBNAIL \\\\?>
				<a href='/m8tom8/mem/' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
			   <img src='/m8tom8/prof/upl/Brandon4.jpg' width='120px' class='img-responsive img-rounded' />
			  </a>
			  
   			</span>		   
		   </td>
		   <td colspan='20%'>
			<span  id='srchRzltMemIcons'>
				<ul class='list-inline list-group '>
				
				<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
				 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/adding.png";'>
				  <img src='<?="/m8tom8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/liked.png";'>
				  <img src='<?="/m8tom8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 
				</ul>	
				
				<?//// MEM THUMBNAIL \\\\?>
				<a href='/m8tom8/mem/' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
			   <img src='/m8tom8/prof/upl/Brandon4.jpg' width='120px' class='img-responsive img-rounded' />
			  </a>
			  
   			</span>		   
		   </td>
		  </tr>
	      <tr>
		   <td colspan='20%'>
			<span  id='srchRzltMemIcons'>
				<ul class='list-inline list-group '>
				
				<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
				 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/adding.png";'>
				  <img src='<?="/m8tom8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/liked.png";'>
				  <img src='<?="/m8tom8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 
				</ul>	
				
				<?//// MEM THUMBNAIL \\\\?>
				<a href='/m8tom8/mem/' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
			   <img src='/m8tom8/prof/upl/Brandon3.jpg' width='120px' class='img-responsive img-rounded' />
			  </a>
			  
   			</span>		   
		   </td>
		   <td colspan='20%'>
			<span  id='srchRzltMemIcons'>
				<ul class='list-inline list-group '>
				
				<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
				 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/adding.png";'>
				  <img src='<?="/m8tom8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/liked.png";'>
				  <img src='<?="/m8tom8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 
				</ul>	
				
				<?//// MEM THUMBNAIL \\\\?>
				<a href='/m8tom8/mem/' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
			   <img src='/m8tom8/prof/upl/Brandon3.jpg' width='120px' class='img-responsive img-rounded' />
			  </a>
			  
   			</span>		   
		   </td>
		   <td colspan='20%'>
			<span  id='srchRzltMemIcons'>
				<ul class='list-inline list-group '>
				
				<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
				 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/adding.png";'>
				  <img src='<?="/m8tom8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/liked.png";'>
				  <img src='<?="/m8tom8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 
				</ul>	
				
				<?//// MEM THUMBNAIL \\\\?>
				<a href='/m8tom8/mem/' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
			   <img src='/m8tom8/prof/upl/Brandon3.jpg' width='120px' class='img-responsive img-rounded' />
			  </a>
			  
   			</span>		   
		   </td>
		   <td colspan='20%'>
			<span  id='srchRzltMemIcons'>
				<ul class='list-inline list-group '>
				
				<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
				 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/adding.png";'>
				  <img src='<?="/m8tom8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/liked.png";'>
				  <img src='<?="/m8tom8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 
				</ul>	
				
				<?//// MEM THUMBNAIL \\\\?>
				<a href='/m8tom8/mem/' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
			   <img src='/m8tom8/prof/upl/Brandon3.jpg' width='120px' class='img-responsive img-rounded' />
			  </a>
			  
   			</span>		   
		   </td>
		   <td colspan='20%'>
			<span  id='srchRzltMemIcons'>
				<ul class='list-inline list-group '>
				
				<?/// MINI-SUB ADD AND LIKE BTNS 4 EACH THUMBNAIL \\\?>
				 <li class='list-item' onclick='addMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/adding.png";'>
				  <img src='<?="/m8tom8/css/img/add.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 <li class='list-item' onclick='likeMem("<?//mems id?>");this.getElementsByTagName("img")[0].src="/m8tom8/css/img/liked.png";'>
				  <img src='<?="/m8tom8/css/img/like.png"?>' width='40px' class='img-responsive img-rounded' />						 
				 </li>
				 
				</ul>	
				
				<?//// MEM THUMBNAIL \\\\?>
				<a href='/m8tom8/mem/' target='_self' class='btn btn-link' type='button' style='z-index:500;'>
			   <img src='/m8tom8/prof/upl/Brandon3.jpg' width='120px' class='img-responsive img-rounded' />
			  </a>
			  
<?/// END WHILE \\\?>
   			
			</span>		   
		   </td>
		  </tr>
		 </tbody>
		</table>		  
 <?php
 /*
//////////////////////////////////////////////////////////////////////////
//////////////////_PAGINATION_PAGE_NUMBERS_///////////////////
$rowCnt = mysqli_num_rows(mysqli_query($dbCon,"SELECT * FROM `videos`"));
$rowCnt = ceil($rowCnt / 8);
	if($rowCnt !== 0){
		print("<span class='well well-sm center-block text-center' style='max-width:100%'>");		
	  if(empty($p)){
		  $p = 0;
	  }
 		for($i = 0; $i < $rowCnt; $i++){
		  $pgNumShown = $i + 1;
			$btn = "<button type='button' class='btn btn-sm btn-link' onclick='go2pg($i)' ";
		  if(isset($p) && $i == $p){
		  	$btn .= " disabled ";
		  }
			$btn .= " >".$pgNumShown."</button>";
						
				echo $btn;
		}
		print("</span>");
	}		
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////	
*/
?>