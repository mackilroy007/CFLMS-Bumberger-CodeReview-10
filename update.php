<?php

require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    // connect database with entry
    $sql = "SELECT * FROM media
   INNER JOIN author on media.FK_ID_A = author.ID_A
   INNER JOIN publisher on media.FK_ID_P = publisher.ID_P";
    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Edit Media Content</title>
    </head>

    <body>

        <legend>Modify Media entry</legend>

        <form action="actions/a_update.php" method="post">
            <div class="form-group">
                <label for="title">Media Title:</label>
                <input type="text" name="title" class="form-control" placeholder="Insert the title name here" value="<?php echo $data['title'] ?>">
            </div>

            <div class="form-group">
                <label for="img">Image URL format:</label>
                <input type="text" name="img" class="form-control" placeholder="Insert the image URL here" value="<?php echo $data['img'] ?>">
            </div>
            <div class="form-group">
                <label for="author-name">Author First Name:</label>
                <input type="text" name="author-name" class="form-control" placeholder="Insert the authors first name here" value="<?php echo $data['fName'] ?>">
            </div>
            <div class="form-group">
                <label for="author-surname">Author Surname:</label>
                <input type="text" name="author-surname" class="form-control" placeholder="Insert the authors surname name here" value="<?php echo $data['surname'] ?>">
            </div>
            <div class="form-group">
                <label for="ISBN">ISBN 13 Key:</label>
                <input type="number" name="ISBN" class="form-control" placeholder="Insert ISBN 13 key format" value="<?php echo $data['ISBN'] ?>">
            </div>
            <div class="form-group">
                <label for="description">Media Description:</label>
                <input type="text" name="descripton" class="form-control" placeholder="Add a short description (max 250 char)" value="<?php echo $data['description'] ?>">
            </div>
            <div class="form-group">
                <label for="date">Publishing Date</label>
                <input type="date" name="date" class="form-control" value="<?php echo $data['publish_date'] ?>">
            </div>
            <div class="form-group">
                <label for="publisher-name">Publisher Name:</label>
                <input type="text" name="publisher-name" class="form-control" placeholder="Insert the publisher name here" value="<?php echo $data['name'] ?>">
            </div>
            <div class="form-group">
                <label for="p-address">Publisher address:</label>
                <input type="text" name="p-address" class="form-control" placeholder="Insert the publisher address here" value="<?php echo $data['address'] ?>">
            </div>
            <div class="form-group">
                <label for="p-size">Publisher Size:</label>
                <select name="p-size" class="form-control" value="<?php echo $data['size'] ?>">
                    <option>large</option>
                    <option>medium</option>
                    <option>small</option>
                    <!-- value="large" -->
                </select>
            </div>
            <div class="form-group">
                <label for="type">Media Type:</label>
                <select name="type" class="form-control" value="<?php echo $data['type'] ?>">
                    <option>book</option>
                    <option>CD</option>
                    <option>DVD</option>
                </select>
            </div>
            <div class="form-group">
                <label for="state">Media Availablility:</label>
                <select name="state" class="form-control" value="<?php echo $data['state'] ?>">
                    <option>available</option>
                    <option>reserved</option>
                </select>
            </div>

           
            <input type="hidden" name="id" value="<?php echo $data['ID_M'] ?>" />
            <button type="submit">Save Changes</button>
            <a href="index.php">
                <button type="button">Back</button>
            </a>
            <?php var_dump($id);?>
        </form>


    </body>

    </html>

<?php
}
?>