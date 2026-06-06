<?php
// Get the movie data
$movie_id = filter_input(INPUT_POST, 'movie_id', FILTER_VALIDATE_INT);

// Validate inputs
if ($movie_id == false) {
    $error = "Invalid movie id. Try again.";
    include('error.php');
} else {
    require_once('database.php');

    // remove the movie from the database  
    $query = 'DELETE FROM movies
              WHERE movieId = :movie_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':movie_id', $movie_id);
    $statement->execute();
    $statement->closeCursor();

    // Display the movies List page
    include('index.php');
}
?>