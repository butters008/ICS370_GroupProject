<?php 
    include "header.php";
    // include "includes/dbh.inc.php";
    // include "includes/functions.inc.php";

    session_start();
?>

<!-- This is going to be Employee Profile -->
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
    <!-- <section class="profile"> -->

    <div class="container center">

    <div style="text-align: center;">
        <h3>Create a New Project</h3>
        <form action="includes/newProject.inc.php" method="post">
            <input type="text" name="pName" placeholder="project name..." required> <br /><br />
            <input type="text" name="pType" placeholder="project type..." required> <br /><br />
            <input type="text" name="pQuote" placeholder="project quote..." required> <br /><br />
            <input type="text" name="pAddress" placeholder="project address..." required> <br /><br />
            <input type="text" name="pCity" placeholder="project city..." required> <br /><br />
            <input type="text" name="pZip" placeholder="project zip code..." required> <br /><br />
            <!-- <p style="text-align: center;">Workers</p>
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
            <p >Materials</p>
            <table style="margin: auto;">
                <thead>
                    <tr>
                        <th>Material Name</th>
                        <th>Material Amount</th>
                    </tr>
                </thead>
                <tbody id="tMaterial"></tbody>
            </table> 
            <button type="button" onclick="addMaterial();">Add Material</button><br /><br /> -->
            <button type="submit" name="submit">Create Project</button><br/><br/>
        </form>
    </div>
    </div>
            
    
    <!-- </section> -->

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
    }
    function addMaterial(){
        var html = "<tr>";
            html += "<td><input type='text' name='materialName[]'></td>";
            html += "<td><input type='text' name='materialAmount[]'></td>";
            html += "</tr>";
            document.getElementById("tMaterial").insertRow().innerHTML = html;
    }
</script>

<?php include "footer.php"; ?>