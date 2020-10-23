  <?php 
 include 'classes/DbConfig.php';
include 'classes/Crud.php';
$busdetail = new Crud();
$query = "SELECT * FROM busdetail ORDER BY bus_id DESC";
$result = $busdetail->getData($query);
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
        View Customer Details
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-book"></i>Home</a></li>
         <li><a href="#">Customer </a></li>
         <li class="active">View Customer Details</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
                     </div>
         <div class="col-xs-12">
            <!-- /.box -->
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title">View Customer Details</h3>
               </div>
               <!-- /.box-header -->
                <div class="col-md-12 text-right">
                <a class="btn btn-primary" style="background-color: #0345af;padding-right: 80px" href="addbusdetail.php">
                    <i class=""></i>
                    Create new                </a>
            </div></br></br>
               <div class="box-body">
       <table class="table table-bordered table-striped datatable">
          <tr ><th>Id</th><th>Bus No</th><th>No of seats</th><th>Bus_type</th><th>From</th><th>To</th><th>Start time</th><th>End time</th><th>Price</th><th>Edit/Delete</th></tr>

           <?php 
    foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) {         
echo "<tr>";
echo "<td>".$res['bus_id']."</td>";
echo "<td>".$res['bus_no']."</td>";
echo "<td>".$res['no_of_seats']."</td>";
echo "<td>".$res['bus_type']."</td>";
echo "<td>".$res['from_station']."</td>";
echo "<td>".$res['destination_station']."</td>";
echo "<td>".$res['start_time']."</td>";
echo "<td>".$res['end_time']."</td>";
echo "<td>".$res['amount']."</td>";// echo "<td>".$res['password']."</td>";
// echo "<td><a href=\"editstaff.php?id=$res[id]\">Edit</a> | <a href=\"staff.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 

  echo "<td><a class='btn btn-sm bg-olive show-busgetdetails'  href=\"viewbusdetail.php?bus_id=$res[bus_id]\"> 
                              <i class='fa fa-fw fa-eye'></i> View </a>                         
                              <a class='btn btn-sm btn-primary' href=\"bus/edit.php?bus_id=$res[bus_id]\">
                              <i class='fa fa-fw fa-edit'></i>Edit</a>
                              <a class='btn btn-sm btn-danger' href=\"bus/delete.php?bus_id=$res[bus_id]\" onClick='return doconfirm()''>
                              <i class='fa fa-fw fa-trash'></i>Delete</a> </td>";
                            }
    ?>
     </table>

               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
         <!-- /.col -->
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
