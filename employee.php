<?php include "header.php"; ?>
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
        <div id="profileBasicInfo">
            <h3>Employee Fname</h3> <!-- Dynamically log in employee name -->
            <h3>Employee Lname</h3> <!-- Dynamically log in employee name -->
            <img src="Images/ppExample.png" alt="Picture of Employee" id="profilePic">
        </div>
        <div id="profilePageInfo">
            
            <p>This is basic info</p>
        </div>
        
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