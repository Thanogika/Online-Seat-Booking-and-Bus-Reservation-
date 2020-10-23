<?php 

include 'connection.php';
include 'userDB.php';

$viewus = new user();
 
//getting id from url
$id = $viewus->escape_string($_GET['id']);
 
//selecting data associated with this particular id
$result = $viewus->getData("SELECT * FROM user WHERE id=$id");
 
foreach ($result as $res) {
   $id = $res['id'];
    $first_name = $res['first_name'];
    $last_name = $res['last_name'];
    $user_email = $res['user_email'];
    $user_password = $res['user_password'];
    $nic = $res['nic'];
      $user_level = $res['user_level'];
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
                    <h4 class="title" style="font-size: 16px">View Customer</h4>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="user.php">
                        <i class="glyphicon glyphicon-th-list"></i>
                        Manage Customer                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr class="line">
    <div class="space"></div>
    <div class="row form">
    <div class="col-md-12">
        <div class="form bg-white" >
            <form class="panel-body" method="POST">
   
                <label>User Id</label>  
                          <input type="text" readonly name="id" value="<?php echo $id;?>" class="form-control" />  
                          <br /> 
							  <label>First Name</label>  
                          <input type="text"  readonly name="first_name" value="<?php echo $first_name;?>" class="form-control" />  
                          <br /> 

                          <label>Last Name</label>  
                          <input type="text"  readonly name="last_name" value="<?php echo $last_name;?>" class="form-control" />  
                          <br /> 
              
              
                <label>Email</label>  
                          <input type="Email" readonly name="user_email" value="<?php echo $user_email;?>" class="form-control" />  
                          <br /> 
                <label>Password</label>  
                          <input type="Password" readonly name="user_password" value="<?php echo $user_password;?>" class="form-control" />  
                          <br /> 
                 <label>Nic</label>  
                          <input type="text" readonly name="nic" value="<?php echo $nic;?>" class="form-control" />  
                          <br /> 
                   <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                    
            </form>        </div>
    </div>
    </div>





	<div class="clearfix"></div>

</div>
 
</body>
</html>


