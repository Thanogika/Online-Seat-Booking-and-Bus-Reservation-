
<?php 
class bus extends databaseconnect{


 public function saveRecords($tbName,$bus_no,$no_of_seats,$bus_type,$from_station,$destination_station,$start_time,$end_time,$price)
 {
 $conn=$this->connect();
 mysqli_query($conn,"insert into $tbName values('','".$bus_no."','".$no_of_seats."','".$bus_type."','".$from_station."','".$destination_station."','".$start_time."','".$end_time."','".$price."','')");
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
echo "<tr ><th>Id</th><th>Bus No</th><th>No of seats</th><th>Bus_type</th><th>From</th><th>To</th><th>Start time</th><th>End time</th><th>Price</th><th>Edit/Delete</th></tr>";
 
$quer=mysqli_query($con,"select * from $tbName");
 
while($res=mysqli_fetch_array($quer))
{
echo "<tr>";
echo "<td>".$res['bus_id']."</td>";
echo "<td>".$res['bus_no']."</td>";
echo "<td>".$res['no_of_seats']."</td>";
echo "<td>".$res['bus_type']."</td>";
echo "<td>".$res['from_station']."</td>";
echo "<td>".$res['destination_station']."</td>";
echo "<td>".$res['start_time']."</td>";
echo "<td>".$res['end_time']."</td>";
echo "<td>".$res['price']."</td>";
 echo "<td><a href=\"edittrip.php?bus_id=$res[bus_id]\">Edit</a> | <a href=\"busdetail.php?bus_id=$res[bus_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 

echo "</tr>";
}
echo "</table>";
} 


 public function delete($bus_id, $table) 
    { 
        $query = "DELETE FROM $table WHERE bus_id = $bus_id";
        
        $result = $this->connect()->query($query);
    
        if ($result == false) {
            echo 'cannot delete id ' . $bus_id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }
  public function escape_string($bus_id)
    {
        return $this->connect()->real_escape_string($bus_id);
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