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
        // media
        $title = $_POST['title'];
        $img = $_POST['img'];
        $ISBN = $_POST['ISBN'];
        $description = $_POST['description'];
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

        // author
        $sql = "INSERT INTO author (fName, surname) 
        VALUES ('$aName', '$aSurname')";
        if ($connect->query($sql) === TRUE) {
            echo "
        <div class='container text-center mt-5'>
            <h2 class='text-center m-4'>New Author Successfully Created</h2>
        </div>
    ";
        } else {
            echo "Error " . $sql . ' ' . $connect->connect_error;
        }

        // publisher
        $sql = "INSERT INTO publisher (name, address, size) 
        VALUES ('$pName', '$pAddress', '$pSize')";
        if ($connect->query($sql) === TRUE) {
            echo "
        <div class='container text-center mt-5'>
            <h2 class='text-center m-4'>New Pumbilsher Successfully Created</h2>
        </div>
    ";
        } else {
            echo "Error " . $sql . ' ' . $connect->connect_error;
        }

        // media
        $sql = "INSERT INTO media (title, img, FK_ID_A, ISBN, description, publish_date, FK_ID_P, type, state) 
   VALUES ('$title', '$img', (SELECT MAX(ID_A) FROM author), '$ISBN', '$description',
    '$date', (SELECT MAX(ID_P) FROM publisher), '$type', '$state')";
        if ($connect->query($sql) === TRUE) {
            echo "
        <div class='container text-center mt-5'>
            <h2 class='text-center m-4'>New Entry Successfully Created</h2>
            <a href='../index.php'><button class='btn btn-dark' type='button'>Home</button></a>
            <a href='../create.php'><button class='btn btn-dark' type='button'>Back</button></a>
        </div>
    ";
        } else {
            echo "Error " . $sql . ' ' . $connect->connect_error;
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