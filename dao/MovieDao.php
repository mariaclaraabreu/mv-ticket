<?php
//require_once("model/Movie.php");
class MovieDao{
    //Database methods

    public function saveMovieDao(Movie $movie){
        //database acess
        $file=fopen("../dao/datasMovie.txt", "a");
        $datasMovie = $movie->getMovieName()." | ".$movie->getMovieDuration()." | ".$movie->getMovieDate()." | ".$movie->getMovieTime()." | \n";
        fwrite($file, $datasMovie);
        fclose($file);
        echo "cadastrou";

        
    }
    public function searchMovieDao(string $movieName){
        
    }
    public function listAllDao(){
    }
}

?>