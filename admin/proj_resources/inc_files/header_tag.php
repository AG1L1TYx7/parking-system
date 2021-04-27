<?php 
session_start();
ob_start();
if(!isset($_SESSION['adm']))
	{
		header('location:login.php');	
		exit();
	}
	
include("proj_resources/inc_files/data_con_adm.php");
include("proj_resources/inc_files/paging.php");


$explode=explode("/",$_SERVER['REQUEST_URI']);
$pagename=$explode[count($explode)-1];
$pagename=explode("?",$pagename);
$pagename=$pagename[0];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Car Parking System Admin</title>
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
		
		<!-- jQuery Datepicker Plugin -->
		<script type="text/javascript" src="proj_resources/scripts/jquery.datePicker.html"></script>
		<script type="text/javascript" src="proj_resources/scripts/jquery.date.js"></script>
		<!--[if IE]><script type="text/javascript" src="proj_resources/scripts/jquery.bgiframe.js"></script><![endif]-->

		
		<!-- Internet Explorer .png-fix -->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="proj_resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		
		<!-- Custome added-->
			
				<script type="text/javascript" src="proj_resources/scripts/messages.js"></script>
				<link rel="stylesheet" href="proj_resources/css/message.css" type="text/css" media="screen" />	
				
				
       <script type="text/javascript">
function submit_validation() {

	if(document.getElementById('dropdown').value=='option3')
	{
		var answer = confirm("Are you sure you want to delete all?")
			if (answer){
					return true;
				   }
			else{	return false;	}

		}
	else
		{
			return false;	
			
		}
}

</script>
   <script type="text/javascript" src="enter_txt/ckeditor.js"></script>
</head>