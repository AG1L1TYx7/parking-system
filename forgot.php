<?php include('include/header.php'); ?>
<?php
//forgot Password script
if(isset($_POST['forgot']))
{
	$email=$_POST['email'];
	
 $slct="select * from tbl_user where email ='$email'";
		$qury=mysql_query($slct);
		$numrow=mysql_num_rows($qury);
		if($numrow==0){
			$error='Sorry You are not Registered to Forgot Password,Please Register Now? Click Here <a href="register.php" style="color:#BC272C;">Register</a> .';
			}else{
				$mfapass=mysql_fetch_array($qury);
		        $password=$mfapass['password'];
			$message = '
  <table>
<tr><td colspan="2"><b>We have Received You Have Forgot Your password</b></td></tr>
<tr><td colspan="2"><i>so here is your password, You can change your password after login and on Your Account Section</i></td></tr>

<tr><td><b>Your Password:</b>'.$password.'</td><td>&nbsp;</td></tr>
</table>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $to = $_REQUEST['email'];
// Additional headers
$headers .= "To: $to" . "\r\n";
$headers .= 'From:'.'Forgot Password'. "\r\n";

$subject="Password Recovery";

mail($to, $subject, $message, $headers);
	echo "<script>window.location='forgot.php?forgot=successfull'</script>";			
}
	}
?>
            <div class="breadcrumb-container" style="margin-top:80px;">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-sm-3">
                        
                     </div> 
                        <div class="col-sm-6">
                         <?php   if(isset($_GET['forgot'])){
                         echo "<button class='btn btn-success btn-block' type='button'>Forgot Password Successfully, Please Check Your Email</button>"; } ?>
                       
                     </div>
                     <div class="col-sm-3">
                        
                     </div>
                    </div>
                </div>
            </div>
            <div class="xs-margin half"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        
                    </div>
                    <div class="xlg-margin visible-xs clearfix"></div>
                    <div class="col-sm-6 padding-left-md">
                      <!---  Forgot form Start here    --->
                        <form action="forgot.php" method="post" id="login-form">
                            <h1>Forgot Password</h1>
                            <div class="form-group">
                                <label for="email" class="form-label">Enter your e-mail<span class="required">*</span>
                                </label>
                                <input type="email" name="email" id="email" class="form-control input-lg" required>
                            </div>
                          
                            <div class="xs-margin"></div>
                            <input type="submit" name="forgot" class="btn btn-custom btn-lg min-width" value="Submit">
                        </form>
                                 <!---  Forgot form End here    --->
                    </div>
                     <div class="col-sm-3">
                        
                    </div>
                </div>
            </div>
            <div class="lg-margin2x"></div>
<?php include('include/footer.php'); ?>