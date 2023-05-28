<?php
    $_SESSION['login'] = false;
    $_SESSION['user'] = "";
    $_SESSION['pass'] = "";
    $_SESSION['error_login'] = "you've just log out!";
    header("Location:login/index.php");
?>