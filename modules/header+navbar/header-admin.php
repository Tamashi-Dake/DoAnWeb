<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/DoAnWeb/bootstrap.css" />

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
    <a href="/DoAnWeb/modules/pages/QuanLyTaiKhoan/Account.php">
      <i class="fas fa-users"></i>Quản lý tài khoản</a>
  </div>
  <div>
    <a href="/DoAnWeb/modules/pages/QuanLyTaiKhoan/">
    <i class="nav-icon fas fa-table"></i>
                <p>Quản lý ô đỗ</p>
    </a>
  </div>



  <!-- <div>
    <a href="guiXe.php"
      ><i class="fas fa-solid fa-car-side"></i>Quản lý phương tiện</a
    >
  </div>
  <div>
    <a href="/DoAnWeb/modules/pages/QuanLyTheXe/Card.php"
      ><i class="fas fa-address-card"></i>Quản lý thẻ xe</a
    >
  </div> -->

 <!-- Thống kê -->
 <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown link
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
  <!-- <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Thống kê
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">
        <i class="fas fa-car nav-icon"></i>
                      <p>Lượng xe vào ra</p>
                    </a>
      <a class="dropdown-item" href="#"><i class="fas fa-money-bill nav-icon"></i>
                      <p>Báo cáo doanh thu</p></a>
  </div>
</div> -->
  <!-- feedback -->
  <div>
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>Feedback</p>
              </a>
  </div>
  <!-- Setting -->
  <div>
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Setting
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="padding-left: 25px">
                <div>
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Điều chỉnh phí gửi xe</p>
                  </a>
                </div>
              </ul>
  </div>
</nav>
  </body>
</html>
