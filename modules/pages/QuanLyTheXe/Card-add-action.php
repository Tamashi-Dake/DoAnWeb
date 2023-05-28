<?php
    date_default_timezone_set("Asia/Bangkok");

    $cardID = "";
    $status = 1;
    $vehicleType = "";
    $type = "";
    $date = date("Y/m/d");
    $customerName = "";
    $customerIdentityCard = "";
    $phoneNumber = "";
    $licensePlate = "";
    $display = 1;

    if (empty($_POST['txtCardID_Add']) == false) {
        $cardID = $_POST['txtCardID_Add'];
        $vehicleType = $_POST['selectVehicleType_Add'];
        $type = $_POST['selectType_Add'];
        $customerName = $_POST['txtCustomerName_Add'];
        $customerIdentityCard = $_POST['txtCustomerIdentityCard_Add'];
        $phoneNumber = $_POST['txtPhoneNumber_Add'];
        $licensePlate = $_POST['txtLicensePlate_Add'];
        
        $sqlQuery = "INSERT INTO card VALUES (". $cardID .",  ". $status .", '". $vehicleType ."', '". $type ."', ". $display .");";
        echo($sqlQuery);
        // mysqli_query($conn, $sqlQuery);
    }

?>