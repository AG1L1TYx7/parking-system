<?php 
error_reporting(0);
include("proj_resources/inc_files/header_tag.php");


$msg="";
$msg1="";
if(isset($_REQUEST['action']))
	{
		if($_REQUEST['action']=='pub')
			{
				mysql_query("update tbl_slider set status=1 where id=".$_REQUEST['id']."");
				$msg="Publish Successfully";
			}
		if($_REQUEST['action']=='unpub')
			{
				mysql_query("update tbl_slider set status=0 where id=".$_REQUEST['id']."");
				$msg="Unpublish Successfully";
			}
		if($_REQUEST['action']=='delete')
			{
				mysql_query("delete from tbl_slider  where id=".$_REQUEST['id']."");
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
		$res=mysql_query("select max(sort1) as sort1 from tbl_slider where sort1<".$order."");
		$row=mysql_fetch_array($res);
		$new_rec=$row['sort1'];
		
		
		
		$res1=mysql_query("select * from tbl_slider where sort1=".$new_rec."");
		$row1=mysql_fetch_array($res1);
		$old_rec=$row1['id'];
		
		
		
		mysql_query("UPDATE tbl_slider SET sort1=".$order." WHERE id=".$old_rec."");
		mysql_query("UPDATE tbl_slider SET sort1=".$new_rec." WHERE id=".$id."");
	
	}
if($_GET['d']=='down')
	{
		$res=mysql_query("select min(sort1) as sort1 from tbl_slider where sort1>".$order."");
		$row=mysql_fetch_array($res);
		$new_rec=$row['sort1'];
		
		
		
		$res1=mysql_query("select * from tbl_slider where sort1=".$new_rec."");
		$row1=mysql_fetch_array($res1);
		$old_rec=$row1['id'];
		
		
		
		mysql_query("UPDATE tbl_slider SET sort1=".$order." WHERE id=".$old_rec."");
		mysql_query("UPDATE tbl_slider SET sort1=".$new_rec." WHERE id=".$id."");
	}
		$msg="Order Successfully Changed";
		header("location:".$pagename."?page=".$_GET['page']."&msg=".$msg."");
		exit();
}


if(isset($_POST['all_delete']))
		{

	foreach($_POST['all_delete'] as $delete_id)
		{

		
			mysql_query("delete from tbl_slider  where id=".$delete_id."");
			
		}
		
		$msg="Deleted Successfully";
		header("location:".$pagename."?page=".$_GET['page']."&msg=".$msg."");
		exit();
	}

if(isset($_REQUEST['submit']))
	{
		$title= mysql_real_escape_string($_POST['title']);
		$short_des =  mysql_real_escape_string(str_replace("'","&#8217;", $_POST['short_des']));
		$description= addslashes(urlencode($_POST['description']));
		
		$upload_dir="uploads/slider/";
		
		
		// Add new page code start
		if($_POST['file_action']=='new')
		{
			$find_max_res=mysql_query("SELECT MAX(sort1) as sort1 FROM tbl_slider");
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
			
			if($_FILES["image_name"]["name"]!="")
				{
				
        $file_name=time().$_FILES["image_name"]["name"];
		move_uploaded_file($_FILES["image_name"]["tmp_name"], $upload_dir . $file_name);
  	 	
	}
	else
	{
	$file_name="";
	}
				
				$query=mysql_query("insert into tbl_slider(sort1,title,image,short_des,description,status) values ('$sort1','$title','$file_name','$short_des','$description',1)");
				
				header("location:".$pagename."?msg=Page added Successfully");
		
			}	
		// new page code End	

		// Edit page code start
			if($_POST['file_action']=='update')
			{
			
			if($_FILES["image_name"]["name"]!="")
				{
				
        $file_name=time().$_FILES["image_name"]["name"];
		move_uploaded_file($_FILES["image_name"]["tmp_name"], $upload_dir . $file_name);
  	 	
	} 
	else
	{
	   $file_name=$_POST['image_name'];
	}
		
				$query=mysql_query("update tbl_slider set 
				title='$title',
				short_des='$short_des',
				image='$file_name',
				description='$description'
				where id='".$_POST['rec_id']."'");
		
				header("location:".$pagename."?page=".$_POST['page_id']."&msg=Page edited Successfully");
			}	
		// Edit page code End	

	}


if(isset($_GET['msg']))
{
		$msg=$_GET['msg'];}
		
$total_record = mysql_num_rows(mysql_query("select * from tbl_slider"));
$pagination->setTotalRecords($total_record);

// Set Target Page
$pagination->setLink("".$pagename."?page=%s");	
// now use this SQL statement to get records from your table
$sql = "SELECT * FROM tbl_slider  ORDER BY sort1 ASC " . $pagination->getLimitSql();
$query=mysql_query($sql);
$order_row=mysql_num_rows($query);

if(isset($_GET['act']))
{
$edit_page = mysql_fetch_array(mysql_query("SELECT * FROM tbl_slider where id='".mysql_real_escape_string($_GET['id'])."'"));
}
 ?>
<script language="javascript">

	var string=/^[a-zA-Z ]+$/;
	var string2=/^[a-zA-Z0-9._ ]+$/;
	var string3=/^[a-zA-Z0-9_]+$/;
	var numbr=/^[0-9]+$/;
	var email=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z0-9.]{2,6}$/;
