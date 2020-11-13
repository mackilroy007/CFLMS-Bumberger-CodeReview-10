<?php

require_once 'db_connect.php';

if ($_POST) {
    // media
    $title = $_POST['title'];
    $img = $_POST['img'];
    $ISBN = $_POST['ISBN'];
    $descripton = $_POST['description'];
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
        echo "<p>New author successfully created</p>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    // publisher
    $sql = "INSERT INTO publisher (name, address, size) 
        VALUES ('$pName', '$pAddress', '$pSize')";
    if ($connect->query($sql) === TRUE) {
        echo "<p>New publisher successfully created</p>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    // media
    $sql = "INSERT INTO media (title, img, FK_ID_A, ISBN, descripton, publish_date, FK_ID_P type, state) 
   VALUES ('$title', '$img', (SELECT MAX(ID_A) FROM author), '$ISBN', '$descripton', $date', (SELECT MAX(ID_P) FROM publisher), '$type', '$state')";
    if ($connect->query($sql) === TRUE) {
        echo "<p>New media entry successfully created</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }



    $connect->close();
}
