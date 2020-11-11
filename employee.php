<?php 
  include "header.php"; 
  // global $db;


?>

<?php 


  $sql = "SELECT * FROM Employee WHERE EmployeeID = 1";  //check what embedded sql is

  $result = $conn->query($sql);
?>

<!-- Keith - What I envision for the employee page is just going to be a lot of POSTs 
from the server and maybe a request form to change their address or have the ability to
change that from their end.  Depending on company and company policy and how strict they want
it to be.   -->

<!-- This is going to be Employee Profile -->
<main>
    <div class="topnav" id="myTopnav">
        <a href="employee.php" class="active">Profile</a>
        <a href="#news">Projects</a>
        <a href="#contact">Paystubs</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
  </div>
    <section class="profile">

      <div class="container center">
     
        <div id="profileBasicInfo">
        <?php 
          if ($result->num_rows > 0) {
          // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<h3> Employee ID: " . $row["EmployeeID"]. "</h3><h3>Name: " . $row["FirstName"]. " " . $row["LastName"]. "</h3><br>";
            }
          } else {
            echo "0 results";
          }
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

<!-- This is for the navigation bar from W3Schools -  Will use if we need it or purge code if against it -->
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<?php include "footer.php"; ?>