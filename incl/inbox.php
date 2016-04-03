<?//// INBOX CONTENT \\\?>				 
	 <li name='<?=$listCnt++?>'>
		<h4>				   
		 <b>From: </b> 
		  <?="Bobinnaa"?>
		 				
		 <?/// DEL & RPLY BTN \\\?>
		  <div id='delRplyBtn'>
			<button type='button' class='btn' onclick='var li = "<?='#rplyBox'.$listCnt?>"; $(li).toggle("fast");' >Reply</button>
			<button type='button' class='btn' onclick='' >Delete</button>
			
			<?/// SENDER AVATAR 'WHO USR IS TALKING 2'  \\\?>
			 <img src='/m8tom8/prof/upl/Brandon1.jpg' class='img-responsive img-circle pull-right' width='35px' />
			
			
		  </div>
		</h4>
		  <?// MESSAGE \\?>
		  <div id='cont' style='background-color:rgb(234, 227, 227);font-weight:normal;text-align:left;word-wrap:break-word;font-size:80%;'>
			
			<span style='display:block;width:100%;border-radius:5px;overflow-y:auto;padding:1px 3px;margin-bottom:5px;color:#777;border:1px solid #999;'>
			  <sub class='pull-left'>
			   <b><?="Me"?></b>
			  </sub>
			  <sub class='pull-right'>
			   <?=date('m-d-y')?>
			  </sub>
			 <br>
			<?=nl2br("content content cont  content content content ent ent content")?>
			</span>
			
			
			<?// REPLY \\?>
			<span style='display:inline-block;width:auto;padding:1px 3px;border-radius:4px;overflow-y:auto;background-color:rgb(250, 216, 216);margin-bottom:5px;color:#777;border:1px solid #999;'>
			  <sub class='pull-left'>
			   <b><?="Usr"?></b>
			  </sub>
			  <sub class='pull-right'>
			   <?=date('m-d-y')?>
			  </sub>
			 <br>
			<?=nl2br("content content content content")?>
			</span>
			
			
		  </div>
	   <div id='rplyBox<?=$listCnt?>' style='display:none;'>
		<textarea class='form-control input-lg' placeholder='Reply to Sender' style='border-radius:0 0 10px 10px;'></textarea>			  
		 <button type='button' class='btn btn-sm' onclick='' style='width:100%;'>Send Reply</button>
	   </div>			 
	 </li>

	<?///END OF INBOX\\\?>
