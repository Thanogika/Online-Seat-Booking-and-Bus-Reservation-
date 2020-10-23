
<?php 
class reservation extends databaseconnect{


 public function saveRecords($tbName,$bustype,$from_station,$journey_date,$journey_time,$to_station,$people,$price,$phone)
 {
 $conn=$this->connect();
 mysqli_query($conn,"insert into $tbName values('','".$bustype."','".$from_station."','".$journey_date."','".$journey_time."','".$to_station."','".$people."','".$price."','".$phone."')");
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
echo "<tr ><th>Id</th><th>Bustype</th><th>From</th><th>Date</th><th>Time</th><th>Station</th><th>People</th><th>Price</th><th>Phone</th><th>Edit/Delete</th></tr>";
 
$quer=mysqli_query($con,"select * from $tbName");
 
while($res=mysqli_fetch_array($quer))
{
	$rd=$post['phone'];
	echo $rd;
echo "<tr>";
echo "<td>".$res['id']."</td>";
echo "<td>".$res['bustype']."</td>";
echo "<td>".$res['from_station']."</td>";
echo "<td>".$res['journey_date']."</td>";
echo "<td>".$res['journey_time']."</td>";
echo "<td>".$res['to_station']."</td>";
echo "<td>".$res['people']."</td>";
echo "<td>".$res['price']."</td>";
echo "<td>".$res['phone']."</td>";
echo '<input type="submit" name="assign" style="margin-top:5px;" class="btn btn-success" value="Assign" />';
                     
   echo "<td><a href=\"viewreservation.php?id=$res[id]\">View</a> | <a href=\"reservation.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
}
echo "</table>";

if (isset($_POST["assign"])) {
include "NexmoMessage.php";
            /**
             * To send a text message.
             *
             */
            // Step 1: Declare new NexmoMessage.
echo $rd;

            $nexmo_sms = new NexmoMessage('04682137', '4IeTQrii03FqpujA');
            // Step 2: Use sendText( $to, $from, $message ) method to send a message.
            $info = $nexmo_sms->sendText("94$rd", 'MyApp', "Your Order is conformed");
            // Step 3: Display an overview of the message
            echo $nexmo_sms->displayOverview($info);
}


}

 public function delete($id, $table) 
    { 
        $query = "DELETE FROM $table WHERE id = $id";
        
        $result = $this->connect()->query($query);
    
        if ($result == false) {
            echo 'cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
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
                       