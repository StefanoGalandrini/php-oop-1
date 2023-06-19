<?php
class Movie {
    public string $title;
    public string $director;
    public string $country;
    public array $genres;
    public array $cast;
    public int $year;
    public ?string $poster;

    public function __construct(string $title, string $director, string $country, array $genres, array $cast, int $year, ?string $poster) {
        $this->title = $title;
        $this->director = $director;
        $this->country = $country;
        $this->genres = $genres;
        $this->cast = $cast;
        $this->year = $year;
        $this->poster = $poster;
    }

    public function displayMovieInfo() {
        echo "<h2>{$this->title}</h2>";
        echo "<p>Director: {$this->director}</p>";
        echo "<p>Country: {$this->country}</p>";
        echo "<p>Genres: " . implode(', ', $this->genres) . "</p>";
        echo "<p>Cast: " . implode(', ', $this->cast) . "</p>";
        echo "<p>Year: {$this->year}</p>";
        if ($this->poster) {
            echo "<img src='{$this->poster}' alt='{$this->title} Poster'>";
        }
    }
}
?>
