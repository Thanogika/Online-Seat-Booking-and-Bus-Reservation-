
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
echo "<tr ><th>Id</th><th>First name</th><th>Last name</th><th>Email</th><th>Nic</th><th>Edit/Delete</th></tr>";
 
$quer=mysqli_query($con,"select * from $tbName");
 
while($res=mysqli_fetch_array($quer))
{
echo "<tr>";
echo "<td>".$res['id']."</td>";
echo "<td>".$res['first_name']."</td>";
echo "<td>".$res['last_name']."</td>";
echo "<td>".$res['user_email']."</td>";
// echo "<td>".$res['user_password']."</td>";
echo "<td>".$res['nic']."</td>";

 echo "<td><a href=\"viewuser.php?id=$res[id]\">View</a> | <a href=\"User.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 
   // echo"<td><form action='' method='post' >
   //                      <input class='button' type='submit' name='submitdelete' value='delete'></form></td>";

}
 // if(isset($_POST['submitdelete'])){
 //    mysql_query("Delete from user where id=$id");

echo "</tr>";

echo "</table>";
} 


 // public function delete($id, $table) 
 //    { 
 //        $query = "DELETE FROM $table WHERE id = $id";
        
 //        $result = $this->connect()->query($query);
    
 //        if ($result == false) {
 //            echo 'cannot delete id ' . $id . ' from table ' . $table;
 //            return false;
 //        } else {
 //            return true;
 //        }
 //    }
 // public function delete($table)
 // {
 //  $res = mysql_query("DELETE FROM $table WHERE id= $id");
 //  return $res;
 // }
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
    // public function update($table, $data, $conditions){
    //     if(!empty($data) && is_array($data)){
    //         $colvalSet = '';
    //         $whereSql = '';
    //         $i = 0;
    //         if(!array_key_exists('modified',$data)){
    //             $data['modified'] = date("Y-m-d H:i:s");
    //         }
    //         foreach($data as $key=>$val){
    //             $pre = ($i > 0)?', ':'';
    //             $colvalSet .= $pre.$key."='".$val."'";
    //             $i++;
    //         }
    //         if(!empty($conditions)&& is_array($conditions)){
    //             $whereSql .= ' WHERE ';
    //             $i = 0;
    //             foreach($conditions as $key => $value){
    //                 $pre = ($i > 0)?' AND ':'';
    //                 $whereSql .= $pre.$key." = '".$value."'";
    //                 $i++;
    //             }
    //         }
    //         $query = "UPDATE ".$table." SET ".$colvalSet.$whereSql;
    //         $update = $this->db->query($query);
    //         return $update?$this->db->affected_rows:false;
    //     }else{
    //         return false;
    //     }
    // }
    
    // /*
    //  * Delete data from the database
    //  * @param string name of the table
    //  * @param array where condition on deleting data
    //  */
    // public function delete($table, $conditions){
    //     $whereSql = '';
    //     if(!empty($conditions) && is_array($conditions)){
    //         $whereSql .= ' WHERE ';
    //         $i = 0;
    //         foreach($conditions as $key => $value){
    //             $pre = ($i > 0)?' AND ':'';
    //             $whereSql .= $pre.$key." = '".$value."'";
    //             $i++;
    //         }
    //     }
    //     $query = "DELETE FROM ".$table.$whereSql;
    //     $delete = $this->db->query($query);
    //     return $delete?true:false;
    // }




   ?>