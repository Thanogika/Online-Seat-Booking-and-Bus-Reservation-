<?php
include 'connection.php';
include 'staffDB.php';

 
$editstaff = new staff();

if(isset($_POST['update']))
{    
    $id = $editstaff->escape_string($_POST['id']);
    
    $firstname = $editstaff->escape_string($_POST['firstname']);
    $lastname = $editstaff->escape_string($_POST['lastname']);
    $nic = $editstaff->escape_string($_POST['nic']);
    $email = $editstaff->escape_string($_POST['email']);
    $password = $editstaff->escape_string($_POST['password']);
    $username = $editstaff->escape_string($_POST['username']);
    
        $result = $editstaff->execute("UPDATE staff SET firstname='$firstname',lastname='$lastname',nic='$nic',email='$email',username='username',password='password' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: staff.php");
    
}
?>