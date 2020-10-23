  <?php 
include 'connection.php';
include 'staffDB.php';

 
$editstaff = new staff();
 
//getting id from url
$id = $editstaff->escape_string($_GET['id']);
 
//selecting data associated with this particular id
$result = $editstaff->getData("SELECT * FROM staff WHERE id=$id");
 
foreach ($result as $res) {
   $id = $res['id'];
    $firstname = $res['firstname'];
    $lastname = $res['lastname'];
    $nic = $res['nic'];
    $email = $res['email'];
    $username = $res['username'];
    $password = $res['password'];
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
                <h4 class="title" style="font-size: 16px">Update  Staff</h4>
            </div>
            <div class="col-md-6 text-right">
                <a class="btn btn-primary" href="staff.php">
                    <i class="glyphicon glyphicon-th-list"></i>
                    Manage  Staff                </a>
            </div>
        </div>
    </div>
</div>
<hr class="line">
<div class="space"></div>
<div class="row form">
    <div class="col-md-10">
       <div class="form bg-white">
           <form  method="POST">
           <div class="form-group">
               <form method="post" action="editaction.php">  
                    

                   
               <label>Id</label>
               <input type="text" name="id" value="<?php echo $id;?>" class="form-control" >
           
                    </br> 
                <label>Firstame</label>
                <input type="text" name="firstname" value="<?php echo $firstname;?>"class="form-control">
            </br>
          
                <label>Lastname</label>
                <input type="text" name="lastname" value="<?php echo $lastname;?>"class="form-control">
            </br>
             
                <label>Nic</label>
                <input type="text" name="nic" value="<?php echo $nic;?>"class="form-control">
            </br>
            
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $email;?>"class="form-control">
            </br>
                   <label>Username</label>
                <input type="text" name="username" value="<?php echo $username;?>"class="form-control">
            </br>

            </br>
                   <label>Password</label>
              <input type="password" name="password" value="<?php echo $password;?>"class="form-control">
            </br>
           
                         
                     
                      
                         <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
                   
                     </span> 

						
                </form>  
      </div>
    </div>
</div>
<div class="col-md-2"></div>
        </div>
    </div>

	<div class="clearfix"></div>

</div>

</body>
</html>


