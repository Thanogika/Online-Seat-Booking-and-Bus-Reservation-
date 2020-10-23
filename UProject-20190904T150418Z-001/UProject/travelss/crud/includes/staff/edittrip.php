<?php
include 'connection.php';
include 'busdetailDB.php';

 
$editbus = new bus();
 
//getting id from url
$bus_id = $editbus->escape_string($_GET['bus_id']);
 
//selecting data associated with this particular id
$result = $editbus->getData("SELECT * FROM busdetail WHERE bus_id=$bus_id");
 
foreach ($result as $res) {
   $bus_id = $res['bus_id'];
    $bus_no = $res['bus_no'];
    $no_of_seats = $res['no_of_seats'];
    $bus_type = $res['bus_type'];
    $from_station = $res['from_station'];
    $destination_station = $res['destination_station'];
    $start_time = $res['start_time'];
    $end_time = $res['end_time'];
    $price = $res['price'];

} 

 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/busbooking-v2/backend/www/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen, projection" />
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css"/>
   <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css"/>
   <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css"/>
   <link rel="stylesheet" type="text/css" href="css/app.css"/>
   <link rel="stylesheet" type="text/css" href="css/custom.css"/>
<link rel="stylesheet" type="text/css" href="css/fakeLoader.css"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<title>Bus Ticket - Admin Booking</title></head>

<body>
<?php include ("includes/navigation.php"); ?>
<div class="container page" id="page">
			<!-- breadcrumbs -->
	    <div style="margin-bottom: 20px; margin-top: 20px; font-size: 16px">
        </div>
    <div class="row">
        <div class="col-md-12">
            <script type="text/javascript" src="/busbooking-v2/backend/www/scripts/jquery.ui.datepicker.js"></script>




<div class="row">
    <div class="col-md-12 form-title">
        <div class="row">
            <div class="col-md-6">
                <h4 class="title" style="font-size: 16px">Update Trip</h4>
            </div>
            <div class="col-md-6 text-right">
                <a class="btn btn-primary" href="Trip.php">
                    <i class="glyphicon glyphicon-th-list"></i>
                    Manage Trips                </a>
            </div>
        </div>
    </div>
</div>
<hr class="line">
<div class="space"></div>
<div class="row form">
    <div class="col-md-12">
        <div class="form bg-white">
            <form class="panel-body"  action="editaction" method="POST">            <!--<div class="form-group">
            <label class="control-label"></label>
                                            </div>-->
                      
                          <label>Bus Id</label>  
                          <input type="number" name="bus_id" value="<?php echo $bus_id;?>" class="form-control" />  
                          <br /> 

                           <label>Bus No</label>  
                          <input type="number" name="bus_no" value="<?php echo $bus_no;?>" class="form-control" />  
                          <br /> 

                          <label>No of seats</label>  
                          <input type="number" name="no_of_seats"value="<?php echo $no_of_seats;?>"" class="form-control" />  
                          <br /> 

                          <label>Bus type</label>  
                          <select class="form-control" name="bus_type"value="<?php echo $bus_type;?>">
                          <option value="Ac">Ac</option>
                          <option value="Non Ac">Non Ac</option>
                          </select> 

                          <label>From Station</label>  
                            
                          <select class="form-control" name="from_station"value="<?php echo $from_station;?>" >
                          <option value="Jaffna">Jaffna</option>
                          <option value="Badhulla">Badhulla</option>
                          <option value="Trinco">Trinco</option>
                          </select>                                        
                          <br /> 
                        
                          <label>Destination Station</label>  
                          <select class="form-control" name="destination_station" value="<?php echo $destination_station;?>" >
                           <option value="Jaffna">Jaffna</option>
                           <option value="Badulla">Bahulla</option>
                           <option value="Trinco">Trinco</option>
                           </select>                                     
                           <br /> 

                           <label>Start time</label>  
                           <input type="time" name="start_time" value="<?php echo $start_time;?>" class="form-control" />  
                           <br /> 

                           <label>End time</label>  
                           <input type="time" name="end_time" value="<?php echo $end_time;?>" class=" form-control" />  
                           <br /> 
                        
                           <td><input type="hidden" name="bus_id" value=<?php echo $_GET['bus_id'];?>></td> 
                    
                <td><input type="submit" name="update" value="Update"></td>

            
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><!-- /.modal -->



</body>
</html>


