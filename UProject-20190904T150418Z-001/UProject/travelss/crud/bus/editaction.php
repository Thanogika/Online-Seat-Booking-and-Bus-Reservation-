
<?php
// including the database connection file
include_once("../classes/Crud.php");
include_once("../classes/Validation.php");
 
$crud = new Crud();
$validation = new Validation();
 
if(isset($_POST['update']))
{    
    $bus_id = $crud->escape_string($_POST['bus_id']);
        $bus_no = $crud->escape_string($_POST['bus_no']);
      $no_of_seats = $crud->escape_string($_POST['no_of_seats']);
    $bus_type = $crud->escape_string($_POST['bus_type']);
    $from_station = $crud->escape_string($_POST['from_station']);
    $destination_station = $crud->escape_string($_POST['destination_station']);
    $start_time = $crud->escape_string($_POST['start_time']);
    $end_time = $crud->escape_string($_POST['end_time']);
    $amount = $crud->escape_string($_POST['amount']);
    // $password = $res['password'];


     
        //updating the table
        $result = $crud->execute("UPDATE busdetail SET bus_no='$bus_no',no_of_seats='$no_of_seats',bus_type='$bus_type',from_station='$from_station',destination_station='$destination_station' ,start_time='$start_time',end_time='$end_time',amount='$amount' WHERE bus_id=$bus_id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: ../busdetail.php");
    }

?>
