<?php 
  include "header.php";
  session_start(); 
?>

<!-- This is going to be Employee Profile -->
<main>

<?php 
    if (isset($_SESSION["useruid"])){
      echo '
      <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Home</a>
        <a href="project.php">Projects</a>
        <a href="includes/logout.inc.php">Logout</a>
      </div>'; #End of navigation bar

      echo '
      <section class="profile">
        <div class="container center">
          <div id="profileBasicInfo">
            <img src="Images/ppExample.png" alt="Picture of Employee" id="profilePic">
          </div>
          <div id="profilePageInfo"><br><br><br>
            <table class="projectList" style="margin: auto;">
              <thead>
                <tr>
                  <th>Project Name</th>
                  <th>Project Type</th>
                  <th>Project Quote</th>
                  <th>Project Expense</th>
                  <th>Total Income</th>
                </tr>
              </thead>
              <tbody> ';
              
              
      
              echo '  
              </tbody>
            </table>
          </div>
        </div>

      </section>';
      echo '';
    }
    else {
      header("location: ../ICS370_GroupProject/login.php");          
    }
?>
        

        <?php 
          // if ($result->num_rows > 0) {
          // // output data of each row
          //   while($row = $result->fetch_assoc()) {
          //     echo "<h3> Employee ID: " . $row["EmployeeID"]. "</h3><h3>Name: " . $row["FirstName"]. " " . $row["LastName"]. "</h3><br>";
          //   }
          // } else {
          //   echo "0 results";
          // }
        ?>

        </div>
        
        <?php //else: ?>
          <!-- <h5>Issue Loading Information!</h5> -->
        <?php //endif ?> 
        
        
        <!-- <div id="profileBasicInfo">
            <h3><b>Employee Fname</b></h3>
            <h3><b>Employee Lname</b></h3> 
            <img src="Images/ppExample.png" alt="Picture of Employee" id="profilePic">
        </div>
        <div id="profilePageInfo">    
            <p>This is basic info</p>         -->
    
    </section>

</main>


<?php include "footer.php"; ?>