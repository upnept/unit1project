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

<html>
    <head>
        <title>Movie Manager</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>

    <body>
        <header><h1>Movie Manager</h1></header>

        <footer>
            <p>&copy; Movie Manager</p>
        </footer>
    </body>
</html>