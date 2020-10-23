<?php 
ob_start();
include 'connection.php';
include 'userDB.php';

?>


<!DOCTYPE html>

<html >
<head>
   <script>  
 $(document).ready(function(){  
      $('.delete').click(function(){  
           var post_id = $(this).attr("id");  
           if(confirm("Are you sure you want to delete this post?"))  
           {  
                window.location = "test_class.php?delete=1&post_id="+post_id+"";  
           }  
           else  
           {  
                return false;  
           }  
      });  
 });  
 </script>  
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


 <?php include ("includes/navigation.php"); ?>
<body>


            
  <div class="row" style="padding: 20px" >
    <div class="col-md-4 col-xs-12 form-title">
        <div class="row">
          <div class="col-md-12">
            <h4 class="title" style="font-size: 30px; color: #0145b2"> Manage Users</h4>
          </div>
          <div class="col-md-6 text-right">
          </div>
        </div>
    </div>
  </div>
 <br/>

    


        <?php
$users =new user();
$users -> displayall("user");


                     ?>
                     
</tbody>
                        
                     </table>  

                  

</div>
</body>


</html>

