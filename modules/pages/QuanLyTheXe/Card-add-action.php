<?php include "../../../connection.php"; ?>

<?php
    date_default_timezone_set("Asia/Bangkok");

    $status = 1;
    $date = date("Y/m/d");
    $customerName = "";
    $display = 1;

    if (empty($_POST['txtCardID_Add']) == false) {
        $cardID = $_POST['txtCardID_Add'];
        $result = mysqli_query($conn, "SELECT * FROM card WHERE cardID = ". $cardID);
        if (mysqli_num_rows($result) > 0) {
// ERROR
            $error = "ID thẻ đã tồn tại";
        }
        else {
            $vehicleType = $_POST['selectVehicleType_Add'];
            $type = $_POST['selectType_Add'];
    
            $sqlQuery = "INSERT INTO card VALUES (". $cardID .",  ". $status .", '". $vehicleType ."', '". $type ."', ". $display .");";
            mysqli_query($conn, $sqlQuery);
    
            if ($type == "Tháng") {
                $customerName = $_POST['txtCustomerName_Add'];
                $customerIdentityCard = $_POST['txtCustomerIdentityCard_Add'];
                $phoneNumber = $_POST['txtPhoneNumber_Add'];
                $licensePlate = $_POST['txtLicensePlate_Add'];
    
                $sqlQuery = "INSERT INTO monthcard VALUES (". $cardID .",  '". $date ."', '". $customerName ."', '". $customerIdentityCard ."', '". $phoneNumber ."', '". $licensePlate ."', ". $display .");";
                mysqli_query($conn, $sqlQuery);
            }
        }
        
    }
    mysqli_close($conn);
    header("Location: Card.php");
?>