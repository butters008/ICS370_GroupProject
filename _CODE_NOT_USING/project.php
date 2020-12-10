<?php 
    include "header.php";
    // include "includes/dbh.inc.php";
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

    <section class="container center">
        <ul style="float: right;">
            <li><a href='newProject.php'>New Project</a></li>
        </ul>


        <table id="info" cellpadding="0" cellspacing="0" width="100%" style="width: 100px;">
            <thead>
                <tr>
                      <th>Project Name</th>
                      <th>Project Type</th>
                      <th>Project Quote</th>
                      <th>Project Address</th>
                      <th>Project City</th>
                      <th>Project State</th>
                      <th>Project Zip</th>
                      <th>Delete</th>
                </tr>
            </thead>


        <tbody>
<?php
// $sql = "SELECT * FROM project;";
// $result = mysqli_query($sql);

while($row = mysql_fetch_array($conn, $result)){   //Creates a loop to loop through results
    echo "<tr>";
    echo "<td>" . $row['project_name'] . "</td>";    
    echo "<td>" . $row['project_type'] . "</td>";
    echo "<td>" . $row['project_quote'] . "</td>";        
    echo "<td>" . $row['project_address'] . "</td>";
    echo "<td>" . $row['project_city'] . "</td>";
    echo "<td>" . $row['project_zip'] . "</td>";
    echo "<tr>";
}

mysqli_close();

?>

            </tbody>

            <tfoot>
                <tr>
                    <th>Project Name</th>
                    <th>Project Type</th>
                    <th>Project Quote</th>
                    <th>Project Address</th>
                    <th>Project City</th>
                    <th>Project State</th>
                    <th>Project Zip</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
      </table>

    </section>

</main>

<?php include "footer.php"; ?>

<!-- Only for Dev -->
<ul class='onlyForDev'>
    <li><a href='project.php'>project (seeded)</a></li>
    <li><a href='#empty.php'>project (no info)</a></li>
</ul>