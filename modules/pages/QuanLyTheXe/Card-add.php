<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
            <div class="modal-body">
          <div class="row" style="display:block">
            <div class="col-md-6" style="    max-width: 100%;">
              <div class="card card-primary"style="box-shadow:none; margin:0;">
              <div class="card-body">
                  <div class="form-group">
                    <label for="inputUser">ID</label>
                    <input
                      type="text"
                      id="inputUser"
                      value="#"
                    />
                  </div>
                  <div class="form-group">
                    <label for="selectChucVu">Trạng thái</label>
                    <select>
                    <option value="employee">Mở</option>
                    <option value="admin">Khóa</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="selectChucVu">Loại phương tiện</label>
                    <select>
                    <option value="employee">Ô tô</option>
                    <option value="admin">Xe máy</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="selectChucVu">Loại phương tiện</label>
                    <select>
                    <option value="employee">Ô tô</option>
                    <option value="admin">Xe máy</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="selectChucVu">Loại thẻ</label>
                    <select>
                      <option value="employee">Thường</option>
                      <option value="admin">Tháng</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" >Reset</button>
              <button type="button" class="btn btn-primary">Thêm</button>
            </div>
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
