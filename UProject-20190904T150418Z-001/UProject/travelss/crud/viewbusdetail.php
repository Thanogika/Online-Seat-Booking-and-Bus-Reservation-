<?php 
 include 'classes/DbConfig.php';
include 'classes/Crud.php';
//  if(!isset($_SESSION['id'])){
//   header("location:login.php");
//  }

$viewsbus = new Crud();
 
//getting id from url
$bus_id = $viewsbus->escape_string($_GET['bus_id']);
 
//selecting data associated with this particular id
$result = $viewsbus->getData("SELECT * FROM busdetail WHERE bus_id=$bus_id");
 
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
          <form role="form" action="" method="post"  class="validate" enctype="multipart/form-data">
                  <div class="box-body">
                     <div class="col-md-6">
                             
            
             <div class="form-group">
                          <label class="control-label">Bus_no</label>
                          <input type="text"  readonly name="bus_no" value="<?php echo $bus_no;?>" class="form-control" />  
                                     
                       </div>
            <div class="form-group has-feedback">
                          <label>No ofseats</label>  
                          <input type="number"  readonly name="no_of_seats" value="<?php echo $no_of_seats;?>" class="form-control" />
                        
                        </div>
            
             <div class="bootstrap-timepicker">
              <div class="form-group">
               <label class="control-label">Bus type</label> 
                          <input type="text" readonly name="bus_type" value="<?php echo $bus_type;?>" class="form-control" /> 
                
                </div><!-- /.input group -->
              </div><!-- /.form group -->
               <div class="form-group has-feedback" >
                           <label>Travelling Charge</label>  
                          <input type="text" readonly name="amount" value="<?php echo $amount;?>" class="form-control" />
                            
                           
                        </div>   
              </div>
              
              <div class="col-md-6">
              
            <div class="form-group">
                       <label class="control-label">Start point</label> 
                          <input type="text" readonly name="from_station" value="<?php echo $from_station;?>" class="form-control" />  
                       </div>

             <div class="form-group">
                       <label class="control-label">End point</label> 
                          <input type="text" readonly name="destination_station" value="<?php echo $destination_station;?>" class="form-control" />  
                       </div>

                <div class="form-group has-feedback">
                          <label class="control-label">Start time</label> 
                          <input type="time" readonly name="start_time" value="<?php echo $start_time;?>" class="form-control" /> 
                        </div>
                      
         <div class="form-group has-feedback">
                          <label class="control-label">End time</label> 
                          <input type="time" readonly name="start_time" value="<?php echo $start_time;?>" class="form-control" /> 
                        </div>
              <div class="box-footer">
                    <!--  <button  tabindex="10" type="submit" class="btn btn-primary" >Submit</button> -->
                     <input type="hidden" name="id" value=<?php echo $_GET['bus_id'];?>
                  </div>             
                        </div>                   
                   
           
            
           <!--    <div class="form-group has-feedback">
                            <label class="control-label">Age</label>
                          <input type="text" readonly name="nic" value="<?php echo $nic;?>" class="form-control" /> 
                        </div> -->
                  
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
