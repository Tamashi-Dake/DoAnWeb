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
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ADEPRO - Quản lý Thẻ Xe</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css" />
</head>

<body>
  <style>
    <?php
    include "../../../guessIndex.css";
    include "../../../bootstrap.css";
    include "../../../connection.php";
    ?>
    th,
    td {
      text-align: center !important;
    }

    .form-group {
      display: grid;
      grid-template-columns: 45% 55%;
      row-gap: 3px;

    }
    label{
        margin-top: auto;
        margin-bottom: auto  !important;
    }
    .page-link {
      padding: 10px !important;
      margin: 3px !important;
    }

    .errorMessenge {
        display: block;
        color: red;
        grid-column-start: 2;
        text-align: left;
        margin-bottom: 0;
        font-size:0.7rem;
    }
  </style>
  <?php
    include "../../header-navbar/header.php";
  ?>
  <main style="margin-top: 10vh">
    <!-- content header -->
    <!-- <div bis_skin_checked="1">
            <div class="row" style="grid-template-columns: repeat(2, 1fr);" bis_skin_checked="1">
              <div class="col-sm-5" bis_skin_checked="1">
                <h1>Quản lý Thẻ Xe</h1>
              </div>
              <div class="col-sm-5" bis_skin_checked="1">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Quản lý tài khoản</li>
                </ol>
              </div>
            </div>
          </div> -->
    <div id="load_data"></div>
    <section class="content" style=" margin:auto; max-width:95%;">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-titl e">Danh sách thẻ xe</h3>
          <div style="margin-left:auto;">
            <div class="input-group rounded">
              <input type="search" id="txtSearch" class="form-control rounded" placeholder="Tìm kiếm" aria-label="Search"
                aria-describedby="search-addon"/>
              <button id="btn_seacrch">
                <span class="input-group-text border-0" id="search-addon">
                  <i class="fas fa-search"></i>
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
            <thead>
              <tr>
                <th style="width: 2%">#</th>
                <th style="width: 9.5%">ID thẻ</th>
                <th style="width: 5%">Trạng thái</th>
                <th style="width: 9.5%" class="text-center">Loại thẻ</th>
                <th style="width: 9.5%" class="text-center">Loại xe</th>
                <th style="width: 9.5%" class="text-center">Ngày đăng ký</th>
                <th style="width: 9.5%" class="text-center">Họ và tên</th>
                <th style="width: 9.5%" class="text-center">CCCD khách</th>
                <th style="width: 9.5%" class="text-center">Số điện thoại</th>
                <th style="width: 9.5%" class="text-center">Biển số xe</th>
                <th style="width: 9.5%" class="text-center">
<?php
                  include "Card-add.php";
?>
                </th>
              </tr>
            </thead>
            <tbody>
