<?php
include 'connection.php';
$con = new databaseconnect();
$table = "user";
if(isset($_GET['id']))
{
 $id=$_GET['id'];
 $res=$con->delete($table,$id);
}
?>