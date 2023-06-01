<?php include "../../../connection.php"; ?>

<?php
    date_default_timezone_set("Asia/Bangkok");

    $status = 1;
    $date = date("Y/m/d");
    $customerName = "";
    $display = 1;
    $error = "";

    try {
        $isValid = true;
        if (empty($_POST['txtCardID_Add']) == false) {
            $cardID = $_POST['txtCardID_Add'];

// Check unique
            $result = mysqli_query($conn, "SELECT * FROM card WHERE cardID = $cardID;");
            if (mysqli_num_rows($result) > 0) {
                $error .= "<br><br>ID thẻ đã tồn tại. ";
                $isValid = false;
            }
            else {
                $vehicleType = $_POST['selectVehicleType_Add'];
                $type = $_POST['selectType_Add'];
        
                if ($type == "Tháng") {
                    $customerName = $_POST['txtCustomerName_Add'];
                    $customerIdentityCard = $_POST['txtCustomerIdentityCard_Add'];
                    $phoneNumber = $_POST['txtPhoneNumber_Add'];
                    $licensePlate = $_POST['txtLicensePlate_Add'];
// isValidCustomerName
                    if (preg_match("/^[ A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚÝàáâãèéêìíòóôõùúýĂăĐđĨĩŨũƠơƯưẠ-ỹ]{1,30}$/", $customerName) != 1) {
                        $error .= "<br><br>Tên chỉ được phép tối đa 30 ký tự.<br>Không được sử dụng ký tự đặc biệt";
                        $isValid = false;
                    }
// isValidCustomerIdentityCard
                    if (preg_match("/^\\d{12}$/", $customerIdentityCard) != 1) {
                        $error .= "<br><br>CCCD chỉ bao gồm các chữ số.<br>Bao gồm 12 ký tự";
                        $isValid = false;
                    }
// isValidPhoneNumber
                    if (preg_match("/^0\\d{9}$/", $phoneNumber) != 1) {
                        $error .= "<br><br>Số điện thoại chỉ bao gồm các chữ số.<br>Bao gồm 10 ký tự";
                        $isValid = false;
                    }
// isValidLicensePlate
                    if (preg_match("/^[0-9A-Z ]+-?[0-9A-Z ]+$/", $licensePlate) != 1) {
                        $error .= "<br><br>Biển số xe không hợp lệ.";
                        $isValid = false;
                    }
                }

// INSERT
                if ($isValid == true) {
                    if ($type == "Thường") {
                        $sqlQuery = "INSERT INTO card VALUES (". $cardID .",  ". $status .", '". $vehicleType ."', '". $type ."', ". $display .");";
                        mysqli_query($conn, $sqlQuery);
                    }
                    if ($type == "Tháng") {
                        $sqlQuery = "INSERT INTO card VALUES (". $cardID .",  ". $status .", '". $vehicleType ."', '". $type ."', ". $display .");";
                        mysqli_query($conn, $sqlQuery);
                        $sqlQuery = "INSERT INTO monthcard VALUES (". $cardID .",  '". $date ."', '". $customerName ."', '". $customerIdentityCard ."', '". $phoneNumber ."', '". $licensePlate ."', ". $display .");";
                        mysqli_query($conn, $sqlQuery);
                    }
                }
            }
        }
    }
    catch (Exception $ex) {
        $error .= "<br><br>Lỗi hệ thống.<br>- Mã lỗi: ". $ex->getCode() ."<br>- Chi tiết: ". $ex->getMessage() ."<br>- Tại dòng code: ". $ex->getLine();
    }
    echo($error);   // ĐÃ XONG thông báo ngầm
    mysqli_close($conn);
    header("Location: Card.php");
?>
