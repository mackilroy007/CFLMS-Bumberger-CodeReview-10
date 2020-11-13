<!DOCTYPE html>
<html>

<head>
    <title>Add a media entry</title>
</head>

<body>

    <fieldset>
        <legend>Add a Media</legend>

        <form action="actions/a_create.php" method="post">

            <div class="form-group">
                <label for="title">Media Title:</label>
                <input type="text" name="title" class="form-control" placeholder="Insert the title name here">
            </div>

            <div class="form-group">
                <label for="img">Image URL format:</label>
                <input type="text" name="img" class="form-control" placeholder="Insert the image URL here">
            </div>
            <div class="form-group">
                <label for="Author-name">Author First Name:</label>
                <input type="text" name="Author-name" class="form-control" placeholder="Insert the authors first name here">
            </div>
            <div class="form-group">
                <label for="Author-surname">Author Surname:</label>
                <input type="text" name="Author-surname" class="form-control" placeholder="Insert the authors surname name here">
            </div>
            <div class="form-group">
                <label for="ISBN">ISBN 13 Key:</label>
                <input type="number" name="ISBN" class="form-control" placeholder="Insert ISBN 13 key format">
            </div>
            <div class="form-group">
                <label for="description">Media Description:</label>
                <input type="text" name="descripton" class="form-control" placeholder="Add a short description (max 250 char)">
            </div>
            <div class="form-group">
                <label for="date">Publishing Date</label>
                <input type="date" name="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="publisher-name">Publisher Name:</label>
                <input type="text" name="title" class="form-control" placeholder="Insert the publisher name here">
            </div>
            <div class="form-group">
                <label for="p-address">Publisher address:</label>
                <input type="text" name="p-address" class="form-control" placeholder="Insert the publisher address here">
            </div>
            <div class="form-group">
                <label for="p-size">Publisher Size:</label>
                <select name="p-size" class="form-control">
                    <option>large</option>
                    <option>medium</option>
                    <option>small</option>
                    <!-- value="large" -->
                </select>
            </div>
            <div class="form-group">
                <label for="type">Media Type:</label>
                <select name="type" class="form-control">
                    <option>book</option>
                    <option>CD</option>
                    <option>DVD</option>
                </select>
            </div>
            <div class="form-group">
                <label for="state">Media Availablility:</label>
                <select name="state" class="form-control">
                    <option>available</option>
                    <option>reserved</option>
                </select>
            </div>
            <!-- action button -->
            <button type="submit">Insert user</button>
            <a href="index.php"><button type="button">Back</ button></a>


        </form>

    </fieldset>

</body>

</html>