<!DOCTYPE html>

<html>
    <head>
        <title>Movie Manager</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>

    <body>
        <header><h1>Movie Manager</h1></header>

        <main>
            <h1>Edit Movie</h1>
            <form action="edit_movie.php" method="post">
                <label>Title:</label>
                <input type="text" name="title"><br>

                <label>Genre:</label>
                <input type="text" name="genre"><br>

                <label>Rating:</label>
                <input type="text" name="rating"><br>

                <label>Year:</label>
                <input type="text" name="year"><br>
                <input type="submit" value="Save"><br>
            </form>
            <p><a href="index.php">View Movie List</a></p>
        </main>

        <footer>
            <p>&copy; Movie Manager</p>
        </footer>
    </body>
</html>