<!-- We are going to have the index page be the login, and from the login,
The website will redirect them to the approiate site, employee, HR, and Manager -->
<?php 
include "header.php";

?>    
    <!-- Will redo the login system at a later date and will use this tutorial for login system, 
    I used this once before and it seemed to work just fine - https://www.youtube.com/watch?v=LC9GaXkdxF8  -->
    <!-- This is just placeholder for right now....-->
    <br /><br />
    <div class="login">
        <h2>Log In</h2>
        <div id="loginText">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="email/username..." required> <br /><br />
                <input type="password" name="pwd" placeholder="password..." required> <br /><br />
                <button type="submit" name="submit">Log in</button>
            </form>
            <br><br>
            <h4>Don't have an account?  <a href="signup.php">Sign up</a></h4>

        </div>
    </div>

</body>
</html>