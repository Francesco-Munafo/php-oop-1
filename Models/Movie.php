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