<?php //Do not close this php tag off - this is ok - becuase this will only be php and thats ok

if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $status = $_POST["status"];//added this one in last minute - need to create error checking for this!

    echo " BEFORE require_once dbh.inc.php <br>";
    require_once "dbh.inc.php";
    echo "BEFORE include functions.inc.php <br>";
    // include "functions.inc.php";

    // echo "BEFORE signup.inc.php error checking <br>";
    // if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    //     header("location: ../signup.php?error=emptyinput");
    //     exit();
    // }

    // if (invalidID($id) !== false) {
    //     header("location: ../signup.php?error=invalid_ID");
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

    // if (pwdMatch($pwd, $pwdrepeat) !== false) {
    //     header("location: ../signup.php?error=invalid_Password");
    //     exit();
    // }
    
    // if (uidExists($conn, $username, $email) !== false) {
    //     header("location: ../signup.php?error=Username_Taken");
    //     exit();
    // }

    
    echo "BEFORE createUser <br>";
    function createUser($conn, $id, $name, $email, $username, $pwd, $status) {
        $sql = "INSERT INTO users (userID, userName, userEmail, userUID, userPwd, userStatus) VALUES (?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../signup.php?error=stmtFailed");
            exit();
        }
    
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
        mysqli_stmt_bind_param($stmt, "ssssss", $id, $name, $email, $username, $hashedPwd, $status);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../signup.php?error=none");
    }

    createUser($conn, $id, $name, $email, $username, $pwd, $status);

}else{
    header("location: ../signup.php");
    exit();
}