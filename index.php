<?php

include __DIR__ . "/models/movie.php";

$json = file_get_contents(__DIR__ . "/db.json");
$moviesData = json_decode($json, true);



foreach ($moviesData as $movie) {
    $movie = new Movie(
        $movie['title'],
        $movie['director'],
        $movie['country'],
        $movie['genres'],
        $movie['cast'],
        $movie['year'],
        $movie['poster']
    );

    $movie->displayMovieInfo();
}
