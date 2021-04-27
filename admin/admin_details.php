<?php include("proj_resources/inc_files/header_tag.php");


$msg="";
$msg1="";
if(isset($_REQUEST['action']))
	{
		if($_REQUEST['action']=='pub')
			{
				mysql_query("update admin_login set status=1 where id=".$_REQUEST['id']."");
				$msg="Publish Successfully";
			}
		if($_REQUEST['action']=='unpub')
			{
				mysql_query("update admin_login set status=0 where id=".$_REQUEST['id']."");
				$msg="Unpublish Successfully";
			}
		if($_REQUEST['action']=='delete')
			{
				mysql_query("delete from admin_login  where id=".$_REQUEST['id']."");
				$msg="Deleted Successfully";
			}
		header("location:".$pagename."?page=".$_GET['page']."&msg=".$msg."");
		exit();
		
	}
	
if(isset($_GET['order']))
{
$id=$_GET['id'];
$order=$_GET['order'];
$page=$_GET['page'];
if($_GET['d']=='up')
	{
		$res=mysql_query("select max(sort1) as sort1 from admin_login where sort1<".$order."");
		$row=mysql_fetch_array($res);
		$new_rec=$row['sort1'];
		
		
		
		$res1=mysql_query("select * from admin_login where sort1=".$new_rec."");
		$row1=mysql_fetch_array($res1);
		$old_rec=$row1['id'];
		
		
		
		mysql_query("UPDATE admin_login SET sort1=".$order." WHERE id=".$old_rec."");
		mysql_query("UPDATE admin_login SET sort1=".$new_rec." WHERE id=".$id."");
	
	}
if($_GET['d']=='down')
	{
		$res=mysql_query("select min(sort1) as sort1 from admin_login where sort1>".$order."");
		$row=mysql_fetch_array($res);
		$new_rec=$row['sort1'];
		
		
		
		$res1=mysql_query("select * from admin_login where sort1=".$new_rec."");
		$row1=mysql_fetch_array($res1);
		$old_rec=$row1['id'];
		
		
		
		mysql_query("UPDATE admin_login SET sort1=".$order." WHERE id=".$old_rec."");
		mysql_query("UPDATE admin_login SET sort1=".$new_rec." WHERE id=".$id."");
	}
		$msg="Order Successfully Changed";
		header("location:".$pagename."?page=".$_GET['page']."&msg=".$msg."");
		exit();
}


if(isset($_POST['all_delete']))
		{

	foreach($_POST['all_delete'] as $delete_id)
		{

		
			mysql_query("delete from admin_login  where id=".$delete_id."");
			
		}
		
		$msg="Deleted Successfully";
		header("location:".$pagename."?page=".$_GET['page']."&msg=".$msg."");
		exit();
	}

