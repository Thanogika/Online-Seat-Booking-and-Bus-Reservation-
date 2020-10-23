
<?php 
class feedback extends databaseconnect{


 public function displayall($tbName)
{
$con=$this->connect();
 
 echo'<div class="row" style="padding: 20px">';
    echo' <div class="hidden-sm hidden-xs col-xs-12">';
        echo'<div id="languages-grid" class="grid-view">';
       echo' <table class="table table-striped table-hover data-table table-bordered">';

echo '<tbody>';

echo '<thead>'; 
echo "<tr ><th>Feedback_id</th><th>Name</th><th>Subject</th><th>Feedback</th><th>View/Delete</th></tr>";
 
$quer=mysqli_query($con,"select * from $tbName");
 
while($res=mysqli_fetch_array($quer))
{
echo "<tr>";
echo "<td>".$res['feedback_id']."</td>";
echo "<td>".$res['name']."</td>";
echo "<td>".$res['subject']."</td>";
echo "<td>".$res['feedback']."</td>";
  echo "<td><a href=\"viewfeedback.php?feedback_id=$res[feedback_id]\">view</a> | <a href=\"busdetail.php?feedback_id=$res[feedback_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 
echo "</tr>";
}
echo "</table>";
} 


 public function delete($feedback_id, $table) 
    { 
        $query = "DELETE FROM $table WHERE feedback_id = $feedback_id";
        
        $result = $this->connect()->query($query);
    
        if ($result == false) {
            echo 'cannot delete id ' . $feedback_id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }
  public function escape_string($feedback_id)
    {
        return $this->connect()->real_escape_string($feedback_id);
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