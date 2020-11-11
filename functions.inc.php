<?php
echo "INSIDE include functions.inc.php <br>";
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result;
    if (empty($name) ||  empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }else{
        $result =  false
    }
    return $result;
}

function invalidUID($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }else{
        $result =  false
    }
    return $result;
}

function invalidID($id) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $id)){
        $result = true;
    }else{
        $result =  false
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result =  false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdrepeat) {
    $result;
    if ($pwd !== $pwdrepeat)){
        $result = true;
    }else{
        $result =  false;
    }
    return $result;
}

// function uidExits($conn, $username, $email) {
//     $sql = "SELECT * FROM users WHERE userName = ? OR userEmail = ?;";
//     $stmt = mysqli_stmt_init($conn);
    
//     if (!mysqli_stmt_prepare($stmt, $sql)){
//         header("location: ../signup.php?error=stmtFailed");
//         exit();
//     }

//     mysqli_stmt_bind_param($stmt, "ss", $username, $email;
//     mysqli_stmt_execute($stmt);

//     $resultData = mysqli_stmt_get_result($stmt);

//     if($row = mysqli_fetch_assoc($resultData)){
//         return $row;
//     }else{
//         $result = false;
//         return $result;
//     }
//     mysqli_stmt_close($stmt);
// }

function uidExits($conn, $username) {
    $sql = "SELECT * FROM users WHERE userName = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}



