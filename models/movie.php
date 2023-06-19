<?php

class Movie
{
	public string $title;
	public string $director;
	public string $country;
	public array $genres;
	public array $cast;
	public int $year;
	public ?string $poster;

	public function __construct(
		string $title,
		string $director,
		string $country,
		array $genres,
		array $cast,
		int $year,
		?string $poster
	) {
		$this->title = $title;
		$this->director = $director;
		$this->country = $country;
		$this->genres = $genres;
		$this->cast = $cast;
		$this->year = $year;
		$this->poster = $poster;
	}

	public function getPosterPath($filename)
	{
		$fullPath = "img/" . $filename;
		return $fullPath;
	}

	public function displayMovieInfo()
	{
		echo "<h2>{$this->title}</h2>";
		echo "<p>Regia: <span>{$this->director}</span></p>";
		echo "<p>Nazione: <span>{$this->country}</span></p>";
		echo "<p>Genere:</p>";
		echo "<ul>";
		foreach ($this->genres as $genre) {
			echo "<li><span>$genre</span></li>";
		}
		echo "</ul>";
		echo "<p>Cast:</p>";
		echo "<ul>";
		foreach ($this->cast as $actor) {
			echo "<li><span>$actor</span></li>";
		}
		echo "</ul>";
		echo "<p>Anno di uscita: <span>{$this->year}</span></p>";
		if ($this->poster) {
			$posterPath = $this->getPosterPath($this->poster);
			// echo "<p>{$posterPath}</p>";
			echo "<img src='{$posterPath}' alt='{$this->title} Poster'>";
		}
	}
}