if(isset($_REQUEST['submit']))
	{
		$page_title= mysql_real_escape_string($_POST['page_title']);
		$page_name= mysql_real_escape_string($_POST['page_name']);
		$keywords =  mysql_real_escape_string(str_replace("'","&#8217;", $_POST['keywords']));
		$metatags =  mysql_real_escape_string(str_replace("'","&#8217;", $_POST['metatags']));
		$description= addslashes(urlencode($_POST['description']));
		
		// Add new page code start
		if($_POST['file_action']=='new')
		{
			$find_max_res=mysql_query("SELECT MAX(sort1) as sort1 FROM admin_login");
			$find_max_count=mysql_num_rows($find_max_res);
			 if($find_max_count!=0)
				{
					$find_max_row=mysql_fetch_array($find_max_res);
					$sort1=$find_max_row['sort1']+1;
				}
			else
				{
					$sort1=1;
				}
				$query=mysql_query("insert into admin_login(sort1,page_title,page_name,page_keywords,page_metatags,page_description,status) values ('$sort1','$page_title','$page_name','$keywords','$metatags','$description',1)");
				
				header("location:".$pagename."?msg=Page added Successfully");
		
			}	
		// new page code End	

		// Edit page code start
			if($_POST['file_action']=='update')
			{
		     
			 if($_POST['new_username']!="")
			 {
			   $newname=$_POST['new_username'];
			 }
			 else
			 {
			 $newname=$_POST['old_username'];
			 }
			 if($_POST['new_passwrd']!="")
			 {
			   $newpasswrd=$_POST['new_passwrd'];
			 }
		      else
			 {
			 $newpasswrd=$_POST['old_passwrd'];
			 } 
			 
				$query=mysql_query("update admin_login set 
				username ='$newname',
				password ='$newpasswrd'
				where id='".$_POST['rec_id']."'");
		
				header("location:".$pagename."?page=".$_POST['page_id']."&msg=Page edited Successfully");
			}	
		// Edit page code End	

	}


if(isset($_GET['msg']))
{
		$msg=$_GET['msg'];}
		
$total_record = mysql_num_rows(mysql_query("select * from admin_login"));
$pagination->setTotalRecords($total_record);

// Set Target Page
$pagination->setLink("".$pagename."?page=%s");	
// now use this SQL statement to get records from your table
$sql = "SELECT * FROM admin_login order by id " . $pagination->getLimitSql();
$query=mysql_query($sql);
$order_row=mysql_num_rows($query);


$edit_page = mysql_fetch_array(mysql_query("SELECT * FROM admin_login order by id"));

 ?>
<script language="javascript">

	var string=/^[a-zA-Z ]+$/;
	var string2=/^[a-zA-Z0-9._ ]+$/;
	var string3=/^[a-zA-Z0-9_]+$/;
	var numbr=/^[0-9]+$/;
	var email=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z0-9.]{2,6}$/;
function valid()
	{
	
	if(string2.test(document.getElementById("page_title").value)==false)
		{
	 
		inlineMsg('page_title','Please!  Enter Valid Page Title',2);
		return false;
		 
		}
	if(string2.test(document.getElementById("page_name").value)==false)
		{
	 
		inlineMsg('page_name','Please!  Enter Valid Page Name',2);
		return false;
		 
		}

}
</script>
<body>
<div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
<?php include("proj_resources/inc_files/left_sidebar.php"); ?>	
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome <?php echo $_SESSION['adm']; ?>!</h2>
	
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Change Admin Details </h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" <?php if(!isset($_GET['act'])) { ?>  class="default-tab" <?php } ?>>Detail</a></li> <!-- href must be unique and match the id of target div -->
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content<?php if(!isset($_GET['act'])) { ?> default-tab <?php } ?>" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					<?php if($msg!="") { ?>	
									<div class="notification success png_bg">
				<a href="#" class="close"><img src="proj_resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div><?php echo $msg; ?></div>
			</div>
			<?php } ?>
            <?php if($msg1!="") { ?>	
			<div class="notification error png_bg">
				<a href="#" class="close"><img src="proj_resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					<?php echo $msg1; ?>
				</div>
			</div>
            <?php } ?>
							<form action="#" method="post">
							<input type="hidden" name="file_action" value="update">
							
							<input type="hidden" name="rec_id" value="<?php echo $edit_page['id']; ?>">
			
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Old User Name:</label>
										<input class="text-input small-input" type="text" id="old_username" name="old_username"  value="<?php echo $edit_page['username'];?>" />
								</p>
                                	<p>
									<label>Old Password:</label>
										<input class="text-input small-input" type="password" id="old_passwrd" name="old_passwrd"  value="<?php echo $edit_page['password'];?>" />
								</p>
								
								<p>
									<label>New User Name:</label>
										<input class="text-input small-input" type="text" id="new_username" name="new_username"  value="" />
								</p>
								
								<p>
									<label>New Password:</label>
										<input class="text-input small-input" type="text" id="new_passwrd" name="new_passwrd"  value="" />
								</p>
								
								
								
								<p>
									<input class="button" type="submit" name="submit" value="Submit"  onclick="return valid();" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
					</div> <!-- End #tab1 -->
					
					 <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
	
			<div class="clear"></div>
			
			
			<!-- Start Notifications -->
			
			
			
			<?php include("proj_resources/inc_files/footer_inc.php"); ?>	
			

			
			<!-- End Notifications -->
			
			<!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div>
</body>
</html>