<?php
              if (isset($_GET['search'])) {
                $search = $_GET['search'];
                $sql = "SELECT * FROM card LEFT JOIN monthcard ON cardID = monthcardID WHERE (cardID like '%$search%' OR customerName like '%$search%' OR customerIdentityCard like '%$search%') OR phoneNumber like '%$search%' OR licensePlate like '%$search%'  AND (card.display = 1 OR monthcard.display = 1)";
              }
              else {
                $sql = "SELECT * FROM card LEFT JOIN monthcard ON cardID = monthcardID WHERE card.display = 1 OR monthcard.display = 1";
              }
              
              // Create connection
              // $connection = new mysqli($servername, $username, $password, $database);
              // read all row from database table
              $result = $conn->query($sql);

              if (!$result) {
                die("Invalid query: " . $connection->error);
              }

              // phân trang BY TongDangTu
              $sizePage = 10;
              $number_rows = mysqli_num_rows($result);
              $number_pages = ceil($number_rows / $sizePage);
              if (isset($_GET["page"])) {
                $current_page = $_GET["page"];
                if($current_page > $number_pages) {
                  $current_page = $number_pages;
                }
                if($current_page < 1) {
                  $current_page = 1;
                }
              }
              else {
                $current_page = 1;
              }

              $i = 0;
              $row_start = ($current_page - 1) * $sizePage + 1;
              $row_end = $current_page * $sizePage;
              // read data of each row
              while ($row = mysqli_fetch_assoc($result)) {
                $i++;
                if ($i >= $row_start && $i <= $row_end) {
                  ?>  
                  <tr>
                    <td>
                      <?php echo ($i) ?>
                    </td>
                    <td>
                      <?php echo ($row["cardID"]) ?>
                    </td>
                    <td>
                      <?php echo ($row["status"]) ?>
                    </td>
                    <td>
                      <?php echo ($row["type"]) ?>
                    </td>
                    <td>
                      <?php echo ($row["vehicleType"]) ?>
                    </td>
                    <td>
                      <?php echo ($row["date"]) ?>
                    </td>
                    <td>
                      <?php echo ($row["customerName"]) ?>
                    </td>
                    <td>
                      <?php echo ($row["customerIdentityCard"]) ?>
                    </td>
                    <td>
                      <?php echo ($row["phoneNumber"]) ?>
                    </td>
                    <td>
                      <?php echo ($row["licensePlate"]) ?>
                    </td>
                    <td class='project-actions text-center'>
                      <button type="button" class="btn btn-default btn_edit" data-toggle="modal" data-target="#modal" id="btn_edit_<?php echo($row["cardID"]) ?>" data-cardid="<?php echo($row["cardID"]) ?>">
                        <i class="fas fa-solid fa-pen-to-square"></i>
                        Edit
                      </button>
                      <a class='btn btn-danger' href='Card-delete-action.php?cardID=<?php echo ($row["cardID"]) ?>&type=<?php echo ($row["type"]) ?>'>
                        <i class='fas fa-trash'> </i>
                        Xóa
                      </a>
                    </td>
                  </tr>
<?php
                }
              }
              $conn->close();
?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <!-- phân trang -->
        <div aria-label="Page navigation">
          <ul class="pagination justify-content-center">
            <li class="page-item ">
              <a class="page-link" href="?page=1<?php if (isset($_GET['search'])) { $search = $_GET['search']; echo("&search=". $_GET['search']);} ?>"><<</a>
            </li>
            <li class="page-item ">
              <a class="page-link" href="?page=<?php echo(($current_page-1)) ?><?php if (isset($_GET['search'])) { $search = $_GET['search']; echo("&search=". $_GET['search']);} ?>"><</a>
            </li>
<?php
            if ($current_page > 3) {
?>
              <b style="margin-top: 7px;"> . . . </b>
<?php
            }
            for ($i = 1; $i <= $number_pages; $i++) {
              if (abs($i - $current_page) <= 2) {
                if ($i == $current_page) {
?>
                  <li class="page-item"><a class="page-link" href="?page=<?php echo($i) ?><?php if (isset($_GET['search'])) { $search = $_GET['search']; echo("&search=". $_GET['search']);} ?>" style="background-color: #ccc;"><?php echo($i) ?></a></li>
<?php
                }
                else {
?>
                  <li class="page-item"><a class="page-link" href="?page=<?php echo($i) ?><?php if (isset($_GET['search'])) { $search = $_GET['search']; echo("&search=". $_GET['search']);} ?>"><?php echo($i) ?></a></li>
<?php
                }
              }
            }
            if ($number_pages - $current_page > 2) {
?>
              <b style="margin-top: 7px;"> . . . </b>
<?php
            }
?>
            <li class="page-item">
              <a class="page-link" href="?page=<?php echo(($current_page+1)) ?><?php if (isset($_GET['search'])) { $search = $_GET['search']; echo("&search=". $_GET['search']);} ?>">></a>
            </li>
            <li class="page-item">
              <a class="page-link" href="?page=<?php echo($number_pages) ?><?php if (isset($_GET['search'])) { $search = $_GET['search']; echo("&search=". $_GET['search']);} ?>">>></a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /.card -->
    </section>
  </main>
  <?php
  // include "../../feedback-btn.html" ?>
  <?php include "../../footer.html" ?>
  <?php include "Card-edit.php" ?>


  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
</body>

<?php 
    }
  }
?>

