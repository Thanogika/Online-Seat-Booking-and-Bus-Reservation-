<?php 

session_start();
 if(!isset($_SESSION['id'])){
  header("location:login.php");
 }
?><!DOCTYPE html>
<html>
    <head>
  
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
             
               <div class="box-body">
       <table class="table table-bordered table-striped datatable">
          <tr ><th>Id</th><th>Bustype</th><th>From</th><th>Date</th><th>Time</th><th>Station</th><th>People</th><th>No of days</th><th>Price</th><th>Phone</th><th>Assign</th><th>Action</th></tr>

        


                          </div>
         <?php  
  
              include 'database.php';  
              $data = new Databases;  
              $success_message = '';    
                          $post_data = $data->select('reservation');  
                          foreach($post_data as $post)  
                          {  
                            $rd=$post['phone']
                          ?>  
                          <tr>  
              <td><?php echo $post["id"]; ?></td>
                               <td><?php echo $post["bustype"] ?></td> 
                               <td><?php echo $post["from_station"]; ?></td> 
                  <td><?php echo $post["journey_date"] ?></td>  
                               <td><?php echo $post["journey_time"]?></td>
                               <td><?php echo $post["to_station"] ?></td> 
                               <td><?php echo $post["people"] ?></td> 
                               <td><?php echo $post["day"] ?></td>
                                <td><?php echo $post["price"] ?></td>
                               <!--  <td><?php echo $post["phone"]; ?></td> --> 
                <td><?php echo $rd ;?></td>


                    <td><a class='btn btn-sm bg-olive show-busgetdetails' href="viewreservation1.php?view=1&id=<?php echo $post["id"]?>" > <i class='fa fa-fw fa-eye'></i>View</a></td>  
                    
                          <td><?php echo" <form action='' method='post'> 
                          <div>
                          
                         
                          <input type ='submit' class='btn btn-success'  name='Confirm'  value='Confirm'> 
                          </div>
                          
                          </form>"?></td>
                      
                  
                             <?php }
                             ?>    
                          </tr>  

                        
                     </table>  
<?php
 if (isset($_POST["assign"])) {
include "NexmoMessage.php";
            /**
             * To send a text message.
             *
             */
            // Step 1: Declare new NexmoMessage.
echo $rd;

            $nexmo_sms = new NexmoMessage('04682137', '4IeTQrii03FqpujA');
            // Step 2: Use sendText( $to, $from, $message ) method to send a message.
            $info = $nexmo_sms->sendText("94$rd", 'MyApp', "Your Reservation is conformed");
            // Step 3: Display an overview of the message
            echo $nexmo_sms->displayOverview($info);
}

?> 

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
</div>
</body>

</html>




