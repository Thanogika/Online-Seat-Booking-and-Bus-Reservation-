  <?php

include 'includes/user/connection.php';
include 'includes/user/reservationDB.php';
session_start();
 if(!isset($_SESSION['id'])){
  header("location:login.php");
 }
 
$viewreservation = new reservation();
 
//getting id from url
$id = $viewreservation->escape_string($_GET['id']);
 
//selecting data associated with this particular id
$result = $viewreservation->getData("SELECT * FROM reservation WHERE id=$id");
 
foreach ($result as $res) {
   $id = $res['id'];
    $bustype = $res['bustype'];
    $from_station = $res['from_station'];
    $journey_date = $res['journey_date'];
    $journey_time = $res['journey_time'];
    $to_station = $res['to_station'];
    $people = $res['people'];
    $price = $res['price'];
    $phone = $res['phone'];
  

} 

 ?>
<!DOCTYPE html>
<html >
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
            
    <div class="row">
        <div class="col-md-12 form-title">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="title" style="font-size: 30px;color: #04398e">View Reservation</h4>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="reservation.php">
                        <i class="glyphicon glyphicon-th-list"></i>
                        Manage reservation                    </a>
                </div>
            </div>
        </div>
    </div>  
      <body>  
           <br /><br />  
           <div class="container">  
                <form method="post">  
                     

                          <label>ID</label>  
                          <input type="text" name="id" value="<?php echo $id;?>" class="form-control" />  
                          <br />
                             <label>Bus Type</label>  
                          <input type="text" name="bustype" value="<?php echo $bustype;?>" class="form-control" />  
                          <br /> 
                          <label>From</label>  
                          <input type="text" name="from_station" value="<?php echo $from_station;?>" class="form-control" />  
                          <br />   
                           <label>To</label>  
                          <input type="text" name="to_station" value="<?php echo $to_station;?>" class="form-control" />  
                          <br /> 
                          
                           <label> Date</label>  
                          <input type="text" name="journey_date" value="<?php echo $journey_date;?>" class="form-control" />  
                          <br /> 
							<br />   
                      
                           <label>Time</label>  
                          <input type="text" name="journey_time" value="<?php echo $journey_time;?>" class="form-control" />  
                          <br />  
                           <label>People</label>  
                          <input type="text" name="people" value="<?php echo $people;?>" class="form-control" />  
                          <br /> 
                           <label>Price</label>  
                          <input type="Number" name="price" value="<?php echo $price;?>" class="form-control" />  
                          <br /> 
                           <label>Phone</label>  
                          <input type="text" name="phone" value="<?php echo $phone;?>" class="form-control" />  
                          <br />  
                           <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td> 
                   
                    
                     </span>  
                </form>  
                <br />  
               
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  