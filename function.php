<?php
include 'connect.php';
function printRow($SELECT,$ORDER) 
{
	global $connection;
	$package_id = 'package_id';
	$name_query = mysqli_query($connection,"SELECT $package_id, $SELECT FROM price_table ORDER BY $ORDER");
	while ($name = mysqli_fetch_row($name_query))
	{
		$ans = $name[1];
		if($ans == 'Yes')
		{
			$ans = '<img src="/img/tick_16x16.png" alt="Yes"';
		}elseif ($ans == 'No') 
		{
			$ans = ' - ';
		}
		printf("<td> %s </td>",$ans);
	}
};
?>