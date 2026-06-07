<?php
// Get the movie data
$movie_id = filter_input(INPUT_POST, 'movie_id', FILTER_VALIDATE_INT);
$title = filter_input(INPUT_POST, 'title');
$genre = filter_input(INPUT_POST, 'genre');
$rating = filter_input(INPUT_POST, 'rating', FILTER_VALIDATE_FLOAT);
$year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);

// Validate inputs
if ($title == null || $genre == null || $rating == null || $rating == false || $year == null || $year == false) {
    $error = "Invalid movie data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // edit the movie to the database  
    $query = 'UPDATE movies
              SET title = :title,
              genre = :genre,
              rating = :rating,
              year = :year
              WHERE movieId = :movie_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':genre', $genre);
    $statement->bindValue(':rating', $rating);
    $statement->bindValue(':year', $year);
    $statement->bindValue(':movie_id', $movie_id);
    $statement->execute();
    $statement->closeCursor();

    // Display the movies List page
    include('index.php');
}
?>