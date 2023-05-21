<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <meta http-equiv="refresh" content="10" /> -->
    <!-- <link rel="stylesheet" href="./bootstrap.css" /> -->
    <!-- <link rel="stylesheet" href="header.css" /> -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    />
  </head>
  <body>
    <style>
      :root {
        --header-text-color: #efd841;
        --border-color: rgb(26, 27, 27);
        --header-color: #353030;
        --link-color: rgb(232, 228, 186);
        --search-bar-color: #c5c48d;
        --toolbar-color: #535141;
      }
      /* html {
        height: 101%;
      } */

      header {
        display: flex;
        width: 100%;
        z-index: 1;
        /* background-color: rgb(57, 60, 60); */
        padding: 10px 20px 0 20px;
        background: var(--header-color);
      }

      /* header left nav bar */
      .left {
        max-width: 30%;
        height: 90%;
      }
      .left a {
        display: flex;
        flex-flow: row wrap;
        text-decoration: none;
      }
      .Logo {
        width: 25%;
        height: 40%;
        border-radius: 5px;
        margin: auto;
        margin-right: 5%;
        opacity: 70%;
      }
      .logo-name-wapper {
        color: white;
        padding: 5% 5% 5% 0;
      }
      /* .header-text {
        color: var(--header-text);
      } */
      #pageName {
        font-size: 50px;
        font-family: "Playfair Display", serif;
        /* background-clip: text; */
        background: linear-gradient(
          rgb(242, 236, 236),
          rgb(246, 255, 122),
          rgb(236, 193, 1)
        );
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }
      h6 {
        font-size: 16px;
        color: var(--link-color);
      }

      /* header right nav bar */
      .right {
        height: 100%;
        padding: 20px;
        margin-left: auto;
        display: flex;
        flex-flow: column nowrap;
        gap: 35px;
      }
      .right-navBar {
        width: 100%;
        height: 50%;
        display: flex;
        justify-content: end;
        align-items: start;
      }
      .border {
        width: 1px;
        height: 1.25em;
        margin: 2px 10px;
        border-color: var(--border-color) !important;
      }
      .right-navBar a,.toolbar a {
        text-decoration: none !important;
        color: var(--link-color);
      }
      .right-navBar a:hover {
        text-decoration: none !important;
      }
      #pageNameDes {
        color: var(--link-color);
      }
      
  .toolbar {
    display: flex;
    align-items: center;
    /* gap: 10%; */
    position: sticky;
    top: 0;
    width: 100%;
    height: 8vh;
    border-top: 1px solid var(--header-text-color);
    background-color: var(--toolbar-color);
    color: var(--search-bar-color);
    z-index: 2;
    justify-content: space-around;
  }
  .toolbar div {
    margin-left: 5%;
  }
  .toolbar .fas {
    margin-right: 10px;
  }
    </style>
    <header style="display: flex">
      <div class="left">
        <a href="About-us.php">
          <img
            class="Logo"
            src="https://raw.githubusercontent.com/Tamashi-Dake/DoAnWeb/main/img/smol%20logo.png"
            alt="Logo"
          />
          <div class="logo-name-wapper">
            <h1 id="pageName">ADEPRO</h1>
            <h6>Parking Management System</h6>
          </div>
        </a>
      </div>

      <div class="right">
        <div class="right-navBar">
          <a href="Log-out.php">Đăng xuất</a>
        </div>
        <div id="pageNameDes">Hệ thống quản lý phương tiện tích hợp</div>
      </div>
    </header>
    <nav class="toolbar">
  <div>
    <a href="/DoAnWeb/Eindex.php"><i class="fas fa-info"></i> Trang chủ</a>
  </div>
  <div>
    <a href="guiXe.php"
      ><i class="fas fa-solid fa-car-side"></i>Quản lý phương tiện</a
    >
  </div>
  <div>
    <a href="/DoAnWeb/modules/pages/QuanLyTheXe/Card.php"
      ><i class="fas fa-address-card"></i>Quản lý thẻ xe</a
    >
  </div>
  <div>
    <a href="/DoAnWeb/modules/feedback/feedback.html"
      ><i class="fas fa-solid fa-light fa-comment-dots"></i>Báo lỗi</a
    >
  </div>
</nav>
  </body>
</html>