function valid()
	{
	
	if(string2.test(document.getElementById("title").value)==false)
		{
	 
		inlineMsg('page_title','Please!  Enter Valid Page Title',2);
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
					
					<h3>Manage Slide Box  </h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" <?php if(!isset($_GET['act'])) { ?>  class="default-tab" <?php } ?>>Pages</a></li> <!-- href must be unique and match the id of target div -->
						<?php if(isset($_GET['act'])) { ?>
						<li><a href="#tab2"   class="default-tab">Modify Slider </a></li>
						<?php } else { ?>
						<li><a href="#tab2">Add Slider </a></li>
						<?php } ?>
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
							<form method="post" action="<?php echo $pagename; ?>">	
						<table>
							
							<thead>
								<tr>
								   <th width="20"><input class="check-all" id="allbox" name="allbox" type="checkbox" /></th>
								   <th width="94">Title</th>
								   <th width="606">Image</th>
								   <th width="64">Sort</th>
								   <th width="42">Status</th>
								   <th width="104">Action</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
                                        
											<select name="dropdown" id="dropdown">
												<option value="">Choose an action...</option>
												<option value="option3">Delete</option>
											</select>
                                            <input type="submit" class="button" value="Apply to selected" onClick="return submit_validation();">
									
										</div>
										
									
									<?php
$navigation = $pagination->create_links();
echo $navigation; // will draw our page navigation
?>
									 <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
						
						  <?php
						  
						   $order_counter=1;
						   while($row=mysql_fetch_array($query)){ ?>		
								<tr>
									<td valign="middle"><input type="checkbox" name="all_delete[]" value="<?php echo $row['id']; ?>" /></td>
									<td valign="middle"><?php echo $row['title']; ?></td>
									<td><img src="uploads/slider/<?php echo $row['image']; ?>" width="150" height="100"></td>
									<td valign="middle">	<?php 	if($order_counter!=1) { ?>
		<a href='<?php echo $pagename; ?>?id=<?php echo $row['id']; ?>&order=<?php echo $row['sort1'] ?>&page=<?php if(isset($_REQUEST['page'])) { echo $_REQUEST['page']; } else { echo "1"; } ?>&d=up'  onclick="return confirm('Are you sure you want to move up?')"><img src="proj_resources/images/up.gif" alt="Up" title="Up"></a>&nbsp;
<?php } ?>
<?php if($order_counter!=$order_row) { ?>
	<a href='<?php echo $pagename; ?>?id=<?php echo $row['id']; ?>&order=<?php echo $row['sort1'] ?>&page=<?php if(isset($_REQUEST['page'])) { echo $_REQUEST['page']; } else { echo "1"; } ?>&d=down' onClick="return confirm('Are you sure you want to move down?')"><img src="proj_resources/images/down.gif" alt="Down" title="Down"></a>
<?php } ?></td>



									<td align="center" valign="middle" style="text-align:center;"><?php if($row['status']==1)  { ?>
<a href="<?php echo $pagename; ?>?action=unpub&id=<?php echo $row['id']; ?>&page=<?php if(isset($_REQUEST['page'])) { echo $_REQUEST['page']; }  else { echo "1"; }  ?>" onClick="return confirm('Are you sure you want to unpublish?')"><img src="proj_resources/images/icons/tick_circle.png" title="UnPublish" alt="UnPublish"></a>

<?php } else if($row['status']==0)  { ?>
<a href="<?php echo $pagename; ?>?action=pub&id=<?php echo $row['id']; ?>&page=<?php if(isset($_REQUEST['page'])) { echo $_REQUEST['page']; }  else { echo "1"; }  ?>" onClick="return confirm('Are you sure you want to publish?')"><img src="proj_resources/images/icons/cross_circle.png" title="Publish" alt="Publish"></a>
	<?php } ?></td>
									<td valign="middle">
										<!-- Icons -->
										 <a href="<?php echo $pagename; ?>?act=update&id=<?php echo $row['id']; ?>&page=<?php if(isset($_REQUEST['page'])) { echo $_REQUEST['page']; } else { echo "1"; } ?>" title="Edit"><img src="proj_resources/images/icons/pencil.png" alt="Edit" /></a>
											<a href="<?php echo $pagename; ?>?action=delete&id=<?php echo $row['id']; ?>&page=<?php if(isset($_REQUEST['page'])) { echo $_REQUEST['page']; }  else { echo "1"; }  ?>" onClick="return confirm('Are you sure you want to delete?')"><img src="proj_resources/images/icons/cross.png" alt="Delete" /> </a>
										
									</td>
								</tr>
							<?php	$order_counter++;} ?>
								
								
								
								
								
								
								
								
								
								
								
							</tbody>
							
						</table>
						</form>
					</div> <!-- End #tab1 -->
					
					<div class="tab-content <?php if(isset($_GET['act'])) { ?> default-tab <?php } ?>" id="tab2">
					
						<form action="#" method="post" enctype="multipart/form-data">
							<input type="hidden" name="file_action" value="<?php if(isset($_GET['act'])) {  echo "update"; } else { echo "new"; } ?>">
							<?php if(isset($_GET['act'])) { ?>
							<input type="hidden" name="page_id" value="<?php echo $_GET['page']; ?>">
							<input type="hidden" name="rec_id" value="<?php echo $edit_page['id']; ?>">
							<?php } ?>
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Title</label>
										<input class="text-input small-input" type="text" id="title" name="title"  value="<?php if(isset($_GET['act']))
{ echo $edit_page['title']; } else { echo ""; } ?>" />
								</p>
                                	<p>
									<label>Upload Image:(image  width="1400" height="650")</label>
									<input  name="image_name" id="image_name" type="file" size="29">
									<input  type="hidden" name="image_name" value="<?php echo $edit_page['image']; ?>" >
								</p>
								<p>
							    <?php if($edit_page['image']!="")
								{?>
								<img src="uploads/slider/<?php echo $edit_page['image']; ?>" width="150" height="100">
								<?php } else {} ?>	
									
								</p>
								
								
								<!--<p>
									<label>Link:</label>
									<input class="text-input large-input" type="text" id="metatags" name="short_des"  value="<?php //if(isset($_GET['act']))
/// { echo $edit_page['short_des']; } else { echo ""; } ?>" />
								</p>
								-->
								
								<!--<p>
									<label>Body Content:</label>
                                    
								</p>
                                 
                                    <div><textarea id="description" name="description"><?php //if(isset($_GET['act']))
//{ echo stripslashes(urldecode($edit_page['description'])); } else { echo ""; } ?></textarea>
			<script type="text/javascript">
//<![CDATA[

CKEDITOR.replace( 'description',
{
filebrowserBrowseUrl : '<?php //echo $admRu; ?>ckfinder/ckfinder.html',
filebrowserImageBrowseUrl : '<?php //echo $admRu; ?>ckfinder/ckfinder.html?type=Images',
filebrowserFlashBrowseUrl : '<?php //echo $admRu; ?>ckfinder/ckfinder.html?type=Flash',
filebrowserUploadUrl : '<?php //echo $admRu; ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
filebrowserImageUploadUrl : '<?php //echo $admRu; ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : '<?php //echo $admRu; ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
}
);
//]]>
</script>
								</div>-->
							
								<p>
									<input class="button" type="submit" name="submit" value="Submit"  onclick="return valid();" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
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