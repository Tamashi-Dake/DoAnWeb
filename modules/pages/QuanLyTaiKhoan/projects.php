<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ADEPRO - Quản lý tài khoản</title>

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

    <!-- Navbar + Main Sidebar Container -->
    <?php
      include "../../adminTools.html"
       ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Quản lý tài khoản</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Quản lý tài khoản</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Projects</h3>

              <div class="card-tools">
                <button
                  type="button"
                  class="btn btn-tool"
                  data-card-widget="collapse"
                  title="Collapse"
                >
                  <i class="fas fa-minus"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-tool"
                  data-card-widget="remove"
                  title="Remove"
                >
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table table-striped projects">
                <thead>
                  <tr>
                    <th style="width: 1%">#</th>
                    <th style="width: 10%">Tên tài khoản</th>
                    <th style="width: 10%">Mật khẩu</th>
                    <th style="width: 20%" class="text-center">Họ Tên</th>
                    <th style="width: 8%" class="text-center">CCCD</th>
                    <th style="width: 20%" class="text-center">
                    <a class="btn btn-success btn-sm " href="project-add.php">
                        <i class="fas fa-plus"> </i>
                        Thêm
                      </a>
                  </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>#</td>
                    <td>
                      <a> lovantam </a>
                    </td>

                    <td>vantam123</td>
                    <td class="text-center">Lò Văn 1</td>
                    <td class="text-center">1234</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-info btn-sm" href="project-edit.php">
                        <i class="fas fa-pencil-alt"> </i>
                        Sửa
                      </a>
                      <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash"> </i>
                        Xóa
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <strong
          >Copyright
          <script>
            document.write(new Date().getFullYear());
          </script>
          .</strong
        >
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.2.0
        </div>
      </footer>

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
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
  </body>
</html>
