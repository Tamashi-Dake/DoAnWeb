<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="/DoAnWeb/login/assets/main.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<!-- test -->

<body>
    <style>
        <?php
    include "../../guessIndex.css";
    include "../../bootstrap.css";
    include "../../connection.php";
    ?>
        body {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            background: #000;
            color: #fff;
        }
        
        #login {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 800px;
            height: 330 px;
            background-color: #333333;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
            border: 3px solid rgb(226, 147, 0);
            color: #fff;
            margin-bottom: 10vh;
            left: 50%;
            transform: translateX(-50%);
        }
    
        .login-name {
            position: relative;
        }
        
        .img-login {
            float: left;
            width: calc(100%/2);
            height: 100%;
            display: flex;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
        }
        
        .name-login {
            display: flex;
            justify-content: center;
            font-size: 30px;
            background: linear-gradient(to top, #FFAE46, #FFF050);
            text-transform: uppercase;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-top: 30px;
        }
        
        .input-login {
            height: 40px;
            outline: none;
            border: 2px solid rgb(226, 147, 0);
            padding: 5px 10px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
            font-size: 20px;
        }
        
        .text-login {
            margin-left: 465px;
            margin-bottom: 5px;
        }
        
        .text-pass-login {
            margin-left: 465px;
            margin-bottom: 5px;
        }
        
        .input-text {
            margin-left: 65px;
        }
        
        .input-pass {
            margin-left: 65px;
            margin-bottom: 20px;
        }
        
        .button {
            cursor: pointer;
            width: 100px;
            color: #fff;
            background-color: rgb(226, 147, 0);
            font-size: 20px;
            outline: none;
            border: 2px solid white;
            height: 40px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
            align-self: flex-end;
            margin-left: 65px;
        }
        
        .close-dropdown {
            position: absolute;
            right: 0;
            top: 0;
            color: #fff;
            padding: 12px;
            cursor: pointer;
            opacity: 0.9;
        }
        
        .close-dropdown:hover {
            opacity: 0.9;
            background-color: rgb(226, 147, 0);
            cursor: pointer;
            border-top-right-radius: 2px;
        }
    </style>
    <?php
    include "../modules/header-navbar/header.html";
  ?>
    <div style="margin-top: 10vh" id="login">
        <form action="login_be.php" class="login-name bor" method="post">
            <img src="/DoAnWeb/img/smol logo.png" alt="ADEPRO" class="img-login">
            <div class="close-dropdown">
                    <i class="bi bi-x-lg"></i>
                </div>
            <h1 class="name-login">ĐĂNG NHẬP</h1>
            <div class="user-login">
                <p class="text-login">Tên đăng nhập:</p>
                <input type="text" class="input-text input-login" name="txtuser" placeholder="Username">
            </div>
            <div class="pass-login">
                <p class="text-pass-login">Mật khẩu:</p>
                <input type="password" class="input-pass input-login" name="txtpass" placeholder="Password">
            </div>
                <button class="button">LOGIN</button>
                <div class="error_login" style="margin-top:20px;"><center><font color="red"><b><?php    if(!isset($_SESSION['error_login']))
                                                                    {
                                                                        unset($_SESSION['error_login']);
                                                                    }
                                                                    else
                                                                        echo $_SESSION['error_login'];
                                                                    ?>
                                    </b></font></center>
                </div>
        </form>
    </div>
    <?php
    include "../modules/footer.html";
  ?>    

</body>

</html>