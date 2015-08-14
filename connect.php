<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "roadsidegeeks";
$connection = mysqli_connect($hostname,$username,$password,$dbname) or die("Sorry can't connect to database");
if (mysqli_connect_errno()) {
	printf("Connection failed %s \n",mysqli_connect_error());
	exit();
}
?>