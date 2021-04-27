<?php 
if(isset($_REQUEST['singout']))
	{
	session_start();
		if($_REQUEST['singout']==1)
			{
				session_unset($_SESSION['adm']);
				$msg="You Are Logout";
				header("location:login.php?msg=".$msg."");
				exit();
			}
	}
	
include("proj_resources/inc_files/header_tag.php"); ?>

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
			<p id="page-intro">What would you like to do?</p>
			
			<ul class="shortcut-buttons-set">
				
				
				
				<li><a class="shortcut-button" href="parking_areas.php"><span>
					<img src="proj_resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
				   Manage Parking Areas
				</span></a></li>
				<li><a class="shortcut-button" href="slider.php"><span>
					<img src="proj_resources/images/icons/galy.gif" alt="icon" /><br />
				    Manage Slider
				</span></a></li>
				<li><a class="shortcut-button" href="registerusers.php"><span>
					<img src="proj_resources/images/icons/testimonial_icon.png" alt="icon" /><br />
				    Manage Registered Users
				</span></a></li>
				
				
				
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<div class="clear"></div> <!-- End .clear -->
			
	
			<!-- Start Notifications -->
			
			
			
			<?php include("proj_resources/inc_files/footer_inc.php"); ?>	
			

			
			<!-- End Notifications -->
			
			<!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div>
</body>
</html>