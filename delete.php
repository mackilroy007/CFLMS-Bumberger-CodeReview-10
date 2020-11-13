<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

//    connect database with entry
   $sql = "SELECT * FROM media 
   INNER JOIN author on media.FK_ID_A = author.ID_A
   INNER JOIN publisher on media.FK_ID_P = publisher.ID_P 
   WHERE ID_M = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete Media</title>
</head>
<body>

<h3>Do you really want to delete this entry?</h3>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['ID_M'] ?>" />
   <button type="submit">Yes, delete it!</button >
   <a href="index.php"><button type="button">No, go back!</button ></a>
</form>

</body>
</html>

<?php
}
?>
