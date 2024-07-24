<?php
  include "koneksi.php";
  session_start();
  $nama = $_SESSION["nama"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Data Review</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
                    <a href="../../profil.php" class="nav-link">
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
              
              <?php
        // Periksa status pengguna
        $status = "pelayan"; // Ganti dengan variabel atau metode yang sesuai untuk mendapatkan status pengguna

        if ($status !== "pelayan" && $status !== "koki") {
        ?>
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
        <?php } ?>

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
                <?php
// Memeriksa status pengguna (contoh: menggunakan session 'status')
if (isset($_SESSION['status']) && ($_SESSION['status'] == 'manager' || $_SESSION['status'] == 'koki')) {
    // Jika status pengguna adalah manager atau koki, tampilkan link
    ?>
    <li class="nav-item">
        <a href="pages/tables/addmenu.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Tambah Menu</p>
        </a>
    </li>
    <?php
}
?>
                <li class="nav-item">
                    <a href="resep.php" class="nav-link">
                    <?php
                // Periksa status pengguna untuk menu dropdown Resep
                if ($status === "manager" || $status === "koki") {
                ?>
                  <i class="far fa-circle nav-icon"></i>
                        <p>Resep</p>
                <?php } ?>
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
                          <p>Daftar Pesanan</p>
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
                        <a href="review.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Daftar Review</p>
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
            <h1 style="color: white;">Data Review</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" style="color: lightgrey;">Data Review</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

          <div class="card" style="background-color: #343a40; color: white;">
    <div class="card-header">
        <h3 class="card-title">Data Review</h3>
    </div>
    <!-- /.card-header -->

    <?php
    include("koneksi.php");

    if (isset($_GET['id_review'])) {
        $id_review = $_GET['id_review'];
        $row = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM review WHERE id_review = '$id_review' "));

        if ($id_review != "") {
            $hapus = "DELETE FROM review WHERE id_review = '$id_review' ";
            $query = mysqli_query($koneksi, $hapus);
            if ($query) {
                echo '<script>alert("Data Berhasil Dihapus!");</script>';
            }
        }
    }
    ?>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr align="center">
                  <th width='10%'>ID Review</th>
                  <th width='15%'>Username</th>
                  <th width='30%'>Konten</th>
                  <th width='15%'>Tanggal Review</th>
                  <th width='15%'>Status</th>
                  <th width='15%'>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
              $sql = "SELECT * FROM review ORDER BY id_review ASC";
              $query = mysqli_query($koneksi, $sql);

              while ($row = mysqli_fetch_array($query)) {
                $statusClass = '';
                  if ($row['status'] == 'evaluate') {
                      $statusClass = 'success';
                  } elseif ($row['status'] == 'process') {
                      $statusClass = 'primary';
                  }

                  echo "
                  <tr>
                      <td>{$row['id_review']}</td>
                      <td>{$row['username']}</td>
                      <td>{$row['konten']}</td>
                      <td>{$row['tanggal_review']}</td>
                      <td align='center'>
                          <button class='btn btn-$statusClass btn-sm'>$row[status]</button>
                      </td>
                      <td class='project-actions text-center'>
                          <a class='btn btn-danger btn-sm' href='delete_menu.php?id_pesanan=$row[id_pesanan]'>
                              <i class='fas fa-trash'></i> Delete
                          </a>
                      </td>
                  </tr>";
              }
            ?>
            </tbody>
            <tfoot>
                <tr align="center">
                <th width='10%'>ID Review</th>
                  <th width='15%'>Username</th>
                  <th width='30%'>Konten</th>
                  <th width='15%'>Tanggal Review</th>
                  <th width='15%'>Status</th>
                  <th width='15%'>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" style="background-color: #343a40;">
        <strong
          >Copyright &copy; 2023
          <a href="../login.php">Lezazel Restaurant</a>.</strong
        >
        All rights reserved.
        
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
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
