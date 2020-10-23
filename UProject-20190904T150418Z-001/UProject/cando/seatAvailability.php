<?php
//host
$host = "localhost";
//user name
$username = "root";
//database password
$pwd = "";
//database name.
$db = "travels";

$con=mysqli_connect($host,$username,$pwd,$db) or die("Unable to Connect");

if(mysqli_connect_error($con))
{
	echo "Failed to connect";
}

$query=mysqli_query($con,"SELECT seat_no, availability FROM seat");

if($query)
{
// while($row=mysqli_fetch_array($query))
// 	{
// 	// $flag[]=$row;
// 	}
// 	$row=mysqli_fetch_array($query)
// print(json_encode($row));
print(json_encode($query));
}
mysqli_close($con);
?>


