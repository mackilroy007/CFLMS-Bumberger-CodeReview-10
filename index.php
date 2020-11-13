<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <meta charset="UTF-8">
  <title>Library content</title>
  <style>
    img {
      height: 10em;
    }
  </style>

</head>

<body>
  <nav class="navbar sticky-top fixed navbar-light bg-light">
    <form class="form-inline">
      <a class="navbar-brand" href="index.php">Home</a>
      <a href="create.php"><button class="btn btn-warning" type="button">Add Media Entry</button></a>
    </form>
  </nav>

  <div class="container-fluid">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Image</th>
          <th scope="col">Author</th>
          <th scope="col">ISBN</th>
          <th scope="col">Short Description</th>
          <th scope="col">Published on</th>
          <th scope="col">Publisher</th>
          <th scope="col">Media Type</th>
          <th scope="col">Status</th>
          <th scope="col">Edit</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM media
        INNER JOIN author on media.FK_ID_A = author.ID_A
        INNER JOIN publisher on media.FK_ID_P = publisher.ID_P";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo  "<tr scope='row'>
                       <td>" . $row['title'] . "</td>
                       <td><img src=" . $row['img'] . "></td>
                       <td>" . $row['fName'] . ' ' . $row['surname'] . "</td>
                       <td>" . $row['ISBN'] . "</td>
                       <td>" . $row['description'] . "</td>
                       <td>" . $row['publish_date'] . "</td>
                       <td>" . $row['name'] . ' based from ' . $row['address'] . '. Publisher size: ' . $row['size'] . "</td>
                       <td>" . $row['type'] . "</td>
                       <td>" . $row['state'] . "</td>
                       <td>
                       <a href='update.php?id=" . $row['ID_M'] . "'><button class='btn btn-outline-primary' type='button'>Edit</button></a>
                       <a href='delete.php?id=" . $row['ID_M'] . "'><button class='btn btn-outline-danger' type='button'>Delete</button></a>
                       </td>
                   </tr>";
          }
        } else {
          echo  "<tr scope='row'>
                    <td colspan='12'><center>No Data Avaliable</center></td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>