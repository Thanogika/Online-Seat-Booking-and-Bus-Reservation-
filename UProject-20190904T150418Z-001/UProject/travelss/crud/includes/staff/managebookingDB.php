
<?php 
class booking extends databaseconnect{


 public function saveRecords($tbName,$from_station,$to_station,$booking_date,$bus_no,$bus_type,$no_of_seats,$seat_no,$paid_amount)
 {
 $conn=$this->connect();

 mysqli_query($conn,"insert into $tbName values('','".$from_station."','".$to_station."','".$booking_date."','".$bus_no."','".$bus_type."','".$no_of_seats."','".$seat_no."','".$paid_amount."')");
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
echo "<tr ><th>Staff Id</th><th>From</th><th>To</th><th>Date</th><th>Bus no</th><th>Bus type</th><th>No of seats</th><th>Seat ni</th><th>Payment</th><th>Edit</th><th>Delete</th></tr>";
 
$quer=mysqli_query($con,"select * from $tbName");
 
while($res=mysqli_fetch_array($quer))
{
echo "<tr>";
echo "<td>".$res['booking_id']."</td>";
echo "<td>".$res['from_station']."</td>";
echo "<td>".$res['to_station']."</td>";
echo "<td>".$res['booking_date']."</td>";
echo "<td>".$res['bus_no']."</td>";
echo "<td>".$res['bus_type']."</td>";
echo "<td>".$res['no_of_seats']."</td>";
echo "<td>".$res['seat_no']."</td>";
echo "<td>".$res['paid_amount']."</td>";
 echo "<td><a href=\"viewbooking.php?booking_id=$res[booking_id]\">Edit</a> | <a href=\"managebooking.php?booking_id=$res[booking_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 
 
echo "</tr>";
}
echo "</table>";
} 


 public function delete($booking_id, $table) 
    { 
        $query = "DELETE FROM $table WHERE booking_id = $booking_id";
        
        $result = $this->connect()->query($query);
    
        if ($result == false) {
            echo 'cannot delete id ' . $booking_id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }
  public function escape_string($booking_id)
    {
        return $this->connect()->real_escape_string($booking_id);
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