<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 	$selectedID = $_POST['selectedID'];
	$pieces = explode(",", $selectedID);
	

 	$CheckSQL = "SELECT * FROM seat WHERE seat_no='$selectedID'";

foreach($pieces as $key=>$value){
      $Sql_Query = "UPDATE seat SET availabilityTwo = '1' WHERE  seat_no = $value";
      print "$Sql_Query \n";
      $res = mysqli_query($con, $Sql_Query);
}



 if($res)
{
 echo 'Selected Seats Updated Successfully';
}
else
{
 echo 'Something went wrong in database side';
 }
}
 mysqli_close($con);
?>
