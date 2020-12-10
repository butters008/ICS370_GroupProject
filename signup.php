<?php 
include "header.php";
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
            <br><br>
            <h4>Already have an account?  <a href="login.php">Log in</a></h4>
        </div>
    </div>

</body>
</html>