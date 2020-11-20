<?php //Do not close this php tag off - this is ok - becuase this will only be php and thats ok

//This is for the live server
// $servername = "127.0.0.1";
// $dBName = "SoftwareDB02";
// $dDUsername = "readtest";
// $dBPassword = "password";

//This is for local testing on phpMyAdmin 
$servername = "127.0.0.1";
$dBName = "softwaredb02";
$dDUsername = "root";
$dBPassword = "";


$conn = mysqli_connect($servername, $dDUsername, $dBPassword, $dBName);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

if(!$conn){
    die("connection failed: " . mysqli_connect_error());
}
