<?php
  session_start(); 
  if (isset($_SESSION['login']) == false) {
    header("Location: /DoAnWeb/login/index.php");
  }
  else {
    if (($_SESSION['login']) == false) {
      header("Location: /DoAnWeb/login/index.php");
    }
    else {
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
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
    .searchResult{
      display:grid;
      grid-template-columns: repeat(2,1fr);
      background:var(--search-bar-color);
      position: absolute;
      top: 65%;
      left: 25%;
      min-width: 50%;
      border-radius: 10px;
    }
    .searchResult p{
      padding: 20px;
      margin-bottom:0;
    }
</style>
<?php   
 include "./modules/header-navbar/header-employee.html";
?>
	<main>

      <div class="search-bar-wapper">
        <form class="search-bar" action="index-employee.php" method="post">
          <input
            type="text"
            placeholder="Nhập vào biển số hoặc ID thẻ"
            name="search"
          />
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
<?php include "connection.php"; ?>
      <?php
    if(!isset($_POST['search'])){
      $_POST['search'] = "";
    }
    else{
      $search = $_POST['search']; 
      $sql_search = "select * from webbaiguixe.vehicleinout inner join  webbaiguixe.parkitem on vehicleinout.cardID=parkitem.cardID where vehicleinout.display=1 and ( vehicleinout.cardID='".$search."' or vehicleinout.licensePlate='".$search."') and type=1 order by vehicleinout.vehicleInOutID desc limit 1";
      $rs=$conn->query($sql_search);
    ?>
      <?php 
      if($rs->num_rows > 0){ 
        while($row = $rs->fetch_assoc()) {
          // id và biển số cùng 1 dòng với nhau
          // areaName vs location cùng dòng
          // css cho đẹp đẹp tí,để nó dưới thanh tìm kiếm
          //chỉnh cho 1 file r copy nó sang index-guess và admin là được
          ?>
          <div class="searchResult">        
            <p >
            <i class="fa-regular fa-id-badge"></i>ID thẻ: <?php echo $row['cardID'] ?> 
            </p>
            <p>
            <i class="fa-sharp fa-solid fa-cars"></i>Biển số: <?php echo $row['licensePlate']?> 
            </p>
            <p>
            <i class="fa-solid fa-building-user"></i>Khu: <?php echo  $row['areaName']?> 
            </p>
            <p>
            <i class="fa-solid fa-map-location-dot"></i>Ô đỗ: <?php echo  $row['location']?> 
            </p>
          </div>
          <?php
          if($row['type']==0){
            $_SESSION['rp_error'] = "ko có xe trong bãi";?>
         <p><i class="fa-sharp fa-solid fa-cars"></i><?php echo $_SESSION['rp_error']; ?> </p>
            <?php
          }
          }
      }
      else{
        $_SESSION['rp_error'] = "ko có xe trong bãi";?>
         <p><i class="fa-sharp fa-solid fa-cars"></i><?php echo $_SESSION['rp_error']; ?> </p>
        <?php
      }
      unset($_SESSION['rp_error']);
    }
      ?>
      
    </main>
    <?php include "./modules/footer.html" ?>
</body>
</html>
<?php 
    }
  }
?>