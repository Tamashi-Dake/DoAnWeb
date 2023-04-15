<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Management System</title>
    <!-- <link rel="stylesheet" href="./styles.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
    <?php
    include "styles.css"
    ?>
</style>

</head>

<?php
include_once('connection.php');
?>
<?php
$sql = "SELECT *
        FROM Account";
$result = sqlsrv_query($conn, $sql);

if ($result === false) {
    die(print_r(sqlsrv_errors(), true));
}

if ($findSQL === false) {
    echo "Error" . "<br>";
} else {

?>

<body>
    <!-- <div class="container">
        <div class="wapper">

        
<h1>
        Login
    </h1>
<form action="post">

<label for="txtAccount">Account</label>
<input class="text" type="text" name="txtAccount" /> 
<label for="txtPassword">Password</label>
<input class="text" type="password" name="txtPassword">
<input id="submit" type="submit" value="Login">

</form>
</div>
</div> -->








     <h1>
        Fetch Data From Database in PHP

        <h2>Test Record</h2>
    </h1>
    <main>
        <form class="container">
            <button class=" chkButton">Check All</button>
            <button class=" chkButton">Clear All</button>
            <table class="table table-hover text-center">
                <tr>
                <th> UserName </th>
                    <th> password </th>



                </tr>

                <?php
                while ($findSQL = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                    ?>
                    <tr>
                        <td>
                            <?php 
                echo $findSQL['userName']; ?>
                        </td>
                        <td>
                            <?php 
                echo $findSQL['password']; ?>
                        </td>
                    </tr>
                    <?php
                }
            }
                ?>
            </table>
        </form>
    </main>
    <footer>

    </footer>
</body>

</html>