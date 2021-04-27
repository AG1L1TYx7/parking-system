<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "learning";
$link = mysql_connect($host,$user,$pass,$db) or die ("couldn't connect to my sql");
mysql_select
?>
<?php
// For insert data into Backend
$mysql = mysql_query("insert into table_name (id,email,password) values ('$email','$password')");
// For fetch data to Frontend
$mysql = mysql_query("SELECT * from table_name order by id");
	$result = mysql_fetch_array($mysql);
		echo $result['email'];
?>