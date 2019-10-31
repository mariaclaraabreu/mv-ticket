<?php
class Ticket{
    //Attributes
    private $type;
    private $movie;
    //Getters and Setters
    public function getType(){
        return $this->type;
    }
    public function setType($type){
        $this->type=$type;
    }
    public function getMovie(){
        return $this->movie;
    }
    public function setMovie($movie){
        $this->movie=$movie;
    }
    //Database methods
    public function save($ticket){
    }
    public function search($ticket){
    }
    public function listAll(){
    }

}
?>