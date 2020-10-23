<?php
//including the database connection file
include_once("../classes/Crud2.php");
 
$crud = new Crud();
 
//getting id of the data from url
$bus_id = $crud->escape_string($_GET['bus_id']);
 
//deleting the row from table
//$result = $crud->execute("DELETE FROM users WHERE id=$id");
$result = $crud->delete($bus_id, 'busdetail');
 
if ($result) {
    //redirecting to the display page (index.php in our case)
    header("Location:../busdetail.php");
}
?>