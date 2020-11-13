<?php 

require_once 'db_connect.php';

if ($_POST) {
   $id = $_POST['id'];
var_dump($id);
$sql = "DELETE author FROM author WHERE ID_A = {$id}
   ";
    if($connect->query($sql) === TRUE) {
       echo "<p>Successfully deleted Author!</p>" ;
       
   } else {
       echo "Error updating record : " . $connect->error;
   }
   $sql = "DELETE publisher FROM publisher WHERE ID_P = {$id}
   ";
    if($connect->query($sql) === TRUE) {
       echo "<p>Successfully deleted Publisher!</p>" ;
   } else {
       echo "Error updating record : " . $connect->error;
   }
   $sql = "DELETE media FROM media WHERE ID_M = {$id}
   ";
    if($connect->query($sql) === TRUE) {
       echo "<p>Successfully deleted Media entry!</p>" ;
       echo "<a href='../index.php'><button type='button'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>
