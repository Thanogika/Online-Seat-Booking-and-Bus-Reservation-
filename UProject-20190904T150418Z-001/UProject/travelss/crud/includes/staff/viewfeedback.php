<?php
include 'connection.php';
include 'feedbackDB.php';
 
$viewfeedback = new feedback();
 
//getting id from url
$feedback_id = $viewfeedback->escape_string($_GET['feedback_id']);
 
//selecting data associated with this particular id
$result = $viewfeedback->getData("SELECT * FROM feedback WHERE feedback_id=$feedback_id");
 
foreach ($result as $res) {
   $feedback_id = $res['feedback_id'];
    $name = $res['name'];
    $subject = $res['subject'];
    $feedback = $res['feedback'];
   

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
            
<div class="row">
    <div class="col-md-12 form-title">
        <div class="row">
            <div class="col-md-6">
                <h4 class="title" style="font-size: 16px">View feedback</h4>
            </div>
            <div class="col-md-6 text-right">
                <a class="btn btn-primary" href="feedback.php">
                    <i class="glyphicon glyphicon-th-list"></i>
                    Manage feedback                </a>
            </div>
        </div>
    </div>
</div>
<hr class="line">
<div class="space"></div>
<div class="row">
    <div class="col-md-12">
        <div class="form bg-white">
            <form class="panel-body" enctype="multipart/form-data" id="createCategory-form" action="/busbooking-v2/backend/www/admin/viewFeedback.html?id=1526936916" method="POST">            <div class="form-group">
               
            <div class="form-group">
                <label class="control-label">Id</label>
                <input type="text" class="form-control" placeholder="Name" readonly="readonly" name="feedback_id" id="Feedback_fullName" maxlength="100" value="Aban" />                <div class="text-danger" id="Feedback_name_em_" style="display:none"></div>            </div>
            <div class="form-group">
                <label class="control-label">Name</label>
                <input type="text" class="form-control" placeholder="Seat" readonly="readonly" name="name" id="Feedback_email" maxlength="200" value="Ayines@gmail.com" />                <div class="text-danger" id="Feedback_seat_em_" style="display:none"></div>            </div>

            <div class="form-group">
                <label class="control-label">Subject</label>
                <input type="text" class="form-control" placeholder="Seat" readonly="readonly" name="subject" id="Feedback_title" maxlength="300" value="Enquiries" />                <div class="text-danger" id="Feedback_seat_em_" style="display:none"></div>            </div>

            <div class="form-group">
                <label class="control-label">Feedback Content</label>
                <textarea type="text" class="form-control" rows="8" readonly="readonly" name=feedback id="Feedback_message">Nskdkdbsbsm jdhdbdkd isksjsksjs</textarea>                <div class="text-danger" id="Feedback_description_em_" style="display:none"></div>            </div>

            <div class="form-group">
                            </div>
            </form>        </div>
    </div>


</div>        </div>
    </div>

	<div class="clearfix"></div>

</div>

</body>
</html>


