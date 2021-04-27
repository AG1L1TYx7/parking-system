<?php
session_start();
ob_start();
require('captch/recaptchalib.php');
include("proj_resources/inc_files/data_con_adm.php");
$m="";

if(isset($_POST['login_submit']))
{


  $privatekey = "6Le0H80SAAAAAFYt1HAgP-D0Ti04Hfp_eABki8uM";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  //if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    //$m="The reCAPTCHA wasn't entered correctly.";
        
 //} else {
     




$query=mysql_query("select * from admin_login where username='".mysql_real_escape_string($_POST['email'])."' and password='".mysql_real_escape_string($_POST['password'])."'");
	
	$count_rows=mysql_num_rows($query);

	if($count_rows==0)
		{
		
			$m="Enter Valid User Name OR Password";
		
		}
	else
		{
			$login_row=mysql_fetch_array($query);
			$_SESSION['adm']=$login_row['username'];
			header("location:index.php");
			exit();
		}
	 // }
}

if(isset($_GET['msg']))
{
	$m=$_GET['msg'];
	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<title>Provide Car Parking Booking System Admin | Sign In</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="proj_resources/css/reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->

		<link rel="stylesheet" href="proj_resources/css/style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="proj_resources/css/invalid.css" type="text/css" media="screen" />	
		
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		<link rel="stylesheet" href="proj_resources/css/blue.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="proj_resources/css/red.css" type="text/css" media="screen" />  
	 
		-->
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="proj_resources/css/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
	  
		<!-- jQuery -->
		<script type="text/javascript" src="proj_resources/scripts/jquery-1.3.2.min.js"></script>

		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="proj_resources/scripts/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="proj_resources/scripts/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="proj_resources/scripts/jquery.wysiwyg.js"></script>
		
		<!-- Internet Explorer .png-fix -->

		
		<!--[if IE 6]>
			<script type="text/javascript" src="proj_resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
<script type="text/javascript">
function login_submit() {
if(document.signin.email.value=="")
	{
	alert("Enter User Name");
	document.signin.email.focus();
	return false;
	}
else if(document.signin.password.value=="")
	{
	alert("Enter Password");
	document.signin.password.focus();
	return false;
	}
else { return true; }
}

</script>
</head>

<body id="login">
		
		<div id="login-wrapper" class="png_bg">
		  <div id="login-top">
			
				<span style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:24px;">Car Parking Booking System</span>
			  <!-- Logo (221px width) -->
		      </div> 
			<!-- End #logn-top -->
			
			<div id="login-content">
				
					<form name="signin" method="post" action="login.php">
				<?php if($m!="") { ?>
                
                <div class="notification error png_bg">
                    			<div>
                <?php echo $m; ?>
                </div>
                	</div>
                <?php } else { ?>
					<div class="notification information png_bg">
                    
				       <div>
							Just click "Sign In". Here..!!
						</div>
					</div>
				<?php } ?>	
					<p>

						<label>Username</label>
						<input class="text-input" name="email" id="email" type="text" />
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<input class="text-input"  name="password" id="password" type="password" />
					</p>

					<div class="clear"></div>
					<div> <?php 

  // $publickey = "6Le0H80SAAAAAK2C2TvpPXCkyEgVrKTJ14pu7cfA"; // you got this from the signup page
          //echo recaptcha_get_html($publickey);
        ?></div>
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" name="login_submit" onClick="return login_submit();" value="Sign In" />
					</p>
					
				</form>

			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->
		
  </body>
</html>