<?php 

class Movie{
  public $title;
  public $genre;
  public $year;
  public $duration;
  public $director;
  public $writers;
  public $stars;
  public $rating;

  function __construct($_title, $_genre, $_year, $_duration)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->duration = $_duration;
  }

}