<div class="container mt-3">
    <table class="table text-justify">
      <thead>
        <tr>
          <!-- <th scope="col">#</th> -->
          <th scope="col">Movie</th>
          <th scope="col">Duration</th>
          <th scope="col">Date</th>
          <th scope="col">Time</th>
          <th scope="col">Room</th>
        </tr>
      </thead>
      <tbody>
      <?php  
          $file = file("./dao/datasMovie.txt");
        
          foreach($file as $line){
            echo "<tr>";
            $arrayString = explode(' | ', $line);
            for($i = 0; $i <= sizeof($arrayString)-1; $i++){
              echo "<td>".$arrayString[$i]."</td>";
            }
            echo "</tr>";
        }
        
      ?>
      
      </tbody>
    </table>
</div>

     

