<?php include "../../../connection.php"; ?>
<?php
    $error = "";
    if (isset($_GET['cardID']) && isset($_GET['type'])) {
        $cardID = $_GET['cardID'];
        $type = isset($_GET['type']);

        if ($type == "Tháng") {
            try {
                $sqlQuery = "UPDATE monthcard SET display = 0 WHERE monthCardID = ". $cardID .";";
                mysqli_query($conn, $sqlQuery);
            }
            catch (Exception $ex) {
                $error .= "<br><br>Lỗi hệ thống Database.<br>- Mã lỗi: ". $ex->getCode() ."<br>- Chi tiết: ". $ex->getMessage() ."<br>- Tại dòng code: ". $ex->getLine();
            }
        }

        try {
            $sqlQuery = "UPDATE card SET display = 0 WHERE cardID = ". $cardID .";";
            mysqli_query($conn, $sqlQuery);
        }
        catch (Exception $ex) {
            $error .= "<br><br>Lỗi hệ thống Database.<br>- Mã lỗi: ". $ex->getCode() ."<br>- Chi tiết: ". $ex->getMessage() ."<br>- Tại dòng code: ". $ex->getLine();
        }
    }
    echo($error);
    mysqli_close($conn);
    header("Location: Card.php");
?>