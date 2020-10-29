<?php 
    // This was taken from my ICS311 class
session_start();
 
//  require_once('functions.php');
//  require_once('database.php');
//  require_once('query_functions.php');
//  require_once('validation_functions.php');


//localhost
// DEFINE('DB_SERVER', 'localhost');
// DEFINE('DB_NAME', 'ics370');
// DEFINE('DB_USER', 'root');
// DEFINE('DB_PASS', '');

DEFINE('DB_SERVER', '127.0.0.1'); //changes everytime server is on
DEFINE('DB_NAME', 'SoftwareDB02');
DEFINE('DB_USER', 'dbadmin');
DEFINE('DB_PASS', 'P@$$word123!@#');

function db_connect() {
    // $connection = mysqli_connect('localhost', 'ics325fa2005', '2944', 'ics325fa2005');
    // $connection = mysqli_connect('localhost', 'ics325fa2005', '','root');
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    confirm_db_connect();
    return $connection;
}

function db_disconnect($connection) {
    if(isset($connection)) {
    mysqli_close($connection);
    }
}

function confirm_db_connect() {
    if(mysqli_connect_errno()) {
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }
}

function confirm_result_set($result_set) {
    global $db;

    if (!$result_set) {
        echo mysqli_error($db);
        exit("The Database query failed.");
    }
}

$db = db_connect();
?>