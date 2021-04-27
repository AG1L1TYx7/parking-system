<?php include('include/header.php'); 
if(!isset($_SESSION['Userid']))
	{
		header('location:index.php');	
		exit();
	}?>
<?php
$msg="";
if(isset($_POST['update']))
{
$msg2="profile updated Successfully";

               mysql_query("update tbl_user SET
	           fname='".$_POST['fname']."',
			   lname='".$_POST['lname']."',
			   telephone='".$_POST['telephone']."',
			   password='".$_POST['password']."',
			   email='".$_POST['email']."',
			   address='".$_POST['address']."',
			   status=1
			   where id  = '".$_POST['hdn_id']."'
			   ");
			 //echo "<pre>";
			 //print_r($_POST);

echo "<script language='javascript' type='text/javascript'>window.location='dashboard.php?update=updatesuccessfull'
    </script>";

} ?>
<main id="authentication" class="inner-bottom-md" style="margin-top:80px;">
	<div class="container">
		<div class="row">
        <!--- edit profile form Start Here-->
			  <form  action="dashboard.php" method="post"  role="form" class="login-form" >
              <div class="col-md-3"></div>
			<div class="col-md-6">
				
                 <?php   if(isset($_GET['update'])){
                         echo "<button class='btn btn-success btn-block' type='button'>Account Information has been updated!!!</button>"; } ?>
					<h2 class="bordered">My Dashboard</h2>
                   <h3 style="padding-bottom:10px;">Personal Information</h3>
				  <div class="field-row">
                            <label>First Name</label>
                            <input type="text" name="fname" class="form-control input-lg" value="<?php echo $user_log['fname']; ?>"  required>
                        </div>

                        <div class="field-row">
                            <label>Last Name</label>
                            <input type="text" name="lname" class="form-control input-lg" value="<?php echo $user_log['lname']; ?>" required>
                        </div>

                         <div class="field-row">
                            <label>Telephone</label>
 <input type="text" name="telephone" class="form-control input-lg" value="<?php echo $user_log['telephone']; ?>" required>
                        </div>
                        <div class="field-row">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control input-lg" value="<?php echo $user_log['email']; ?>" required>
                        </div>
                         <div class="field-row">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control input-lg" value="<?php echo $user_log['address']; ?>" required>
                        </div>

                        <div class="field-row">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control input-lg" value="<?php echo $user_log['password']; ?>" required>
                        </div>
<br/>
                       <div class="buttons-holder">
                            <button type="submit" name="update" class="btn btn-custom btn-lg">Update</button>
                        </div>
                        <input type="hidden" name="hdn_id" id="hdn_id" value="<?php echo $_SESSION['Userid']; ?>" />
                      	</div>
            
            <div class="col-md-3">
			
			</div>
                        
        	</form>
             <!--- edit profile form End Here-->
		</div>
	</div>
</main>
<?php include('include/footer.php'); ?>