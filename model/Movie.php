<?php

class Movie{
    //Attributes
    private $movieName;
    private $movieDate;
    private $movieTime;
    private $movieDuration;
    private $room;
    //Getters and Setters
    function __construct($movieName, $movieDate, $movieTime, $movieDuration){
      $this->movieName=$movieName;
      $this->movieDate=$movieDate;
      $this->movieTime=$movieTime;
      $this->movieDuration=$movieDuration;

    }
    public function getMovieName(){
      return $this->movieName;
    }
    public function setMovieName($movieName){
      $this->movieName=$movieName;
    }
    public function getMovieDate() {
        return $this->movieDate;
      }
      public function setMovieDate($movieDate) {
        $this->movieDate = $movieDate;
      }
      public function getMovieTime(){
        return $this->movieTime;
      }
      public function setMovieTime($movieTime){
        $this->movieTime=$movieTime;
      }
      public function getMovieDuration(){
        return $this->movieDuration;
      }
      public function setMovieDuration($movieDuration){
        $this->movieDuration=$movieDuration;
      }
      public function getRoom(){
        return $this->room;
      }
      public function setRoom($room){
        $this->room=$room;
      }
      

    
}

?>