<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ADEPRO - Quản lý Thẻ Xe</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="../../plugins/fontawesome-free/css/all.min.css"
    />
  </head>
  <body>
  <style>
    <?php
    include "../../../guessIndex.css";
    include "../../../bootstrap.css";
    include "../../../connection.php";
    ?>
    th,td{
      text-align:center !important;
    }
    .form-group{
      display:grid;
      grid-template-columns: 45% 55%;
  gap: 10px;
    }    .page-link{
      padding:10px !important;
    }
</style>
<?php include "../../header-navbar/header-employee.html" ?>
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
      <section class="content" style=" margin:auto; max-width:95%;">
          <!-- Default box -->
          <div class="card" >
            <div class="card-header">
              <h3 class="card-titl e">Danh sách thẻ xe</h3>
             <div style="margin-left:auto;">
             <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Tìm kiếm" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
               <i class="fas fa-search"></i>
              </span>
              </div></div>
            </div>
            <div class="card-body p-0">
              <table class="table table-striped projects">
                <thead>
                  <tr>
                  <th style="width: 4%">#</th>
                    <th style="width: 9.5%">ID thẻ</th>
                    <th style="width: 9.5%">Trạng thái</th>
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
                        // Create connection
              // $connection = new mysqli($servername, $username, $password, $database);
                    // read all row from database table
                    $sql = "SELECT * FROM card LEFT JOIN monthcard ON cardID = monthcardID WHERE card.display = 1 OR monthcard.display = 1";
                    $result = $conn->query($sql);

                    if (!$result) {
                die("Invalid query: " . $connection->error);
              }

                    // read data of each row
              $i = 0;
              while($row = $result->fetch_assoc()) {
?>                
                          <tr>
                            <td><?php echo(++$i) ?></td>
                            <td><?php echo($row["cardID"]) ?></td>
                            <td><?php echo($row["status"]) ?></td>
                            <td><?php echo($row["type"]) ?></td>
                            <td><?php echo($row["vehicleType"]) ?></td>
                            <td><?php echo($row["date"]) ?></td>
                            <td><?php echo($row["customerName"]) ?></td>
                            <td><?php echo($row["customerIdentityCard"]) ?></td>
                            <td><?php echo($row["phoneNumber"]) ?></td>
                            <td><?php echo($row["licensePlate"]) ?></td>
                            <td class='project-actions text-center'>
                            <?php include "Card-edit.php"; ?>
                              <a class='btn btn-danger' href='#'>
                                <i class='fas fa-trash'> </i>
                                Xóa
                              </a>
                            </td>
                        </tr>
<?php
                    }

                    $conn->close();
                    ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div aria-label="Page navigation">
                      <ul class="pagination justify-content-center">
                        <li class="page-item ">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  </div>
                  <!-- /.card -->
        </section>
    </main>

        <?php 
        // include "../../feedback-btn.html" ?>
    <?php include "../../footer.html" ?>
    
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function(){
    if ($("#selectType-Add").val() == "Tháng") {
      $(".inputForMonthCard-Add").prop('disabled', false);
    }
    if ($("#selectType-Add").val() == "Thường") {
      $(".inputForMonthCard-Add").prop('disabled', true);
    }
    $("#selectType-Add").change(function(){
      if ($(this).val() == "Tháng") {
        $(".inputForMonthCard-Add").prop('disabled', false);
      }
      if ($(this).val() == "Thường") {
        $(".inputForMonthCard-Add").prop('disabled', true);
      }
    });

    if ($("#selectType-Edit").val() == "Tháng") {
      $(".inputForMonthCard-Edit").prop('disabled', false);
    }
    if ($("#selectType-Edit").val() == "Thường") {
      $(".inputForMonthCard-Edit").prop('disabled', true);
    }
    $("#selectType-Edit").change(function(){
      if ($(this).val() == "Tháng") {
        $(".inputForMonthCard-Edit").prop('disabled', false);
      }
      if ($(this).val() == "Thường") {
        $(".inputForMonthCard-Edit").prop('disabled', true);
      }
    });
  });
</script>
  </body>
       
