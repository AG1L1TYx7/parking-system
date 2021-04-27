<?php
date_default_timezone_set('Asia/kathmandu');
session_start();
error_reporting(0);
include('admin/proj_resources/inc_files/data_con_adm.php');
 ?>
<?php
$m="";
//login check Code
if(isset($_POST['login']))
{
$query=mysql_query("select * from tbl_user where email='".mysql_real_escape_string($_POST['email'])."' and  password='".mysql_real_escape_string($_POST['password'])."'");
	
	$count_rows=mysql_num_rows($query);

	if($count_rows==0)
		{	
			$m="Enter Valid User Name OR Password";	
		}
	else
		{
			$login_row=mysql_fetch_array($query);
			$_SESSION['Userid']=$login_row['id'];
			$_SESSION['email']=$login_row['email'];
		    header("location:dashboard.php");
			exit();
		}
	 // }
}
if(isset($_GET['msg']))
{
	$m=$_GET['msg'];
}

//Signout code
if(isset($_REQUEST['singout']))
	{
	session_start();
		if($_REQUEST['singout']==1)
			{
				session_unset($_SESSION['Userid']);
				$msg="You Are Logout";
				header("location:index.php?msg=".$msg."");
				exit();
			}
	}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Car Parking Booking System</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/lancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Date Picker --> 
<link href="css/tcal.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/tcal.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">Car Parking Booking System</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <?php if(isset($_SESSION['Userid'])){  
						$user_log =mysql_fetch_array(mysql_query("SELECT * FROM  tbl_user where id='".$_SESSION['Userid']."' AND status=1"));  ?>
                        <li class="page-scroll"><a class="dropdown-toggle"  data-toggle="dropdown" href="#">Welcome <?php echo $user_log['lname'];  ?></a></li>
                         <li class="page-scroll"><a role="menuitem" tabindex="-1" href="dashboard.php">My Account</a></li>
                         <li class="page-scroll"><a role="menuitem" tabindex="-1" href="parkingareas.php">Parking Areas</a></li>
                          <li class="page-scroll"><a role="menuitem" tabindex="-1" href="orders.php">My Booking</a></li>
                        <li class="page-scroll"><a role="menuitem" tabindex="-1" href="index.php?singout=1">Logout</a></li>
                       
                        <?php } if(!(isset($_SESSION['Userid']))) { ?>
               
                    <li class="page-scroll">
                        <a href="register.php">Register</a>
                    </li>
                    <li class="page-scroll">
                        <a href="login.php">Login</a>
                    </li>
                      <?php }  ?>
                    
                    
                </ul>
            </div>
          
        </div>
      
    </nav>