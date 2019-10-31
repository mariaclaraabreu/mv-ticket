
<div class="container mt-3">

<div class="row justify-content-center">
    
    <div class="col-5">
        <h5>Registering a movie</h5>
        <form name="formMovie" method="get" action="./controller/MovieController.php">
        <div class="form-group">
            <label for="InputMovieName">Name</label>
            <input type="text" class="form-control" name="movieName" id="InputMovieName" aria-describedby="movieName" placeholder="Movie name">
            <label for="InputMovieDate">Date</label>
            <input type="date" class="form-control" name="movieDate" id="InputMovieDate" aria-describedby="movieDate" placeholder="Movie date">
            <label for="InputMovieTime">Time</label>
            <input type="time" class="form-control" name="movieTime" id="InputMovieTime" aria-describedby="movieTime" placeholder="Movie time">
            <label for="InputMovieDuration">Duration (in hours)</label>
            <input type="text" class="form-control" name="movieDuration" id="InputMovieDuration" aria-describedby="movieDuration" placeholder="Ex.: 2">
            <label for="InputMovieDuration">Select a room</label>
            <select class="custom-select mr-sm-2" name="movieSelect" id="inlineFormCustomSelect">
              <option selected>Select...</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>

        </div>
        <input type="submit" class="btn btn-primary" value="Register">
        </form>
    

    </div>

</div>


<!-- <form>
  <div class="form-group">
    <label for="InputMovieName">Movie name</label>
    <input type="text" class="form-control" id="InputMovieName" aria-describedby="movieName" placeholder="Movie name">
  </div>
  <div class="form-group">
    <label for="InputMovieDate">Movie date</label>
    <input type="text" class="form-control" id="InputMovieDate" aria-describedby="movieDate" placeholder="Movie date">
  </div>
  <div class="form-group">
    <label for="InputMovieTime">Movie time</label>
    <input type="text" class="form-control" id="InputMovieTime" aria-describedby="movieTime" placeholder="Movie time">
  </div>
</form> -->

</div>