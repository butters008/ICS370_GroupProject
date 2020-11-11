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
    <!-- Will redo the login system at a later date and will use this tutorial for login system, 
    I used this once before and it seemed to work just fine - https://www.youtube.com/watch?v=LC9GaXkdxF8  -->
    <!-- This is just placeholder for right now....-->
    <br /><br />
    <div class="login">
        <h2>Add new Employee</h2>
        <div id="loginText">
            <form action="signup.inc.php" method="post">
                <input type="text" name="id" placeholder="employee ID..." required> <br /><br />
                <input type="text" name="status" placeholder="status..." required><br /><br />
                <input type="text" name="name" placeholder="name..." required> <br /><br />
                <input type="text" name="email" placeholder="email..." required> <br /><br />
                <input type="text" name="uid" placeholder="username..." required> <br /><br />
                <input type="password" name="pwd" placeholder="password..." required> <br /><br />
                <input type="password" name="pwdrepeat" placeholder="repeat password..." required> <br /><br />
                <!-- <input type="text" name="email" placeholder="email..." required> <br /><br /> -->
                <!-- <input type="text" name="salary" placeholder="salary..." required> <br /><br />
                 <br /><br />
                <br>Additional Info<br><br>
                <input type="text" name="address" placeholder="Address..."> <br /><br />
                <input type="text" name="city" placeholder="City..."> <br /><br />
                <input type="text" name="zip code" placeholder="Zip Code..."> <br /><br />  -->
                <button type="submit" name="submit">Log in</button>
            </form>
        </div>
    </div>

    <!-- Get rid o""f - only for dev build -->
<?php include "footer.php"; ?>