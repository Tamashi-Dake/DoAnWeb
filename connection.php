<?php
$serverName = "ADMIN"; //serverName\instanceName
$connectionInfo = array("Database" => "BaiGiuXe", "UID" => "sa", "PWD" => "123456789");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn === false) {
    echo "Connection could not be established.<br />";
    die(print_r(sqlsrv_errors(), true));
}


// Test DB

// $sql = " INSERT INTO testName (ID, tName)
// VALUES (2, 'Lucas');";
// $result = sqlsrv_query($conn, $sql);
// if ($result) {
//     echo "New records created successfully";
// } else {
//     echo "Error: ";
// }

?>