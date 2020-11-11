<?php //Do not close this php tag off - this is ok - becuase this will only be php and thats ok

$servername = "127.0.0.1";
$dBName = "SoftwareDB02";
$dDUsername = "readtest";
$dBPassword = "password";


$conn = mysqli_connect($servername, $dDUsername, $dBPassword, $dBName);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

if(!$conn){
    die("connection failed: " . mysqli_connect_error());
}

// function mysqli_connect_error(){

// }