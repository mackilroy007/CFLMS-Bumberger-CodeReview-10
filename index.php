<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <title>Library content</title>


</head>

<body>

  <div class="">
    <a href="create.php"><button type="button">Add User</button></a>
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
                       <td>" . $row['title']. "</td>
                       <td>" . $row['img'] . "</td>
                       <td>" . $row['fName']. ' '. $row['surname']. "</td>
                       <td>" . $row['ISBN']. "</td>
                       <td>" . $row['description']. "</td>
                       <td>" . $row['publish_date']. "</td>
                       <td>" . $row['name']. ' based from ' .$row['address']. '. Publisher size: '. $row['size']. "</td>
                       <td>" . $row['type']. "</td>
                       <td>" . $row['state']. "</td>
                       <td>
                           <a href='update.php?id=" . $row['ID_M'] . "'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=" . $row['ID_M'] . "'><button type='button'>Delete</button></a>
                       </td>
                   </tr>";
          }
        } else {
          echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

</body>

</html>