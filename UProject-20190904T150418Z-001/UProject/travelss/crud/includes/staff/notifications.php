  <?php 
include 'connection.php';
include 'notificationsDB.php';
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

      <div style="margin-bottom: 20px; margin-top: 20px; font-size: 16px">
        </div>
    <div class="row">
        <div class="col-md-12">
            
<div class="row" style="padding: 20px">
    <div class="col-md-12 form-title">
        <div class="row">
            <div class="col-md-6">
                <h4 class="title" style="font-size: 30px; color: #0345af"> Manage Notifications</h4>
            </div>
            <div class="col-md-6 text-right">
                <a class="btn btn-info" style="background-color: #0345af" href="createnotifications.php">
                    <i class="glyphicon glyphicon-plus-sign"></i>
                    Create new                </a>
            </div>
        </div>
    </div>
</div>

<div class="row" style="padding: 20px">
    <div class="hidden-sm hidden-xs col-xs-12">
        <div id="languages-grid" class="grid-view">

                    <?php 
             $obj=new Notification();

$obj->displayall("notification");

             ?>    
</table>
  </div>
</div>

        </div>
    </div>

  <div class="clearfix"></div>

</div>

</body>
</html>

<script>  
 $(document).ready(function(){  
      $('.delete').click(function(){  
           var uid = $(this).attr("id");  
           if(confirm("Are you sure you want to delete this post?"))  
           {  
                window.location = "User.php?delete=1&uid="+uid+"";  
           }  
           else  
           {  
                return false;  
           }  
      });  
 });  
 </script>  





  