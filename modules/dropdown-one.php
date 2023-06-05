<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <style>
        <?php
    include "../../guessIndex.css";
    include "../../bootstrap.css";
    include "../../connection.php";
    ?>
        #dropdown-test {
            position: relative;
            display: block;
            padding: 0;
            margin: 0;
        }
        div#dropdown-test {
            padding-bottom: 40px;
        }
        
        .dropdown-list {
            position: relative;
            display: block;
            width: 800px;
            height: 400px;
            background-color: black;
            color: aliceblue;
            border: 3px solid rgb(226, 147, 0);
            border-radius: 5px;
            margin-left: 25%;
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
        }
        
        .dropdown-list-name {
            position: relative;
            text-align: center;
            font-size: 30px;
            background: linear-gradient(to top, #FFAE46, #FFF050);
            text-transform: uppercase;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .dropdown-time {
            padding-top: 5px;
            padding-bottom: 20px;
            font-size: 20px;
            text-align: center;
        }
        
        .dropdown-time-input {
            width: 130px;
            height: 25px;
            border: 2px solid rgb(226, 147, 0);
            border-radius: 2px;
            font-size: 16px;
        }
        .dropdown-select {
            width: 130px;
            height: 26px;
            border: 2px solid rgb(226, 147, 0);
            border-radius: 2px;
            font-size: 16px;
        }
        
        .dropdown-button {
            cursor: pointer;
            color: #fff;
            background-color: rgb(226, 147, 0);
            font-size: 20px;
            width: 100px;
            height: 35px;
            outline: none;
            border: 2px solid white;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
            position: relative;
            margin-bottom: 5px;
        }
        
        .dropdown-list-enter-out {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .dropdown-list-enter {
            width: 30%;
            height: 100%;
            background-color: #000;
            text-align: center;
            padding-bottom: 20px;
            border-radius: 5px;
            border: 2px solid rgb(226, 147, 0);
        }
        
        
        .dropdown-input {
            width: 100px;
            height: 25px;
            border: 2px solid rgb(226, 147, 0);
            border-radius: 2px;
            font-size: 18px;
        }
        
        .back-feedback {
            cursor: pointer;
            color: #fff;
            background-color: rgb(226, 147, 0);
            font-size: 20px;
            width: 100px;
            height: 40px;
            outline: none;
            border: 2px solid white;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
            position: relative;
        }
    </style>
    <?php
    include "../modules/header-navbar/header-admin.html";
    ?>
    <main style="margin-top: 10vh">
        <section>
        <div id="dropdown-test">
            <div class="dropdown-list">
                <div class="close-dropdown">
                    <i class="bi bi-x-lg"></i>
                </div>
                <h1 class="dropdown-list-name">Lượng xe vào ra</h1>
                <div class="dropdown-time">
                    Từ
                    <input type="date" class="dropdown-time-input"> Đến
                    <input type="date" class="dropdown-time-input"> Loại thẻ
                    <select class="selectType_dropdown dropdown-select" name="selectType_Add">
                        <option value="Thường">Thường</option>
                        <option value="Tháng">Tháng</option>
                      </select>
                    <button class="dropdown-button">Tìm</button>
                </div>
                <div class="dropdown-list-enter-out">
                    <div class="dropdown-list-enter">
                        <h2>Báo cáo doanh thu</h2>
                        <div>
                            <h3>Ô tô</h3>
                            <input type="number" value="0" class="dropdown-list-enter-car dropdown-input">
                        </div>
                        <div>
                            <h3>Xe máy</h3>
                            <input type="number" value="0" class="dropdown-list-enter-moto dropdown-input">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </main>
        <?php include "../modules/footer.html" ?>
</body>

</html>