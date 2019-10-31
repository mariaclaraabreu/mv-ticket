<?php


$movieName=$_GET["movieName"];
$movieDate=$_GET["movieDate"];
$movieTime=$_GET["movieTime"];
$movieDuration=$_GET["movieDuration"];

$controller = new MovieController;
$controller->takeDatasMovieController($movieName,$movieDate,$movieTime,$movieDuration);



class MovieController{

    public function takeDatasMovieController($movieName,$movieDate,$movieTime,$movieDuration){
        require_once '../model/Movie.php';
        $movie = new Movie($movieName,$movieDate, $movieTime, $movieDuration);
        $cont = new MovieController();
        $cont->saveMovieController($movie);
    }
    
    public function saveMovieController(Movie $movie){
        $cont = new MovieController();
        $result = $cont->checkDateSevenDays($movie->getMovieDate());
        if($result == 0){
            $takeDayWeek = $cont->takeDay($movie->getMovieDate()); //verificando se é quinta
            if ($takeDayWeek == 'Thursday'){
                $resultcheckAllowedTime = $cont->checkAllowedTime($movie->getMovieTime(), $movie->check);
                if($resultcheckAllowedTime == 1){
                    require_once '../dao/MovieDao.php';
                    $movieDao = new MovieDao();
                    $movieDao->SaveMovieDao($movie);
                }else{
                    echo "Não foi possível cadastrar o filme, pois o horário de exibição informado não está entre 12 e 22hrs.";
                }
                
            }else{
                echo "Não foi possível cadastrar o filme. O  dia informado é diferente de quinta-feira.";
            }
            
        }else{
            echo "Não foi possível cadastrar o filme. A data do filme inserida é 7 dias após a data atual";
        }
    }

    public function checkDateSevenDays($movieDate){ //nota: se for ano diferente, n cadastra do mesmo jeito (erro)
        $currentDateAndOneWeek = date('Y-m-d', strtotime('+1 week'));
        if($movieDate == $currentDateAndOneWeek){
            return -1;
        }else{
            return 0;
        }
    }

    public function takeDay($date){
        return $weekDay = date('l', strtotime($date));

    }

    public function checkAllowedTime($movieTime, $movieDuration){
        $startTimeMovies = date('H:i', strtotime("12:00"));
        $endTimeMovies = date('H:i', strtotime("22:00"));
        $movieTime = date('H:i', strtotime($movieTime));
        if($movieTime >= $startTimeMovies && $movieTime <= $endTimeMovies){
            return 1;
        }else{
            return 0;
        }
    }
    














}


?>