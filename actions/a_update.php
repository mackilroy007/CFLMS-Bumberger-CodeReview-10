<?php 

require_once 'db_connect.php';

if ($_POST) {
    $title = $_POST['title'];
    $img = $_POST['img'];
    $ISBN = $_POST['ISBN'];
    $descripton = $_POST['descripton'];
    $date = $_POST['date'];
    $type = $_POST['type'];
    $state = $_POST['state'];

    // author
    $aName = $_POST['author-name'];
    $aSurname = $_POST['author-surname'];

    // publisher
    $pName = $_POST['publisher-name'];
    $pAddress = $_POST['p-address'];
    $pSize = $_POST['p-size'];

    
   $id = $_POST['id'];

//    $sql = "UPDATE user SET first_name = '$fname', last_name = '$lname', date_of_birth = '$dob' WHERE id = {$id}" ;
    $sql = "UPDATE media
    INNER JOIN author on media.FK_ID_A = author.ID_A
    INNER JOIN publisher on media.FK_ID_P = publisher.ID_P
    SET media.title = '$title', media.img ='$img', author.fName ='$aName', author.surname= '$aSurname', media.ISBN= '$ISBN',
    media.description = '$descripton', media.publish_date ='$date', publisher.name='$pName', 
    publisher.address='$pAddress', publisher.size='$pSize', media.type='$type', media.state='$state'
WHERE media.ID_M = {$id}";
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?> 