<?php 
session_start();
include_once 'class.user.php';
$user = new Admin();

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $login = $user->check_login($emailusername, $password);
    if ($login) {
        // Registration Success
       header("location:User.php");
    } else {
        // Registration Failed
        echo 'Wrong username or password';
    }
}


?>
<!DOCTYPE html>
<html  >
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
<style>
            #container{width:400px; margin: 0 auto;}

</style>

<script type="text/javascript" language="javascript">

            function submitlogin() {
                var form = document.login;
				if(form.username.value == ""){
					alert( "Enter email or username." );
					return false;
				}
				else if(form.password.value == ""){
					alert( "Enter password." );
					return false;
				}
			}

</script>
</head>
<body>

<span style="font-size: 13px; font-style: normal; line-height: 1.5;"><div id="container"></span>
<h1 style="font-size: 30px; color: #0145b2">Login Here</h1>
<form action="" method="post" name="login">

<div class="col-md-12" style="padding-left: 0px">
            <div class="form-group">
                <label class="control-label">UserName or Email</label>
                <input type="text" class="form-control" name="emailusername"  required /> 
                </div>
            </div>             
           
          
            <div class="col-md-12" style="padding-left: 0px">
                <div class="form-group">
                <label class="control-label">Password</label>
                <input type="password" class="form-control" name="password" required /> 
                </div>
            </div>

            
            <div class="form-group">
                <input onclick="return(submitlogin());"  class="btn btn-primary" type="submit" name="submit" value="login" />
            </div>


</form>
</div>
</body>
</html>