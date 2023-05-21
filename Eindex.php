<?php 
// session_start();

	// include("connection.php");
	// include("functions.php");

	// $user_data = check_login($conn);

?>
<?php
// We need to use sessions, so you should always start sessions using the below code.
// session_start();
// // If the user is not logged in redirect to the login page...
// if (!isset($_SESSION['loggedin'])) {
// 	header('Location: index.html');
// 	exit;
// }
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    />
    <title>ADEPRO</title>
	 
</head>
<body>
<style>
  * {
        box-sizing: border-box;
      }
      html,body {
  margin:0;
  /* overflow-y:hidden; */
}
    <?php
    include "guessIndex.css";
    include "bootstrap.css"
    ?>
    
</style>
<?php include "./modules/Eheader.html" ?>
<!-- 
	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php 
	// echo $user_data['user_name']; ?> -->

	<main>

      <div class="search-bar-wapper">
        <form class="search-bar" action="">
          <input
            type="text"
            placeholder="Nhập vào biển số hoặc ID thẻ"
            name="search"
          />
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <!-- <section>
        <h3>chọn khu quản lý</h3>
        <div class="Areas">
        <h5>Khu cho xe may</h5>
        <div class="Area-list">
          <a class="area-link" href="">
            <div class="Area">
              <i class="fa area-icon fa-motorcycle"></i>
              <div class="Area-details">
                <h6>area name</h6>
                <p>Số xe đã nhận: 9/10</p>
              </div>
            </div>
          </a>
          <a class="area-link" href="">
            <div class="Area">
              <i class="fa area-icon fa-motorcycle"></i>
              <div class="Area-details">
                <h6>area name</h6>
                <p>Số xe đã nhận: 9/10</p>
              </div>
            </div>
          </a>
        </div>
        </div>
        <div class="Areas">
        <h5>khu cho o to</h5>
        <div class="Area-list">
          <a class="area-link" href="">
            <div class="Area">
              <i class="fa area-icon fa-car"></i>
              <div class="Area-details">
                <h6>area name</h6>
                <p>Số xe đã nhận: 9/10</p>
              </div>
            </div>
          </a>
        </div>
        </div>
      </section> -->
      
    </main>
    
    <?php include "./modules/footer.html" ?>
</body>
</html>