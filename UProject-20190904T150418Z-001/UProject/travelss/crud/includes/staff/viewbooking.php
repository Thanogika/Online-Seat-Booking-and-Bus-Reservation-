 <?php
include 'connection.php';
include 'managebookingDB.php';
 
$viewbooking = new booking();
 
//getting id from url
$booking_id = $viewbooking->escape_string($_GET['booking_id']);
 
//selecting data associated with this particular id
$result = $viewbooking->getData("SELECT * FROM booking WHERE booking_id=$booking_id");
 
foreach ($result as $res) {
   $booking_id = $res['booking_id'];
    $from_station = $res['from_station'];
    $to_station = $res['to_station'];
    $booking_date = $res['booking_date'];
    $bus_no = $res['bus_no'];
    $bus_type = $res['bus_type'];
    $no_of_seats = $res['no_of_seats'];
    $seat_no = $res['seat_no'];
    $paid_amount = $res['paid_amount'];

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
            
    <div class="row" >
        <div class="col-md-12 form-title">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="title" style="font-size: 32px;font-style:blue">View Booking</h4>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="managebooking.php">
                        <i class="glyphicon glyphicon-th-list"></i>
                        Manage Bookings                    </a>
                </div>
            </div>
        </div>
    </div>  
      <body>  
           <br /><br />  
		   
           <div class="container" style="background-color:#e0ebeb;border-radius: 10px">  
		  
                <form method="post">  
                    
                          <label>ID</label>  
                          <input type="text" name="booking_id" value="<?php echo $booking_id;?>" class="form-control" />  
                          <br />
                          <label>From</label>  
                          <input type="text" name="from_station" value="<?php echo $from_station;?>" class="form-control" />  
                          <br />   
                           <label>To</label>  
                          <input type="text" name="to_station" value="<?php echo $to_station;?>" class="form-control" />  
                          <br /> 
                           <label>Date</label>  
                          <input type="Date" name="booking_date" value="<?php echo $booking_date;?>" class="form-control" />  
                          <br /> 
                           <label>Bus no</label>  
                          <input type="text" name="name"value="<?php echo $bus_no;?>"class="form-control" />  
                          <br />   
                         
                           <label>Bus Type</label>  
                          <input type="text" name="bus_type" value="<?php echo $bus_type;?>" class="form-control" />  
                          <br />   
                           
                         
                           <label> Number of Seats</label>  
                          <input type="number" name="no_of_seats" value="<?php echo $no_of_seats;?>" class="form-control" />  
                          <br />   
                           <label>Seat No</label>  
                          <input type="number" name="seat_no" value="<?php echo $seat_no;?>" class="form-control" />  
                          <br />   
                           
                           <label>Payment Amount</label>  
                          <input type="number" name="paid_amount" value="<?php echo $paid_amount;?>" class="form-control" />  
                          <br />       

                           <td><input type="hidden" name="booking_id" value=<?php echo $_GET['booking_id'];?>></td>
               <!--  <td><input type="submit" name="update" value="Update"></td>  -->
                         
                     
                     </span>  
                </form>  
                <br />  
               
                     </table>  
                </div>  
				 </div>  
		   </div>
		    </div>
		   <?php include ("includes/footer.php"); ?>
      </body>  
 </html>  