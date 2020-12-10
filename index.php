<?php 
  include "header.php";
  include_once "includes/dbh.inc.php";
  // include_once "includes/login.inc.php";
  // include_once "login.php";
  session_start();
  
  
  
?>

<!-- This is going to be Employee Profile -->
<main>

<?php 
    if (isset($_SESSION["useruid"])){
      echo '
      <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Home</a>
        <a href="newProject.php">New Projects</a>
        <a style="float: right;" href="includes/logout.inc.php">Logout</a>
      </div>'; #End of navigation bar
    }
    else {
      header("location: ../ICS370_GroupProject/login.php");          
    }
?>
      <section class="profile">
        <div class="container center">
          <div id="profileBasicInfo"><br><br><br>

<?php 
  if (isset($_POST["submit"])){
    $name1 = $_POST['userName'];
    $sql4 = "SELECT * FROM users WHERE userUID = $name1;";
    $result = mysqli_query($conn, $sql4);
    // $resultCheck = mysqli_num_rows($result);
    // $row = mysqli_fetch_assoc($result);
    // echo $row["userUID"];


    // echo '
    // <table>
    //   <tbody>';

      // if ($resultCheck > 0) {
      //   while ($row = mysqli_fetch_assoc($result)) {
      //     echo "<tr><td>".$row['userUID']."</td></tr>";
      //   }
      // }

    // echo '
    //   </tbody>
    // </table>
    // ';

    
  }
  else {
    echo '
      <p>re-enter your username to get total yearly income for company</p>
      <form action="index.php" method="post">
        <input type="text" name="userName" placeholder="Company Name..." required> <br /><br />
        <button type="submit" name="submit">submit</button><br/><br/>
      </form>';
  }
?>    

          </div>
          <div id="profilePageInfo"><br><br><br>
            <table id="projectList" style="margin: auto;">
              <thead>
                <tr>
                  <th>Project Name</th>
                  <th>Project Type</th>
                  <th>Project Quote</th>
                  <th>Project City</th>
                </tr>
              </thead>
              <tbody>
<?php              
      $sql = "SELECT * FROM project;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td><a href='modifyProject.php?project_id=".$row['project_id']."'>".$row['project_name']."</a?</td><td>".$row['project_type']."</td><td>".$row['project_quote']."</td><td>".$row['project_City']."</td></tr>";
        }
      }
?>      
              </tbody>
            </table>
          </div>
        </div>

      </section>

</main>
</body>
</html>
