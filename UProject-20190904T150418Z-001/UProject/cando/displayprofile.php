<?php
//host
$host = "localhost";
//user name
$username = "id10706505_roch";
//database password
$pwd = "roch123";
//database name.
$db = "id10706505_travels";

$con=mysqli_connect($host,$username,$pwd,$db) or die("Unable to Connect");

if(mysqli_connect_error($con))
{
	echo "Failed to connect";
}

$query=mysqli_query($con,"SELECT * FROM news");

if($query)
{
while($row=mysqli_fetch_array($query))
	{
	$flag[]=$row;
	}
print(json_encode($flag));
}
mysqli_close($con);
?>


