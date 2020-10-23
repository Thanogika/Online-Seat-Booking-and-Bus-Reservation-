 <?php 
include 'includes/user/connection.php';
include 'includes/user/busdetailDB.php';
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
                <h4 class="title" style="font-size: 30px; color: #04398e">Add New Bus Details</h4>
            </div>
            <div class="col-md-6 text-right">
                <a class="btn btn-primary" href="busdetail.php">
                    <i class="glyphicon glyphicon-th-list"></i>
                    Manage Buses              </a>
            </div>
        </div>
    </div>
</div>


    
<div class="space"></div>
<div class="row form">
    <div class="col-md-10">
       <div class="form bg-white">
           <form  method="post">


              <div class="col-md-6" style="padding-left: 0px">
               <div class="form-group">
                      <label class="control-label">Bus No</label>
                   <div id="showCity">
                      <input type="text" class="form-control " name="bus_no" />                        
                    </div>
                   <div class="" style=""></div>               
                </div>
              </div>

             <div class="col-md-6" style="padding-left: 0px">
               <div class="form-group">
                      <label class="control-label">No of seats</label>
                   <div id="showCity">
                      <input type="number" class="form-control " name="no_of_seats" />                        
                   </div>
                   <div class="" style=""></div>               
               </div>
             </div>

             <div class="col-md-12" style="padding-left: 0px">
               <div class="form-group">
                    <label class="control-label">Bustype</label>
                   <div id="showCity">
                      <select class="form-control" name="bus_type" id="">
                      <option value="Ac">Ac</option>
                      <option value="Non Ac">Non Ac</option>
                      </select>                                          
                  </div>
                  <div class="text-danger" id="" style="display:none"></div>               
               </div>
             </div>
             
        <h4 class="title" style="font-size: 20px;color: #04398e">Route details</h4>
         <br>

              <div class="col-md-12" style="padding-left: 0px">
                <div class="col-md-6" style="padding-left: 0px">
                  <div class="form-group">
                    <label class="control-label">From station</label>
                      <div id="showCity">
                        <select class="form-control" name="from_station" >
                        <option value="Jaffna">Jaffna</option>
                        <option value="Badhulla">Badhulla</option>
                        <option value="Trinco">Trinco</option>
                        </select>                                         
                      </div>
                   <div class="text-danger" id="" style="display:none"></div>               </div>
               </div>
                
            <div class="col-md-6" style="padding-left: 0px">
              <div class="form-group">
                  <label class="control-label">Destination Station</label>
                    <div id="showCity">
                        <select class="form-control" name="destination_station" >
                        <option value="Jaffna">Jaffna</option>
                        <option value="Badhulla">Badhulla</option>
                        <option value="Trinco">Trinco</option>
                        </select>                                         
                    </div>
                   <div class="text-danger" id="BusStations_city_em_" style="display:none"></div>       
              </div>
           </div>
           </div>

<div style="clear: both"></div>
                                        
  
            <div class="col-md-12" style="padding-left: 0px">
            <div class="col-md-6" style="padding-left: 0px">
                
                    <div class="form-group">
                        <label class="control-label">Start time</label>
                        <input type="time" class="form-control"  name="start_time" />                        
                    </div>
            </div>
                
                <div class="col-md-6" style="padding-left: 0px">
                    <div class="form-group">
                        <label class="control-label">End time</label>
                        <input type="time" class="form-control"  name="end_time"  />
                    </div>
                </div>
            </div>
             <div class="col-md-6" style="padding-left: 0px">
               <div class="form-group">
                      <label class="control-label">Price</label>
                   <div id="showCity">
                      <input type="number" class="form-control " name="price" />                        
                   </div>
                   <div class="" style=""></div>               
               </div>
             </div>

          
           <div class="form-group">
               <input type="submit" class="btn btn-primary" name="save" value="Create new" />           
            </div>
           
                         <?php  

$obj=new bus();
extract($_POST);
//Saved Records Inside Database
if(isset($save))
{
//here admin is table name, $userName and $pass  entered by html form  
$obj->saveRecords("busdetail",$bus_no,$no_of_seats,$bus_type,$from_station,$destination_station,$start_time,$end_time,$price);

}
 ?>

            
            </form>        </div>
    </div>
</div>
</div>

<script>
    var select_date = new Array();
</script>


<style>
    .modal.in .modal-dialog {
        /*
         width: 800px;
 */
    }
    .modal-body{
        padding-bottom: 0px;
        padding-top: 0px;
    }
</style>
<!-- Modal -->



</body>
</html>



