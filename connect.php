<?php
$site_url = 'http://127.0.0.1';

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "roadsidegeeks";

$conn = mysql_connect($hostname,$username,$password) or die(header("Location: error.html"));
$db = mysql_select_db($dbname) or die(header("Location: error.html"));

?>
