<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Management System</title>
    <!-- <link rel="stylesheet" href="./styles.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="./bootstrap.css">

<style>
    <?php
    include "styles.css"
    ?>
</style>

</head>

<!-- 


<body>
    <div class="container">
        <div class="wapper">

        
<h1>
        Login
    </h1>
<form method="post">

<label for="txtAccount">Account</label>
<input class="text" type="text" name="txtAccount" /> 
<label for="txtPassword">Password</label>
<input class="text" type="password" name="txtPassword">
<input id="submit" type="submit" value="Login">


</form>
</div>

</div> -->


<?php
// $sql = "SELECT *
//         FROM testName";
// $result = sqlsrv_query($connn, $sql);

// if ($result === false) {
//     
// }

// if ($findSQL === false) {
//     echo "Error" . "<br>";
// } else {

?>
<?php

#starts a new session
// session_start();

// #includes a database connection
// include 'connection.php';

// #catches user/password submitted by html form
// if($_SERVER['REQUEST_METHOD'] == 'POST')
// {
//  		$userName = $_POST['txtAccount'];
//          $password = $_POST['txtPassword'];

// #checks if the html form is filled
// if(empty($_POST['txtAccount']) || empty($_POST['txtPassword'])){
//     echo "Fill all the fields!";
// }else{

// #searches for user and password in the database
// $query = "SELECT * FROM Account WHERE userName='{$userName}' AND password='{$password}'";
//          echo $query;
// $result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'

// echo $userName. " ".  $password;
// #checks if the search was made
// if($result === false){
//      die( print_r( sqlsrv_errors(), true));
// }
// $_SESSION["login"]=true;
// #checks if the search brought some row and if it is one only row
// // if(sqlsrv_has_rows($result) != 1){
// //        echo "User/password not found";
// // }else{

// // #creates sessions
// //     while($row = sqlsrv_fetch_array($result)){
// //        $_SESSION['txtAccount'] = $row['userName'];
// //        $_SESSION['txtPassword'] = $row['password'];
// //     }
// #redirects user
// if ($_SESSION["login"]){
//     header("Location: index.php");
// }
// // }
// }
// }

?>
<?php


// session_start();

//     include_once('connection.php'); 
// 	include("functions.php");


// 	if($_SERVER['REQUEST_METHOD'] == 'POST')
// 	{
// 		//something was posted
//         // if(isset($_POST[]))
// 		$userName = $_POST['txtAccount'];
//         $password = $_POST['txtPassword'];

// 		if(!empty($userName) || !empty($password))
// 		{

// 			//read from database
// 			$query = "select * from Account where userName = '$userName'";
// 			$result = sqlsrv_query($conn, $query);

// 			if($result)
// 			{
// 			    $user_data = SQLSRV_FETCH_ASSOC($result);
// 					if($user_data['password'] === $password)
// 					{
// 						$_SESSION['identityCard'] = $user_data['identityCard'];
// 						header("Location: index.php");
// 						die;
// 					}
// 				echo "123". $user_data;                  
// 			}
//             die(print_r(sqlsrv_errors(), true));
			
// 		}else
// 		{
// 			echo "Bạn chưa nhập thông tin đăng nhập!";
// 		}
// 	}
?>








    <!-- <h1>
        Fetch Data From Database in PHP

        <h2>Test Record</h2>
    </h1>
    <main>
        <form class="container">
            <button class=" chkButton">Check All</button>
            <button class=" chkButton">Clear All</button>
            <table class="table table-hover text-center">
                <tr>

                    <th> ID </th>
                    <th> Name </th>
                </tr>

                <?php
                // while ($findSQL = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                //     ?>
                //     <tr>
                //         <td>
                //             <?php 
                // echo $findSQL['ID']; ?>
                //         </td>
                //         <td>
                //             <?php 
                // echo $findSQL['tName']; ?>
                //         </td>
                //     </tr>
                //     <?php
                // }

                ?>
            </table>
        </form>
    </main> -->
    <footer>

    </footer>
</body>

</html>