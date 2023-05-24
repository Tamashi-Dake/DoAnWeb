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
                    <th style="width: 1%">#</th>
                    <th style="width: 20%">ID</th>
                    <th style="width: 20%">Trạng thái</th>
                    <th style="width: 20%" class="text-center">Loại phương tiện</th>
                    <th style="width: 20%" class="text-center">Loại thẻ</th>
                    <th style="width: 19%" class="text-center">
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
              $sql = "SELECT * FROM webbaiguixe.card";
              $result = $conn->query($sql);

                    if (!$result) {
                die("Invalid query: " . $connection->error);
              }

                    // read data of each row
              while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td></td>
                            <td>" . $row["cardID"] . "</td>
                            <td>" . $row["status"] . "</td>
                            <td>" . $row["vehicleType"] . "</td>
                            <td>" . $row["type"] . "</td>
                            <td class='project-actions text-center'>
                            <a type='button' class='btn btn-default' href='Card-edit.php'>
                            Edit
                            </a>
                              <a class='btn btn-danger' href='#'>
                                <i class='fas fa-trash'> </i>
                                Xóa
                              </a>
                            </td>
                        </tr>";
                    }

                    $conn->close();
                    ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
        </section>
    </main>

        <?php 
        // include "../../feedback-btn.html" ?>
    <?php include "../../footer.html" ?>
  </body>
       
