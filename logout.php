<?php

session_start();

if(isset($_SESSION['identityCard']))
{
	unset($_SESSION['identityCard']);

}

header("Location: login.php");
die;