<?php 
  include "header.php";
  include "includes/dbh.inc.php";
  include "includes/functions.inc.php";
  session_start();
  
  if(isset($_GET['project_id'])){
    $id = mysqli_real_escape_string($conn, $_GET['project_id']);
    $sql = "SELECT * FROM project WHERE project_id = $id;";
    $result =  mysqli_query($conn, $sql);
    $project = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    // mysqli_close($conn);
  }
?>

<!-- This is going to be Employee Profile -->
<main>
 
    <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Home</a>
        <a href="newProject.php">New Projects</a>
        <a style="float: right;" href="includes/logout.inc.php">Logout</a>
    </div>
    <section class="profile">
        <div class="container center">
          <div id="profilePageInfo" style="margin: auto;"><br>
          <center>
          <h1 style="text-align: center;">View or Modify Project</h1>
          <form action="includes/modifyProject.inc.php" method="post" >
          <!-- <form action="modifyProject.php" method="post" > -->
            <input type="text" name="pName" value=<?php echo $project["project_name"];?> required> <br /><br />
            <input type="text" name="pType" value=<?php echo $project["project_type"];?> required> <br /><br />
            <input type="text" name="pQuote" value=<?php echo $project["project_quote"];?> required> <br /><br />
            <input type="text" name="pAddress" value=<?php echo $project["project_address"];?> required> <br /><br />
            <input type="text" name="pCity" value=<?php echo $project["project_City"];?> required> <br /><br />
            <input type="text" name="pZip" value=<?php echo $project["project_address"];?> required> <br /><br />
            <p style="text-align: center;">Workers</p>
            <table style="margin: auto;">
                <thead style="width: 200px; background-color: white; border-bottom: solid black;">
                    <tr>
                        <th>Worker Name</th>
                        <th>Worker Wage</th>
                        <th>Worker Expected Hours</th>
                    </tr>
                </thead>
                <tbody id="tWorker" style="width: 200px; background-color: white; border-bottom: solid black;">
                
<?php
//WORKER---------              
  $sql = "SELECT * FROM worker WHERE project_id = $id;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td><input type='text' name='workerName[]' value=".$row['worker_name']."></td><td><input type='text' name='workerWage[]' value=".$row['worker_wage']."></td><td><input type='text' name='workerHours[]' value=".$row['worker_hours']."></td></tr>";
    }
  }
?>    
                </tbody>
            </table>
            <button type="button" onclick="addWorker();">Add Worker</button><br /><br />
            <p >Materials</p>
            <table style="margin: auto;">
                <thead style="width: 200px; background-color: white; border-bottom: solid black;">
                    <tr>
                        <th>Material Name</th>
                        <th>Material Amount</th>
                        <th>Material Cost</th>
                    </tr>
                </thead>
                <tbody id="tMaterial" style="width: 200px; background-color: white; border-bottom: solid black;">
                
<?php
//MATERIAL--------------------------------              
  $sql = "SELECT * FROM material WHERE project_id = $id;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      // echo "<tr><td><input type='text' name='materialName[]' value=".$row['material_name']."></td><td><input type='text' name='materialAmount[]' value=".$row['material_amount']."></td><td><input type='text' name='materialCost[]' value=".$row['material_cost']."></td></tr>";
      echo "<tr><td>".$row['material_name']."</td><td>".$row['material_amount']."</td><td>".$row['material_cost']."></td></tr>";
    }
  }
?>              
                
                </tbody>
            </table> 
            <button type="button" onclick="addMaterial();">Add Material</button><br /><br />
            <button type="submit" name="submit">Update Project</button><br/><br/>
          </form>
          </center>
          </div>
        </div>

    </section>';

</main>
</body>
<script>
    function addWorker(){
        var html = "<tr>";
            html += "<td><input type='text' name='workerName[]'></td>";
            html += "<td><input type='text' name='workerWage[]'></td>";
            html += "<td><input type='text' name='workerHours[]'></td>";
            html += "</tr>";
            document.getElementById("tWorker").insertRow().innerHTML = html;
    }
    function addMaterial(){
        var html = "<tr>";
            html += "<td><input type='text' name='materialName[]'></td>";
            html += "<td><input type='text' name='materialAmount[]'></td>";
            html += "<td><input type='text' name='materialCost[]'></td>";
            html += "</tr>";
            document.getElementById("tMaterial").insertRow().innerHTML = html;
    }
</script>

</html>