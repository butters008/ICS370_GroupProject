<?php 
  include "header.php";
  session_start(); 
?>

<!-- This is going to be Employee Profile -->
<main>
    <div class="topnav" id="myTopnav">
        <?php 
            if (isset($_SESSION["useruid"])){
                echo '<a href="employee.php" class="active">Profile</a>';
                echo '<a href="#news">Projects</a>';
                echo '<a href="#contact">Paystubs</a>';
            }
            else {
                echo '<a href="login.php" class="active">login</a>';
            }
        ?>
        
  </div>
    <section class="profile">

      <div class="container center">
     
        <div id="profileBasicInfo">
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
          <img src="Images/ppExample.png" alt="Picture of Employee" id="profilePic">
        </div>
        <div id="profilePageInfo">
            
            <p>This is basic info</p>
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