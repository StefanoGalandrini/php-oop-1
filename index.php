<?php
include __DIR__ . "/models/movie.php";

$json = file_get_contents(__DIR__ . "/db.json");
$moviesData = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Movies</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="movie-grid">
            <?php
            foreach ($moviesData as $movieData) {
                $movie = new Movie(
                    $movieData['title'],
                    $movieData['director'],
                    $movieData['country'],
                    $movieData['genres'],
                    $movieData['cast'],
                    $movieData['year'],
                    $movieData['poster']
                );
                echo '<div class="movie-card">';
                $movie->displayMovieInfo();
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>

</html>
