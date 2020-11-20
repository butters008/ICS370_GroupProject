<?php 
include "header.php";

//Will do error checking on this page later
    // if(isset($_GET["error"])){
    //     if ($_GET["error"] == "emptyfield");
    //     echo "Fill in the fields";
    // }
    // else if(isset($_GET["error"])){
    //     if ($_GET["error"] == "invalidUID");
    //     echo "Choose Proper Username!";
    // }

?>    
    <!-- https://www.youtube.com/watch?v=gCo6JqGMi30 -->
    <br /><br />
    <div class="login">
        <h2>Add new Employee</h2>
        <div id="loginText">
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="name..." required> <br /><br />
                <input type="text" name="email" placeholder="email..." required> <br /><br />
                <input type="text" name="uid" placeholder="username..." required> <br /><br />
                <input type="password" name="pwd" placeholder="password..." required> <br /><br />
                <input type="password" name="pwdrepeat" placeholder="repeat password..." required> <br /><br />
                <button type="submit" name="submit">Create Account</button>
            </form>
        </div>
    </div>

<?php include "footer.php"; ?>