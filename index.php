<?php
require_once('database.php');

// get all movies
$queryCategory = 'SELECT * FROM movies';
$statement = $db->prepare($queryCategory);
$statement->execute();
$movies = $statement->fetch();
$statement->closeCursor();

?>

<!DOCTYPE html>

<!DOCTYPE html>

<html>
    <head>
        <title>Movie Manager</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>

    <body>
        <header><h1>Movie Manager</h1></header>

        <section>
            <!-- display movies -->
            <table>
                <tr>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Rating</th>
                    <th>Rating</th>
                </tr>

                <?php foreach ($movies as $movie) : ?>
                <tr>
                    <td><?php echo $movie['title']; ?></td>
                    <td><?php echo $movie['genre']; ?></td>
                    <td><?php echo $movie['rating']; ?></td>
                    <td><?php echo $movie['year']; ?></td>
                    <td><form action="delete_movie.php" method="post">
                        <input type="hidden" name="movie_id"
                            value="<?php echo $movies['movieID']; ?>">
                        <input type="submit" value="Delete">
                    </form></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <p><a href="add_movie_form.php">Add Movie</a></p>
        </section>

        <footer>
            <p>&copy; Movie Manager</p>
        </footer>
    </body>
</html>