<!-- We are going to have the index page be the login, and from the login,
The website will redirect them to the approiate site, employee, HR, and Manager -->
<?php 
include"header.php";

?>    
    <!-- Will redo the login system at a later date and will use this tutorial for login system, 
    I used this once before and it seemed to work just fine - https://www.youtube.com/watch?v=LC9GaXkdxF8  -->
    <!-- This is just placeholder for right now....-->
    <div class="login">
        <h2>Welcome To The Employee Managment System</h2>
        <div id="loginText">
            Username: <input type="text" name="username" placeholder="Username" required> <br /><br />
            Password: <input type="password" name="password" placeholder="Password" required> <br /><br />
            <input type="submit" value="Login">
        </div>
    </div>

    <!-- Get rid o""f - only for dev build -->
<?php include"footer.php"; ?>