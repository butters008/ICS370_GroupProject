<h2 style = "color: #01B0F1;">MOVIES</h3>
        <p><b>English name: </b><?php echo $movie['movie_name_english']; ?></p>
        <p><b>Original name: </b><?php echo $movie['movie_name_native']; ?></p>
        <p><b>Year produced: </b><?php echo $movie['movie_year']; ?></p>
        <p><b>Country: </b><?php echo $movie['country']; ?></p>
        <p><b>Language: </b><?php echo $movie['language']; ?></p>
        <p><b>Genre: </b><?php echo $movie['genre']; ?></p>
        <p><b>Plot: </b><?php echo $movie['plot']; ?></p>
        <h2 style = "color: #01B0F1;">PEOPLE</h3>
        <p><b>Director: </b><?php echo $movie['director']; ?></p>
        <p><b>Producer: </b><?php echo $movie['producer']; ?></p>
        <p><b>Music Director: </b><?php echo $movie['music_director']; ?></p>
        <p><b>Lead Actor: </b><?php echo $movie['lead_actor']; ?></p>
        <p><b>Lead Actress: </b><?php echo $movie['lead_actress']; ?></p>
        <p><b>Actors: </b><?php echo $movie['actor']; ?></p>
        <p><b>Actresses: </b><?php echo $movie['actress']; ?></p>
        <h2 style = "color: #01B0F1;">SONGS</h3>
        <p><b>Soundtrack Title: </b><?php echo $movie['song_title']; ?></p>
        <p><b>Lyrics: </b><?php echo $movie['lyrics']; ?></p>
        <p><b>Video Link: </b><?php echo make_links_clickable($movie['video_link']); ?></p>
        <p><b>Audio Link: </b><?php echo $movie['audio_link']; ?></p>
        <h2 style = "color: #01B0F1;">PICTURES</h3>
        <p><b>Movie Poster </b>
        <p><?php echo '<img src = "images/'.$movie["movie_poster"].'" width="200" height="280 ">' ?></p>
        <p><b>Photo Still </b>
        <p><?php echo '<img src = "images/'.$movie["photo_stills"].'" width="200" height="280 ">' ?></p>



        <?php if($employee): ?>
        <div id="profileBasicInfo">
            <h3><b>Employee Fname</b></h3>
              <?php echo $employee['Employee.FirstName']; ?> <!-- Dynamically log in employee name -->
            <h3><b>Employee Lname</b></h3> 
              <?php echo $employee['Employee.LastName']; ?><!-- Dynamically log in employee name -->
            <img src="Images/ppExample.png" alt="Picture of Employee" id="profilePic">
        </div>
        <div id="profilePageInfo">
            
            <p>This is basic info</p>
        </div>
        <?php else: ?>
          <h5>Issue Loading Information!</h5>
        <?php endif ?>

<?php
  // $servername = "SoftwareDB01";
  $servername = "23.100.81.38";
  $database = "SoftwareDB01";
  $username = "ftpuser1";
  $password = "1qaz!QAZ";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
    echo "Connected successfully";
  }

  $sql = "SELECT * FROM Employee WHERE EmployeeID = 990";

  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["EmployeeID"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
  }
} else {
  echo "0 results";
}

  mysqli_close($conn);

// if(isset($_GET['movie_id'])){

  //   // $id = mysqli_real_escape_string($db, $_GET['movie_id']);
    
  //   // $sql = "SELECT * FROM movies 
	// 	// LEFT JOIN multimedia ON movies.movie_id = multimedia.movie_media_id
	// 	// LEFT JOIN metadata ON movies.movie_id = metadata.movie_id
	// 	// WHERE movies.movie_id = $id";

  //   $sql = "SELECT * FROM Employee WHERE EmployeeID = 990";
  
	// 	//get the query result
	// 	$result = mysqli_query($db, $sql);

	// 	// fetch result in array format
	// 	$employee = mysqli_fetch_assoc($result);

	// 	mysqli_free_result($result);
	// 	mysqli_close($db);

	// 	function make_links_clickable($text){
	// 		return preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<a href="$1">$1</a>', $text);
	// 	}
  // }

?>