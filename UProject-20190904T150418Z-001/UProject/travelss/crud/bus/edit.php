<?php
// including the database connection file
include_once("../classes/Crud.php");
 
$crud = new Crud();
 
//getting id from url
$bus_id = $crud->escape_string($_GET['bus_id']);
 
//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM busdetail WHERE bus_id=$bus_id");
 
foreach ($result as $res) {
  $bus_id = $res['bus_id'];
    $bus_no = $res['bus_no'];
    $no_of_seats = $res['no_of_seats'];
    $bus_type = $res['bus_type'];
    $from_station = $res['from_station'];
    $destination_station = $res['destination_station'];
    $start_time = $res['start_time'];
    $end_time = $res['end_time'];
    $amount = $res['amount'];
      
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TrueBus -True Bus</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<?php include ("../link.php"); ?>
  </head>
  

  <body class="hold-transition skin-red sidebar-mini">
    <?php include ("../header.php"); ?>  
    <div class="wrapper">
     
  <?php include ("../nav.php"); ?> 
  <!-- Left side column. contains the logo and sidebar -->
      


<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Bus Details
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-bus"></i>Home</a></li>
         <li><a href="#">Bus Details</a></li>
         <li class="active">Add Bus</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
                     </div>
         <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-warning">
               <div class="box-header with-border">
                  <h3 class="box-title">Add Bus Details</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
    

                    <form role="form" action="editaction.php" method="post"  class="validate" enctype="multipart/form-data">
                  <div class="box-body">                 
                     <div class="col-md-6">
                     
                         <!--  <div class="form-group has-feedback">
                           <label>Bus Id</label>  
                          <input type="number" name="bus_id" value="<?php echo $bus_id;?>" class="form-control" />  
                            
                        </div>  -->
                        
                        
                         <div class="form-group">
                        <label>Bus No</label>  
                          <input type="number" name="bus_no" value="<?php echo $bus_no;?>" class="form-control" />  </div>                  
                        <div class="form-group has-feedback">
                           <label>No of seats</label>  
                          <input type="number" name="no_of_seats"value="<?php echo $no_of_seats;?>"class="form-control" />  </div>
                        
                         <div class="bootstrap-timepicker">
                            <div class="form-group">
                             
                 <label>Bus type</label>  
                          <select class="form-control" name="bus_type"value="<?php echo $bus_type;?>">
                          <option value="Ac">Ac</option>
                          <option value="Non Ac">Non Ac</option>
                          </select>  </div><!-- /.form group -->
                          </div>
                          
                        <div class="form-group has-feedback">
                                <label>Amount</label>  
                           <input type="number" name="amount" value="<?php echo $amount;?>" class=" form-control" />   </div>
                          
                                                     
                        
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <!-- <button  tabindex="10" type="submit" class="btn btn-primary">Submit</button> -->
                      <td><input type="hidden" name="bus_id" value=<?php echo $_GET['bus_id'];?>></td>
                <td><input type="submit" name="update" class="btn btn-primary" value="Update"></td>
                   </div>
                 </div>
                   <div class="col-md-6">
                   
                       <div class="form-group">
                      
                          <label>From Station</label>  
                            
                          <select class="form-control" name="from_station"value="<?php echo $from_station;?>" >
                          <option value="Jaffna">Jaffna</option>
                          <option value="Badhulla">Badhulla</option>
                          <option value="Trinco">Trinco</option>
                          </select>  </div> 

                          <div class="form-group">
                      
                          <label>Destination Station</label>  
                          <select class="form-control" name="destination_station" value="<?php echo $destination_station;?>" >
                           <option value="Jaffna">Jaffna</option>
                           <option value="Badulla">Bahulla</option>
                           <option value="Trinco">Trinco</option>
                           </select>   </div>
                        <div class="form-group has-feedback">
                                 <label>Start time</label>  
                           <input type="time" name="start_time" value="<?php echo $start_time;?>" class="form-control" /> </div>
                  
                     <div class=<label>End time</label>  
                           <input type="time" name="end_time" value="<?php echo $end_time;?>" class=" form-control" />  </div>

                        
                   </div>
                   
                  </div>
               </form>

</body>
</html>