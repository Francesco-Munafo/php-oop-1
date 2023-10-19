<?php 

class Movie
{

    public $title;

    public $description;

    public $coverImage;

    public $cast;

    public $rating;

    public $language;

    public $adult;

    public $releaseDate;

    public $genres;


    function __construct($_title, $_description, $_coverImage, $_cast, $_rating, $_language, $_adult, $_releaseDate, $_genres)
    {

        $this->title = $_title;
        $this->description = $_description;
        $this->coverImage = $_coverImage;
        $this->cast = $_cast;
        $this->rating = $_rating;
        $this->language = $_language;
        $this->adult = $_adult;
        $this->releaseDate = $_releaseDate;
        $this->genres = $_genres;

    }

    function getGenres(){
        return $this->genres;
    }


}

$movies= [];

array_push($movies,

$movie_1 = new Movie("Jojo Bizzarre Adventures", "The best anime ever made", NULL, NULL, "5/5", "JP", "false", "01/11/1993", "Anime"),
$movie_2 = new Movie("Matrix", "A classic", NULL, "Keanu Reeves", "5/5", "EN", "true", "31/03/1999", ["Action", "Science Fiction"]),
$movie_3 = new Movie("El Camino", "A classic", NULL, "Bryan Cranston", "4/5", "EN", "true", "11/10/2019", "Action"),

);

var_dump($movies);




