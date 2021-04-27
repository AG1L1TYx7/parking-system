<?php
$host="localhost";
$user="root";
$pass="";
$db="carparking_db";
$link=mysql_connect($host,$user,$pass)or die("couldnt connect to my sql".mysql_error());
mysql_select_db($db,$link)or die("couldnt select database".mysql_error());
 
 
 $protocol = "http://";
$server  = $_SERVER['SERVER_NAME'];
$admin  = "/challenge11/cpl_challenge11/";
$admRu  = $protocol.$server.$admin;
?>
