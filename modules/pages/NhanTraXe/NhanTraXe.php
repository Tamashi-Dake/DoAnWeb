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
include "../../../guessIndex.css";
include "../../../bootstrap.css";
include "../../../connection.php";
    ?>

    .col{
      width:80%;
      margin:auto ;
    }
    .form-group{
      display:grid;
      grid-template-columns: 40% 60%;
      padding:10px;
    }
    .card-footer{
      display:flex;
      justify-content:space-between;
    }
    input{
      padding-left:10px
    }
</style>
<?php include "../../header-navbar/header-employee.html";
date_default_timezone_set('Asia/Ho_Chi_Minh');

?>

    <main class="row" style="display:grid ; grid-template-columns: repeat(2, 1fr) ">
          <div class="col">            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title text-center">Nhận xe</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body" >
                  <div class="form-group">
                    <label for="txtID">ID thẻ:</label>
                    <input type="text" class="form-control" id="ID" placeholder="Nhập ID thẻ">
                  </div>
                  <div class="form-group">
                    <label for="txtBienSo">Biển số xe</label>
                    <input type="password" class="form-control" id="txtBienSo" placeholder="Nhập biển số xe">
                  </div>
                  <div class="form-group">
                    <label for="selectCard">Loại thẻ</label>
                    <select id="selectCard">
                      <option value="Thường">Thường</option>
                      <option value="Tháng">Tháng</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputDate">Ngày đăng ký</label>
                    <input readonly type="date" id="inputDate" class="inputForMonthCard-Edit" value="<?php echo date('Y-m-d'); ?>"  />
                  </div>
                  <div class="form-group">
                    <label for="txtGio">Giờ</label>
                    <input readonly type="text" class="form-control" id="txtGio" value="<?php echo date("H:i"); ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="reset" class="btn btn-secondary">Đặt lại</button>
                  <button type="submit" class="btn btn-primary">Nhận</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col">            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title text-center">Trả xe</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body" >
                  <div class="form-group">
                    <label for="txtID">ID thẻ:</label>
                    <input type="text" class="form-control" id="ID" placeholder="Nhập ID thẻ">
                  </div>
                  <div class="form-group">
                    <label for="txtBienSo">Biển số xe</label>
                    <input type="password" class="form-control" id="txtBienSo" placeholder="Nhập biển số xe">
                  </div>
                  <div class="form-group">
                    <label for="inputDate">Ngày đăng ký</label>
                    <input readonly type="date" id="inputDate" class="inputForMonthCard-Edit" value="<?php echo date('Y-m-d'); ?>"  />
                  </div>
                  <div class="form-group">
                    <label for="txtGio">Giờ</label>
                    <input readonly type="text" class="form-control" id="txtGio" value="<?php echo date("H:i"); ?>">
                  </div>
                  <div class="form-group">
                    <label for="txtTien">Thành tiền</label>
                    <input readonly class="form-control" id="txtTien" value="<?php  ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="reset" class="btn btn-secondary">Đặt lại</button>
                  <button type="submit" class="btn btn-primary">Trả</button>
                </div>
              </form>
            </div>
          </div>
    </main>

<?php include "../../footer.html" ?>
</body>
</html>