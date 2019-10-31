<?php

class Room{
    //Attributes
    private $numberRoom;
    private $stateRoom;
    private $matSeat;
    //Constructs
    public function __construct($numberRoom, $stateRoom) {
        $this->setnumberRoom($numberRoom);
        $this->setstateRoom($stateRoom);
    }
    //Getters and Setters
    public function getnumberRoom(){
        return $this->numberRoom;
    }
    public function setnumberRoom($numberRoom){
        $this->numberRoom=$numberRoom;
    }
    public function getstateRoom(){
        return $this->stateRoom;
    }
    public function setstateRoom($stateRoom){
        $this->stateRoom=$stateRoom;
    }
    public function getmatSeat(){
        return $this->matSeat;
    }
    public function setmatSeat($matSeat){
        $this->matSeat=$matSeat;
    }

}

?>