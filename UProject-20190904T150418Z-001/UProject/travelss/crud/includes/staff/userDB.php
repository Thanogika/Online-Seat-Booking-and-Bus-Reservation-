
<?php 
class user extends databaseconnect{


 public function saveRecords($tbName,$first_name,$last_name,$user_email,$user_password,$nic,$user_level)
 {
 $conn=$this->connect();
 mysqli_query($conn,"insert into $tbName values('','".$first_name."','".$last_name."','".$user_email."','".$user_password."','".$nic."','".$user_level."')");
 }


 public function displayall($tbName)
{
$con=$this->connect();
 
 echo'<div class="row" style="padding: 20px">';
    echo' <div class="hidden-sm hidden-xs col-xs-12">';
        echo'<div id="languages-grid" class="grid-view">';
       echo' <table class="table table-striped table-hover data-table table-bordered">';

echo '<tbody>';

echo '<thead>'; 
echo "<tr ><th>Id</th><th>First name</th><th>Last name</th><th>Email</th><th>password</th><th>Nic</th><th>Edit/Delete</th></tr>";
 
$quer=mysqli_query($con,"select * from $tbName");
 
while($res=mysqli_fetch_array($quer))
{
echo "<tr>";
echo "<td>".$res['id']."</td>";
echo "<td>".$res['first_name']."</td>";
echo "<td>".$res['last_name']."</td>";
echo "<td>".$res['user_email']."</td>";
echo "<td>".$res['user_password']."</td>";
echo "<td>".$res['nic']."</td>";

 echo "<td><a href=\"viewuser.php?id=$res[id]\">Edit</a> | <a href=\"User.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 

echo "</tr>";
}
echo "</table>";
} 


 public function delete($table,$id)
 {
  $res = mysql_query("DELETE FROM $table WHERE id=".$id);
  return $res;
 }
 
  public function escape_string($id)
    {
        return $this->connect()->real_escape_string($id);
    }

    public function getData($query)
    {        
        $result = $this->connect()->query($query);
        
        if ($result == false) {
            return false;
        } 
        
        $rows = array();
        
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        
        return $rows;
    }


      public function execute($query) 
    {
        $result = $this->connect()->query($query);
        
        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }        
    }
   } 
   ?>