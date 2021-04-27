<?php include('include/header.php'); ?>
<?php
// register check and insert code start here
if(isset($_POST['register']))
{
    $q="Select * from  tbl_user where email='".$_POST['email']."'";
	$sql1=mysql_query($q);
	$result=mysql_num_rows($sql1);
	if($result>0)
	{	 
	 	$msg="User name already used try by other name.....!!!";
	echo "<script language='javascript' type='text/javascript'>window.location='register.php?useralready=exist'
    </script>";
	}
		else{
		    
		   
		
            $sql="insert into  tbl_user set
	        fname='".$_POST['firstname']."',
			lname='".$_POST['lastname']."',
			telephone='".$_POST['telephone']."',
			password='".$_POST['password']."',
			confirm_password='".$_POST['confirm_password']."',
			email='".$_POST['email']."',
			address='".$_POST['address']."',
			status=1
		  ";
mysql_query($sql);

 //echo "<pre>";
//		    print_r($sql);
//		    echo "</pre>"; 

//email script start here
$to = $_REQUEST['email'];
$subject = "Please confirm your account with Car Parking System";
$message = "
<html>
<head>
<title>Car Parking System</title>
</head>
<body>
<table width='100%' border='0' cellspacing='5' cellpadding='5' style='color:#000;font-size:12px;font-family:Arial, Helvetica, sans-serif; line-height:24px;'>
<tr>
<td colspan='2' ><strong>Hello ".$_POST['firstname']." ".$_POST['lname'].",</strong></td>
</tr>
<tr>
<td colspan='2' >Thank you for signing up with Car Parking System.</td>
</tr>
<tr>
<td width='30%'>&nbsp;</td>
<td width='70%'>&nbsp;</td>
</tr>
<tr>
<td colspan='2' >Thank you</td>
</tr>
</table>
</body>
</html>
";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: Car Parking System<Car Parking System>' . "\r\n";
$headers .= 'Bcc: malikkanwar@gmail.com' . "\r\n";
mail($to,$subject,$message,$headers);

echo "<script language='javascript' type='text/javascript'>window.location='register.php?register=registersuccessfull'
    </script>";
		
  }

}
?>
          <div class="breadcrumb-container" style="margin-top:80px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                        
                     </div> 
                        
                        <div class="col-sm-6">
                        <!---  Register Successfull message   --->
                         <?php   if(isset($_GET['register'])){
                         echo "<button class='btn btn-success btn-block' type='button'>Registration successful for Car Parking System</button>"; } ?>
                          <?php   if(isset($_GET['useralready'])){
                         echo "<button class='btn btn-danger btn-block' type='button'>Username already exist!! Please use another Username.</button>"; } ?>
                     </div>
                     <div class="col-sm-3">
                        
                     </div>
                      
                    </div>
                </div>
            </div>
         <div class="xs-margin half"></div>
         <div class="container">
         <!---  Register form start here    --->
                <form action="register.php" method="post" id="register-form">
                    <div class="row">
                    <div class="col-sm-3"></div>
                        <div class="col-sm-6 padding-right-md">
                         
                            <h1>Register</h1>
                            <div class="form-group">
                                <label for="firstname" class="form-label">Enter your first name<span class="required">*</span>
                                </label>
                                <input type="text" name="firstname" id="firstname" class="form-control input-lg" required>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="form-label">Enter your last name<span class="required">*</span>
                                </label>
                                <input type="text" name="lastname" id="lastname" class="form-control input-lg" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Enter your e-mail<span class="required">*</span>
                                </label>
                                <input type="email" name="email" id="email" class="form-control input-lg" required>
                            </div>
                            <div class="form-group">
                                <label for="telephone" class="form-label">Enter your telephone<span class="required">*</span>
                                </label>
                                <input type="text" name="telephone" id="telephone" class="form-control input-lg" required>
                            </div>
                             <div class="form-group">
                                <label for="address" class="form-label">Enter your address<span class="required">*</span>
                                </label>
                                <input type="text" name="address" id="address" class="form-control input-lg" required>
                            </div>
                             <div class="form-group">
                                <label for="password" class="form-label">Enter your password<span class="required">*</span>
                                </label>
                                <input type="password" name="password" id="password" class="form-control input-lg" required>
                            </div>
                             <div class="form-group">
                                <label for="password" class="form-label">Enter your confirm password<span class="required">*</span>
                                </label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control input-lg" required>
                            </div>
            
                        </div>
                        <div class="md-margin visible-xs clearfix"></div>
                        <div class="col-sm-3"></div> 
                    </div>
                  
                    <div class="row">
                        <div class="col-sm-6 padding-right-md">
                           
                        </div>
                       
                        <div class="col-sm-6 padding-left-md">
                          <div class="xs-margin"></div>
                            <input type="submit" name="register" class="btn btn-custom btn-lg" value="Create Account">
                        </div>
                        <br/>
                    </div>
                </form>
                 <!---  Register form End here    --->
            </div>
         <div class="xlg-margin"></div>
<?php include('include/footer.php'); ?>
 

