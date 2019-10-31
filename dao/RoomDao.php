<?php
require_once("Room.php");


class RoomDao{
    //Database methods
    public function save(Room $room){
        $conn = new mysqli("localhost", "root", "", "movietheater");
        if($conn->connect_error){
	        echo "Error: " . $conn->connect_error;
        }   
        $stmt = $conn->prepare("INSERT INTO Ticket (numberRoom, stateRoom) VALUES (?, ?)");
        $stmt->bind_param("is", $numberRoom, $stateRoom);
        $numberRoom= $room->getnumberRoom();
        $stateRoom = $room->getstateRoom();;
        $stmt->execute();
    }
    public function search(int $numberRoom){
        
    }
    public function listAll(){
    }
}

?>