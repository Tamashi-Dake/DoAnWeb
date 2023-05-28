<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">

  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
    Thêm
  </button>

  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Thêm thẻ xe</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="Card-add-action.php" method="POST">
          <div class="modal-body">
            <div class="row" style="display:block">
              <div class="col-md-6" style="    max-width: 100%;">
                <div class="card card-primary" style="box-shadow:none; margin:0;">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="txtCardID-Add">ID thẻ</label>
<!-- php-start -->
                      <input type="text" id="txtCardID-Add" name="txtCardID_Add" readonly value="<?php
                      $sqlQuery = "SELECT MAX(cardID) AS maxCardID FROM card";
                      $result = mysqli_query($conn, $sqlQuery);
                      if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $maxCardID = $row["maxCardID"];
                        $cardID = $maxCardID + 1;
                      } else {
                        $cardID = 1000;
                      }
                      echo ($cardID);
                      ?>" />
<!-- php-end -->
                    </div>
                    <!-- <div class="form-group">
                      <label for="selectStatus">Trạng thái</label>
                      <select id="selectStatus">
                        <option value="1">Mở</option>
                        <option value="0">Khóa</option>
                      </select>
                    </div> -->
                    <div class="form-group">
                      <label for="selectVehicleType-Add">Loại xe</label>
                      <select id="selectVehicleType-Add" name="selectVehicleType_Add">
                        <option value="Xe máy">Xe máy</option>
                        <option value="Ô tô">Ô tô</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="selectType-Add">Loại thẻ</label>
                      <select id="selectType-Add" name="selectType_Add">
                        <option value="Thường">Thường</option>
                        <option value="Tháng">Tháng</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="inputCustomerName-Add">Tên khách hàng</label>
                      <input type="text" id="txtCustomerName-Add" class="inputForMonthCard-Add"
                        name="txtCustomerName_Add" value="#" />
                    </div>
                    <div class="form-group">
                      <label for="txtCustomerIdentityCard-Add">CCCD khách</label>
                      <input type="text" id="txtCustomerIdentityCard-Add" class="inputForMonthCard-Add"
                        name="txtCustomerIdentityCard_Add" value="#" />
                    </div>
                    <div class="form-group">
                      <label for="txtPhoneNumber-Add">Số điện thoại</label>
                      <input type="text" id="txtPhoneNumber-Add" class="inputForMonthCard-Add" name="txtPhoneNumber_Add"
                        value="#" />
                    </div>
                    <div class="form-group">
                      <label for="txtLicensePlate-Add">Biển số xe</label>
                      <input type="text" id="txtLicensePlate-Add" class="inputForMonthCard-Add"
                        name="txtLicensePlate_Add" value="#" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="reset" class="btn btn-default">Reset</button>
            <button type="submit" class="btn btn-primary" id="btn-add">Thêm</button>
            <!-- <input type="reset" class="btn btn-default" value="Reset"> -->
            <!-- <input type="submit" class="btn btn-primary" id="btn-add" name="btn-add"value="Thêm"> -->
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>