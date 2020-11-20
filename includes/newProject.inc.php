<?php

if(isset($_POST["submit"])){
    $pName = $_POST["pName"];
    $pType = $_POST["pType"];
    $pQuote = $_POST["pQuote"];
    $pAddress = $_POST["pAddress"];
    $pCity = $_POST["pCity"];
    $pZip = $_POST["pZip"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    // if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    //     header("location: ../signup.php?error=emptyinput");
    //     exit();
    // }

    // if (invalidUID($username) !== false) {
    //     header("location: ../signup.php?error=invalid_Username");
    //     exit();
    // }

    // if (invalidEmail($email) !== false) {
    //     header("location: ../signup.php?error=invalid_Email");
    //     exit();
    // }

    // if (pwdMatch($pwd, $pwdRepeat) !== false) {
    //     header("location: ../signup.php?error=invalid_Password");
    //     exit();
    // }
    
    // if (uidExists($conn, $username, $email) !== false) {
    //     header("location: ../signup.php?error=Username_Taken");
    //     exit();
    // }

    createProject($conn, $pName, $pType, $pQuote, $pAddress, $pCity, $pZip);


}else{
    header("location: ../newProject.php?=notLoggedIn");
    exit();
}