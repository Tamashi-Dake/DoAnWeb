<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ADEPRO | Quản lý tài khoản </title>

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
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css" />
  </head>
  <body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
        <!-- đây là modal cho method ADD trong quản lý tài khoản -->

        <!-- Main content -->
        <section class="content">
        <div class="row">
            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">General</h3>

                  <div class="card-tools">
                    <button
                      type="button"
                      class="btn btn-tool"
                      data-card-widget="collapse"
                      title="Collapse"
                    >
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputUser">Tên tài khoản</label>
                    <input
                      type="text"
                      id="inputUser"
                      class="form-control"
                      value="#"
                    />
                  </div>
                  <div class="form-group">
                    <label for="inputPassword">Mật khẩu</label>
                    <input
                      type="text"
                      id="inputPassword"
                      class="form-control"
                      value="#"
                    />
                  </div>
                  <div class="form-group">
                    <label for="inputName">Họ tên</label>
                    <input
                      type="text"
                      id="inputName"
                      class="form-control"
                      value="#"
                    />
                  </div>
                  <div class="form-group">
                    <label for="inputCCCD">Căn cước công dân</label>
                    <input
                      type="text"
                      id="inputCCCD"
                      class="form-control"
                      value="#"
                    />
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <a href="#" class="btn btn-secondary">Cancel</a>
              <input
                type="submit"
                value="Create new Account"
                class="btn btn-success float-right"
              />
            </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--  App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!--  for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
  </body>
</html>
