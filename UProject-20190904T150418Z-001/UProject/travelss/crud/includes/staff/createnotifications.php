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
                    <h4 class="title" style="font-size: 30px; color: #0345af">Create Notifications</h4>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="notifications.php">
                        <i class="glyphicon glyphicon-th-list"></i>
                        Manage Notifications                   </a>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>


<div class="space"></div>
<div class="row form">
    <div class="col-md-12">
        <div class="form bg-white">
            <form method="POST">
          

               
            <div style="clear: both"></div>
            <div class="col-md-12" style="padding-left: 0px">
                <div class="form-group">
                    <label class="control-label">Title</label>
                    <input type="text" class="form-control" name="title" id="News_title" maxlength="255" required/>                    <div class="text-danger" id="News_title_em_" style="display:none"></div>                </div>
            </div>

            <div class="col-md-12" style="padding-left: 0px">
                <div class="form-group">
                    <label class="control-label">Description</label>
                    <textarea type="text" rows="4" class="form-control" name="description" id="News_description" required></textarea>                    <div class="text-danger" id="News_description_em_" style="display:none"></div>                </div>
            </div>

             <div class="col-md-12" style="padding-left: 0px">
                <div class="form-group">
                    <label class="control-label">Photo</label>
                    <input type="file"  name="photo"><br>
                    
                                      <div class="text-danger"  style="display:none"></div>                </div>
            </div>
          

            <div style="clear: both"></div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="save" value="Create new" />            </div>
            </span>
       <!--  <?php  

$objnoti=new Notification();
extract($_POST);
//Saved Records Inside Database
if(isset($save))
{
//here admin is table name, $userName and $pass  entered by html form  
$objnoti->saveNotifications("notification",$title,$description,$photo);

}

 ?> -->

 <!--  <?php
        $obj=new Notification();

$obj->displayall("notification");
  ?> -->
            </form>        </div>
    </div>
</div>
       </div>
    </div>

  <div class="clearfix"></div>

</div>

</body>
</html>


