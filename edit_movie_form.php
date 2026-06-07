<?php
// Get the movie data
$movie_id = filter_input(INPUT_GET, 'movie_id', FILTER_VALIDATE_INT);

require_once('database.php');

$query = 'SELECT * FROM movies
          WHERE movieId = :movie_id';
$statement = $db->prepare($query);
$statement->bindValue(':movie_id', $movie_id);
$statement->execute();
$movie = $statement->fetch();
$statement->closeCursor();
?>

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
                <input type="text" name="title" value="<?php echo $movie['title']; ?>"><br>

                <label>Genre:</label>
                <input type="text" name="genre" value="<?php echo $movie['genre']; ?>"><br>

                <label>Rating:</label>
                <input type="text" name="rating" value="<?php echo $movie['rating']; ?>"><br>

                <label>Year:</label>
                <input type="text" name="year" value="<?php echo $movie['year']; ?>"><br>

                <input type="hidden" name="movie_id" value="<?php echo $movie['movieID']; ?>"><br>

                <input type="submit" value="Save"><br>
            </form>
            <p><a href="index.php">View Movie List</a></p>
        </main>

        <footer>
            <p>&copy; Movie Manager</p>
        </footer>
    </body>
</html>