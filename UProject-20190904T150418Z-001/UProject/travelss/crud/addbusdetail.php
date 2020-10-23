 <?php 
include 'includes/user/connection.php';
include 'includes/user/busdetailDB.php';
session_start();
 if(!isset($_SESSION['id'])){
  header("location:login.php");
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
<?php include ("link.php"); ?>
  </head>
  

  <body class="hold-transition skin-red sidebar-mini">
    <?php include ("header.php"); ?>  
    <div class="wrapper">
     
  <?php include ("nav.php"); ?> 
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
          <form   method="post" >
                       <div class="box-body">                 
                     <div class="col-md-6">
                     
                        
                         <div class="form-group">
                          <label class="control-label">Bus No</label>
                      <input type="text" class="form-control " required="" name="bus_no" />                        
                        </div>                  
                      
                      <div class="form-group has-feedback">
                          <label class="control-label">Bustype</label>
                  
                      <select class="form-control" required="" name="bus_type" id="">
                      <option value="Ac">Ac</option>
                      <option value="Non Ac">Non Ac</option>
                      </select>  
                 
                       </div>
                        <div class="form-group">
                        <label class="control-label">From station</label>
                      
                        <select class="form-control" required="" name="from_station" >
                        <option value="Jaffna">Jaffna</option>
                        <option value="Badhulla">Badhulla</option>
                        <option value="Trinco">Trinco</option>
                        </select>  
                       </div>
                               <div class="form-group has-feedback">
                                <label class="control-label">Start time</label>
                        <input type="time" class="form-control" required="" name="start_time" />   </div> 
                   
                          
                                                     
                        
                  <!-- /.box-body -->
                  <div class="box-footer">
                      <input type="submit" class="btn btn-primary" name="save" value="Create new" />   
                  </div>
                           
                    </div>
                   <div class="col-md-6">
                   
                     <div class="form-group has-feedback">
                          <label class="control-label">No of seats</label>
                      <input type="number" class="form-control " required="" name="no_of_seats" />
                       </div>
                      
                        <div class="form-group has-feedback">
                                <label class="control-label">Price</label>
                   <div id="showCity">
                      <input type="number" class="form-control " required="" name="amount" />                        
                   </div></div>
                       
                        <div class="form-group has-feedback">
                                 <label class="control-label">Destination Station</label>
                   
                        <select class="form-control" required=""  name="destination_station" >
                        <option value="Jaffna">Jaffna</option>
                        <option value="Badhulla">Badhulla</option>
                        <option value="Trinco">Trinco</option>
                        </select>                                         
                    </div>
                  
                             <div class="form-group has-feedback">
                                <label class="control-label">End time</label>
                        <input type="time" class="form-control" required=""  name="end_time"  /></div>
                      
                             <?php  

$obj=new bus();
extract($_POST);
//Saved Records Inside Database
if(isset($save))
{
//here admin is table name, $userName and $pass  entered by html form  
$obj->saveRecords("busdetail",$bus_no,$no_of_seats,$bus_type,$from_station,$destination_station,$start_time,$end_time,$amount);

}
 ?>
                   </div>
                   
                  </div>
               </form>
            </div>
            <!-- /.box -->
         </div>
      </div>
     </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>






<div class="modal fade modal-wide" id="popup-bookingpointModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">View Booking Details</h4>
         </div>
         <div class="modal-bookingbody">
         </div>
         <div class="business_info">
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>

     
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2015-2016 <a href="#">Techware Solution</a>.</strong> All rights reserved.
      </footer>
    
    </div>
    

  
  
  
  
  </body>
</html>
