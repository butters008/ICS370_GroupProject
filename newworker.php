<?php 
    include "header.php";
    

    session_start();
?>

<main>
    <div class="topnav" id="myTopnav">
        <?php 
            if (isset($_SESSION["useruid"])){
                echo '<a href="index.php">Home</a>';
                echo '<a href="project.php" class="active">Projects</a>';
                echo '<a href="#contact">Paystubs</a>';
            }
            else {
                echo '<a href="login.php" class="active">login</a>';
            }
        ?>    
    </div>
    <div class="container center">

<div style="text-align: center;">
    <h3>Add an Employee</h3>
    <label for="fname">Full Name:</label><br>
  <input type="text" id="workerName" name="fname" ><br>
  <label for="wag">Wages:</label><br>
  <input type="text" id="workerWage" name="lname" ><br><br>
  <form action="/action_page.php">
  <label for="hours">Expected hours:</label><br>
   <input type="text" id="workerHours" name="lname" ><br><br>
            <button type="button" onclick="addWorker();">Add Worker</button><br /><br />
 </form> 
    </div>
    </div>


</main>
<!-- Only for Dev -->
<ul class='onlyForDev'>
    <li><a href='newProject.php'>New Project</a></li>
    <li><a href='project.php'>project (seeded)</a></li>
    <li><a href='#empty.php'>project (no info)</a></li>
</ul>

<script>
    function addWorker(){
        var html = "<tr>";
            html += "<td><input type='text' name='workerName[]'></td>";
            html += "<td><input type='text' name='workerWage[]'></td>";
            html += "<td><input type='text' name='workerHours[]'></td>";
            html += "</tr>";
            document.getElementById("tWorker").insertRow().innerHTML = html;
            </script>

<?php include "footer.php"; ?>