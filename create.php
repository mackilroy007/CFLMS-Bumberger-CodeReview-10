<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Add a media entry</title>
</head>

<body>


    <nav class="navbar sticky-top fixed navbar-light bg-light">
        <form class="form-inline">
            <a class="navbar-brand" href="index.php">Home</a>
            <a href="create.php"><button class="btn btn-warning" type="button">Add Media Entry</button></a>
        </form>
    </nav>
    <div class="container mt-5">

        <h2 class="text-center m-4">Add a Media entry</h2>

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
                <label for="author-name">Author First Name:</label>
                <input type="text" name="author-name" class="form-control" placeholder="Insert the authors first name here">
            </div>
            <div class="form-group">
                <label for="author-surname">Author Surname:</label>
                <input type="text" name="author-surname" class="form-control" placeholder="Insert the authors surname name here">
            </div>
            <div class="form-group">
                <label for="ISBN">ISBN 13 Key:</label>
                <input type="number" name="ISBN" class="form-control" placeholder="Insert ISBN 13 key format">
            </div>
            <div class="form-group">
                <label for="description">Media Description:</label>
                <input type="text" name="description" class="form-control" placeholder="Add a short description (max 250 char)">
            </div>
            <div class="form-group">
                <label for="date">Publishing Date</label>
                <input type="date" name="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="publisher-name">Publisher Name:</label>
                <input type="text" name="publisher-name" class="form-control" placeholder="Insert the publisher name here">
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
            <!-- button to submit content -->
            <button class="btn btn-success" type="submit">Insert user</button>
            <!-- button to go back -->
            <a href="index.php"><button class="btn btn-dark" type="button">Back</button></a>


        </form>
    </div>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>