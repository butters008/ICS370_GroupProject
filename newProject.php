<?php 
    include "header.php";
    include "includes/dbh.inc.php";
    include "includes/functions.inc.php";

    session_start();

    if(isset($_POST["submit"])){
        $pName = $_POST["pName"];
        $pType = $_POST["pType"];
        $pQuote = $_POST["pQuote"];
        $pAddress = $_POST["pAddress"];
        $pCity = $_POST["pCity"];
        $pZip = $_POST["pZip"];
    
        // require_once "dbh.inc.php";
        // require_once "functions.inc.php";

        $sql = "INSERT INTO project (project_name, project_type, project_quote, project_address, project_City, project_Zip) VALUES ('$pName', '$pType', '$pQuote', '$pAddress', '$pCity', '$pZip');";
        mysqli_query($conn, $sql);
        $projectID = mysqli_insert_id($conn);

        for ($i = 0; $i < count($_POST["workerName"]); $i++){
            $sql2 = "INSERT INTO worker (project_id, worker_name, worker_wage, worker_hours) VALUES ('$projectID', '".$_POST['workerName'][$i]."', '".$_POST['workerWage'][$i]."', '".$_POST['workerHours'][$i]."');";
            mysqli_query($conn, $sql2);
        }

        for ($k = 0; $k < count($_POST["materialName"]); $k++){
            $sql3 = "INSERT INTO material (project_id, material_name, material_amount, material_cost) VALUES ('$projectID', '".$_POST['materialName'][$k]."', '".$_POST['materialAmount'][$k]."', '".$_POST['materialCost'][$k]."');";
            mysqli_query($conn, $sql3);
        }

    
    }    
    
?>

<!-- This is going to be Employee Profile -->
<main>
    <div class="topnav" id="myTopnav">
        <?php 
            if (isset($_SESSION["useruid"])){
                echo '
                <a href="index.php" class="active">Home</a>
                <a href="newProject.php">New Projects</a>
                <a style="float: right;" href="includes/logout.inc.php">Logout</a>
                ';
            }
            else {
                echo '<a href="login.php" class="active">login</a>';
            }
        ?>
        
  </div>
    <!-- <section class="profile"> -->

    <div class="container center">

    <div style="text-align: center;">
        <h3>Create a New Project</h3>
        <!-- <form action="includes/newProject.inc.php" method="post"> -->
        <form action="newProject.php" method="post">
            <input type="text" name="pName" placeholder="project name..." required> <br /><br />
            <input type="text" name="pType" placeholder="project type..." required> <br /><br />
            <input type="text" name="pQuote" placeholder="project quote..." required> <br /><br />
            <input type="text" name="pAddress" placeholder="project address..." required> <br /><br />
            <input type="text" name="pCity" placeholder="project city..." required> <br /><br />
            <input type="text" name="pZip" placeholder="project zip code..." required> <br /><br />
            <h3 style="text-align: center;">Workers</h3>
            <table style="margin: auto;">
                <thead>
                    <tr>
                        <th>Worker Name</th>
                        <th>Worker Wage</th>
                        <th>Worker Expected Hours</th>
                    </tr>
                </thead>
                <tbody id="tWorker"></tbody>
            </table>
            <button type="button" onclick="addWorker();">Add Worker</button><br /><br />
            <h3>Materials</h3>
            <table style="margin: auto;">
                <thead>
                    <tr>
                        <th>Material Name</th>
                        <th>Material Amount</th>
                        <th>Material Cost</th>
                    </tr>
                </thead>
                <tbody id="tMaterial"></tbody>
            </table> 
            <button type="button" onclick="addMaterial();">Add Material</button><br /><br />
            <button type="submit" name="submit">Create Project</button><br/><br/>
        </form>
    </div>
    </div>
            
    
    <!-- </section> -->

</main>
</body>
</html>
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