<script>
  $(document).ready(function () {
    // phần này bên add
    if ($("#selectType-Add").val() == "Tháng") {
      $(".inputForMonthCard-Add").prop('readonly', false);
    }
    if ($("#selectType-Add").val() == "Thường") {
      $(".inputForMonthCard-Add").prop('readonly', true);
    }
    $("#selectType-Add").change(function () {
      if ($(this).val() == "Tháng") {
        $(".inputForMonthCard-Add").prop('readonly', false);
      }
      if ($(this).val() == "Thường") {
        $(".inputForMonthCard-Add").prop('readonly', true);
      }
    });

// Lấy ID khi click vào Edit
    // Lấy data của nút khi click bằng AJAX
    var btn_edit_list = $(".btn_edit");
    // alert("Độ dài btn_edit_list: "+ btn_edit_list.length);
    for (var i = 0; i < btn_edit_list.length; i++) {
      btn_edit_list[i].onclick = function(e)
      {
          e.preventDefault();   // Không cho phép chuyển trang
          var cardID = $(this).data("cardid");

          $.ajax({
            url: "Card-edit-action-ajax.php",
            type: "post",
            dataType: "html",
            data : {
              cardID
            }
          }).done(function(result){
            // $("#load_data").html(result);
            const row = JSON.parse(result);
            
            $("#txtCardID_Edit").val(row.cardID);

            $("#selectStatus_Edit option").prop('selected', false);
            $("#selectVehicleType_Edit option").prop('selected', false);
            $("#selectType_Edit option").prop('selected', false);
            $("#selectStatus_Edit option[value='"+ row.status +"']").prop('selected', true);
            $("#selectVehicleType_Edit option[value='"+ row.vehicleType +"']").prop('selected', true);
            $("#selectType_Edit option[value='"+ row.type +"']").prop('selected', true);

            // alert(row.date+ " " +row.customerName+ " " +row.customerIdentityCard+ " " +row.phoneNumber+ " " +row.licensePlate);

            $("#txtDate_Edit").val(row.date);
            $("#txtCustomerName_Edit").val(row.customerName);
            $("#txtCustomerIdentityCard_Edit").val(row.customerIdentityCard);
            $("#txtPhoneNumber_Edit").val(row.phoneNumber);
            $("#txtLicensePlate_Edit").val(row.licensePlate);

            if ($("#selectType_Edit").val() == "Tháng") {
              $(".inputForMonthCard-Edit").prop('readonly', false);
            }
            if ($("#selectType_Edit").val() == "Thường") {
              $(".inputForMonthCard-Edit").prop('readonly', true);
            }
            $("#selectType_Edit").change(function () {
              if ($(this).val() == "Tháng") {
                $(".inputForMonthCard-Edit").prop('readonly', false);
              }
              if ($(this).val() == "Thường") {
                $(".inputForMonthCard-Edit").prop('readonly', true);
                $("#txtDate_Edit").val("");
                $("#txtCustomerName_Edit").val("");
                $("#txtCustomerIdentityCard_Edit").val("");
                $("#txtPhoneNumber_Edit").val("");
                $("#txtLicensePlate_Edit").val("");
              }
            });

            // if ($("#txtCustomerName_Edit").val() == "") {
            //   $("#errortest").html("Không được bỏ trống");
            // }
          });
          
      };
    }

    // txtCustomerName_Edit.oninput = function() {
    //   var customerName = $("#txtCustomerName_Edit").val();
    //   var pattern = "^[ A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚÝàáâãèéêìíòóôõùúýĂăĐđĨĩŨũƠơƯưẠ-ỹ]{1,30}$";
    //   var text = customerName;
    //   if (text.match(pattern)) {
    //     alert("Tên đúng");
    //   }
    //   else {
    //     alert("Tên sai");
    //   }
    // };

// Search
    <?php
      if (isset($_GET['search'])) {
    ?>
        $("#txtSearch").val("<?php echo($_GET['search']) ?>");
    <?php
      }
    ?>
    $("#btn_seacrch").click(function(){
      var search = $("#txtSearch").val();
      // if (search != "") {
        alert(search);
        window.location.href = "Card.php?search="+ search;
      // }
    });
  });
</script>