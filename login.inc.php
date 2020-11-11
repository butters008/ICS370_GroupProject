<?php
echo "WTF <br><br>";
if(isset($_POST["submit"])){
    // echo " AFTER IF FOR SUBMIT <br>";
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // echo " BEFORE require_once dbh.inc.php <br>";
    require_once "dbh.inc.php";
    // require_once "signup.inc.php";

    // include "functions.inc.php";


    /*Functions-----------------------------------------------------
    ---------------------------------------------------------------*/
    // function emptyInputLogin($username, $pwd) {
    //     $result;
    //     if (empty($username) || empty($pwd)){
    //         $result = true;
    //     }else{
    //         $result =  false
    //     }
    //     return $result;
    // }

    echo " BEFORE function uidExits(conn, username) <br>";
    function uidExits($conn, $username) {
        $sql = "SELECT * FROM users WHERE userName = ?;";
        $stmt = mysqli_stmt_init($conn);
        
        echo "uidExists BEFORE IF <br>";
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../index.php?error=stmtFailed");
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);
        
        echo "uidExists BEFORE IF <br>";
        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }else{
            $result = false;
            return $result;
        }
        
        mysqli_stmt_close($stmt);
        echo "uidExists END <br><br><br>";
    }

    echo " BEFORE function loginUser(conn, usernmae, pwd) <br>";
    function loginUser($conn, $username, $pwd){
        echo "CALLING uidExists <br>";
        $uidExist = uidExits($conn, $username);
        
        if ($uidExist === false){
            header("location: ../index.php?error=wrong_login");
        }

        $pwdHashed = $uidExist["userPwd"];
        $checkPwd = password_verify($pwd, $pwdHashed);

        echo "checkPwd";
        echo $checkPwd;
        if ($checkPwd === false){
            header("location: ../index.php?error=wrong_Password");
            exit();
        }
        else if($checkPwd === true){
            session_start();
            $_SESSION["userID"] = $uidExist["uid"];
            header("location: ../employee.php");
            exit();
        }

    }

    /*CALLING Functions---------------------------------------------
    ---------------------------------------------------------------*/ 
    // if (emptyInputLogin($uid, $pwd) !== false) {
    //     header("location: ../index.php?error=emptyinput");
    //     exit();
    // }
    // if (emptyInputLogin($uid, $pwd) !== false) {
    //     header("location: ../index.php?error=emptyinput");
    //     exit();
    // }

    loginUser($conn, $username, $pwd);

}else{
    header("location: ../index.php");
    exit();
} 


?>