<?php 
    // This was taken from my ICS311 class
    session_start();

    $servername = "127.0.0.1";
    $database = "SoftwareDB02";
    $username = "readtest";
    $password = 'password';

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    DEFINE('DB_SERVER', '127.0.0.1'); //changes everytime server is on
    DEFINE('DB_NAME', 'SoftwareDB02');
    DEFINE('DB_USER', 'dbadmin');
    DEFINE('DB_PASS', 'P@$$word123!@#');

    function db_connect() {
        // $connection = mysqli_connect('localhost', 'ics325fa2005', '2944', 'ics325fa2005');
        // $connection = mysqli_connect('localhost', 'ics325fa2005', '','root');
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

        confirm_db_connect();
        return $connection;
    }

    function db_disconnect($conn) {
        if(isset($conn)) {
        mysqli_close($conn);
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