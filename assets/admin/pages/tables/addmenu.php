<?php
include "koneksi.php";
session_start();
$nama = $_SESSION["nama"];

if (isset($_POST['submit'])) {
    $id_menu = $_POST['id_menu'];
    $nama_menu = $_POST['nama_menu'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $foto = $_FILES['foto']['name'];
    if($foto !=''){
        $upload = '../tables/images/'.$foto;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $upload);
    }

    $sql = "INSERT INTO menu (id_menu, nama_menu, deskripsi, harga, foto) VALUES ('$id_menu', '$nama_menu', '$deskripsi', '$harga', '$foto')";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        echo "<script>alert('Berhasil Ditambah!')</script>";
        header("Location: ../tables/minuman.php");
        exit();
    } else {
        echo "<script>alert('Gagal Menambah!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Lezazel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?=$_SESSION['nama']?></a>
        </div>
      </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Profil
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/examples/profile.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Profil</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>LogOut</p>
                    </a>
                  </li>
                </ul>
              </li>
              
               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Users
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../../admin.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pegawai</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pelanggan.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pelanggan</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Menu
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="makanan.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Makanan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="minuman.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Minuman</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon far fa-envelope"></i>
                      <p>
                        Pesanan
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pesanan.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Inbox</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/mailbox/compose.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Compose</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/mailbox/read-mail.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Read</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Review
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>

            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #454d55;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color: white;"></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" style="color: lightgrey;">Tambah Data Menu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6" >
            <!-- general form elements -->
            <div class="card card-primary" style="width: 1070px;">
              <div class="card-header" style="background-color: #343a40;">
                <h3 class="card-title" style="color: white;">Tambah Data Menu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form name="addmenu" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype='multipart/form-data'>
                <div class="card-body" style="background-color: #343a40; color: white;">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Menu</label>
                    <input name="id_menu" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter id">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="nama_menu" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <input name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter deskripsi">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input name="harga" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter harga">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Gambar</label>
                    <input name="foto" type="file" class="form-control" id="exampleInputEmail1" placeholder="Enter gambar" accept=".jpg, .jpeg">
                </div>
                <!-- /.card-body -->

                <div class="card-footer" style="background-color: #343a40;">
                  <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer" style="background-color: #343a40;">
        <strong
          >Copyright &copy; 2023 <a href="../login.php">Lezazel Restaurant</a>.</strong
        >
        All rights reserved.
      </footer>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
