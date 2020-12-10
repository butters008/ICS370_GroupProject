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


    function createProject($conn, $pName, $pType, $pQuote, $pAddress, $pCity, $pZip){
        $sql = "INSERT INTO project (project_name, project_type, project_quote, project_address, project_City, project_Zip) VALUES (?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../project.php?error=stmtFailed");
            exit();
        }
    
        mysqli_stmt_bind_param($stmt, 'ssssss', $pName, $pType, $pQuote, $pAddress, $pCity, $pZip);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../index.php?error=none");
    }


}else{
    header("location: ../newProject.php?=notLoggedIn");
    exit();
}