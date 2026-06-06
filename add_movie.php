<?php
// Get the movie data
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

    // Add the movie to the database  
    $query = 'INSERT INTO movies
                 (title, genre, rating, year)
              VALUES
                 (:title, :genre, :rating, :year)';
    $statement = $db->prepare($query);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':genre', $genre);
    $statement->bindValue(':rating', $rating);
    $statement->bindValue(':year', $year);
    $statement->execute();
    $statement->closeCursor();

    // Display the movies List page
    include('index.php');
}
?>