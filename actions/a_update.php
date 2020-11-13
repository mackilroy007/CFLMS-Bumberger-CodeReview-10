<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Action</title>
</head>

<body>
    <nav class="navbar sticky-top fixed navbar-light bg-light">
        <form class="form-inline">
            <a class="navbar-brand" href="../index.php">Home</a>
            <a href="../create.php"><button class="btn btn-warning" type="button">Add Media Entry</button></a>
        </form>
    </nav>
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
    //    echo  "<p>Successfully Updated</p>";
    //    echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
    //    echo  "<a href='../index.php'><button type='button'>Home</button></a>";
    echo"
            <div class='container text-center mt-5'>
                <h2 class='text-center m-4'>Successfully updated and modified media entry!</h2>
                <a href='../index.php'><button class='btn btn-dark' type='button'>Home</button></a>
            </div>
        ";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?> 
<!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>