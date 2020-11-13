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
   $id = $_POST['id'];

$sql = "DELETE author FROM author WHERE ID_A = {$id}
   ";
    if($connect->query($sql) === TRUE) {
    //    echo "<p>Successfully deleted Author!</p>" ;
    echo"
            <div class='container text-center mt-5'>
                <h2 class='text-center m-4'>Successfully deleted author!</h2>
            </div>
        ";
       
   } else {
       echo "Error updating record : " . $connect->error;
   }
   $sql = "DELETE publisher FROM publisher WHERE ID_P = {$id}
   ";
    if($connect->query($sql) === TRUE) {
    //    echo "<p>Successfully deleted Publisher!</p>" ;
    echo"
            <div class='container text-center mt-5'>
                <h2 class='text-center m-4'>Successfully deleted publisher!</h2>
            </div>
        ";
   } else {
       echo "Error updating record : " . $connect->error;
   }
   $sql = "DELETE media FROM media WHERE ID_M = {$id}
   ";
    if($connect->query($sql) === TRUE) {
    //    echo "<p>Successfully deleted Media entry!</p>" ;
    //    echo "<a href='../index.php'><button type='button'>Back</button></a>";
    echo"
            <div class='container text-center mt-5'>
                <h2 class='text-center m-4'>Successfully deleted media entry!</h2>
                <a href='../index.php'><button class='btn btn-dark' type='button'>Home</button></a>
            </div>
        ";
   } else {
       echo "Error updating record : " . $connect->error;
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