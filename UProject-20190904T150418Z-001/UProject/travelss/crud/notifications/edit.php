<?php
// including the database connection file
include_once("../classes/Crud.php");
 
$crud = new Crud();
 
//getting id from url
$id = $crud->escape_string($_GET['id']);
 
//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM news WHERE id=$id");
 
foreach ($result as $res) {
   $id = $res['id'];
    $title = $res['title'];
    $descripe = $res['descripe'];
    $photo = $res['photo'];
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TrueBus -True Bus</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<?php include ("../link.php"); ?>
  </head>
  

  <body class="hold-transition skin-red sidebar-mini">
    <?php include ("../header.php"); ?>  
    <div class="wrapper">
     
  <?php include ("../nav.php"); ?> 
  <!-- Left side column. contains the logo and sidebar -->
      


<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Notifications
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-bus"></i>Home</a></li>
         <li><a href="#">Notifications</a></li>
         <li class="active">Edit Notifications</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
                     </div>
         <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-warning">
               <div class="box-header with-border">
                  <h3 class="box-title">Edit Notifications</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
                 <div class="col-md-4"></div>

                    <form role="form" action="editaction.php" method="post"  class="validate" enctype="multipart/form-data">
                  <div class="box-body">                 
                     <div class="col-md-6">
                     
                          <!-- <div class="form-group has-feedback">
                           <label>Id</label>  
                          <input type="text" name="id" value="<?php echo $id;?>" class="form-control" />  
                         
                            
                        </div>  -->
                        
                        
                         <div class="form-group">
                        <label>Title</label>  
                          <input type="text" name="title" value="<?php echo $title;?>" class="form-control" />  
                        </div>                  
                        <div class="form-group has-feedback">
                          <input type="text" name="descripe" value="<?php echo $descripe;?>" class="form-control" />   </div>
                        
                         
                        
                 <label>photo</label>  
                          <input type="text" name="photo" value="<?php echo $photo;?>" class="form-control" />
                         <!--   <input type="file"  name="photo"><br> -->  </div><!-- /.form group -->
                          </div>
                         
                    
                          
                                                     
                        
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <!-- <button  tabindex="10" type="submit" class="btn btn-primary">Submit</button> -->
                     <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" class="btn btn-primary" value="Update"></td>
                  </div>
                   </div>
                   <div class="col-md-2">
                  
                    
                   </div>
                   
                  </div>
               </form>

</body>
</html>