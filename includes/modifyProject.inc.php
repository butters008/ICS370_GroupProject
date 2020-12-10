<?php

if(isset($_POST['submit'])){
    $pName = $_POST["pName"];
    $pType = $_POST["pType"];
    $pQuote = $_POST["pQuote"];
    $pAddress = $_POST["pAddress"];
    $pCity = $_POST["pCity"];
    $pZip = $_POST["pZip"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";
    // require_once "../modifyProject.php";

    $sql = "UPDATE project  SET project_name = '$pName', project_type = '$pType', project_quote = '$pQuote', project_address = '$pAddress', project_City = '$pCity', project_Zip = '$pZip';";
    mysqli_query($conn, $sql);
    $projectID = mysqli_insert_id($conn);

    // for ($i = 0; $i < count($_POST["workerName"]); $i++){
    //     $sql2 = "UPDATE project SET project_id = '$id', worker_name = '".$_POST['workerName'][$i]."', worker_wage = '".$_POST['workerWage'][$i]."', worker_hours = '".$_POST['workerHours'][$i]."');";
    //     mysqli_query($conn, $sql2);
    // }

    // for ($k = 0; $k < count($_POST["materialName"]); $k++){
    //     $sql3 = "UPDATE  material SET project_id = '$id', material_name = '".$_POST['materialName'][$k]."', material_amount = '".$_POST['materialAmount'][$k]."', material_cost = '".$_POST['materialCost'][$k]."';";
    //     mysqli_query($conn, $sql3);
    // }
    header("location: ../index.php?error=none");
}else{
    header("location: ../index.php?error=update_failed");
}

  