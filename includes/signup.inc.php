<?php //Do not close this php tag off - this is ok - becuase this will only be php and thats ok

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUID($username) !== false) {
        header("location: ../signup.php?error=invalid_Username");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalid_Email");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=invalid_Password");
        exit();
    }
    
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=Username_Taken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}else{
    header("location: ../signup.php");
    exit();
}