<style>
    /* Custom style for footer */
    .main-footer {
      background-color: #454d55;
      color: white;
      text-align: center;
      padding: 10px;
    }
    /* Custom style for DataTables search input */
    .dataTables_wrapper .dataTables_filter input {
      background-color: #454d55; /* Background color for search input */
      border: 1px solid #ccc;
      padding: 6px 10px;
      border-radius: 4px;
      font-size: 14px;
      color: white;
    }
    /* Optional: Style for placeholder text */
    .dataTables_wrapper .dataTables_filter input::placeholder {
      color: #999;
    }
    /* Custom style for DataTables buttons */
    .dt-buttons {
      margin-top: 10px;
    }
  </style>

<!-- Main Footer -->
<footer class="main-footer" style="background-color: #454d55; color: white; text-align: center; padding: 10px;">
  <strong>&copy; 2024 <a href="<?= base_url('login') ?>" style="color: lightgrey;">Destiny Cafe</a>.</strong> All rights reserved.
</footer>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/admin') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/admin') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/admin') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/admin') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin') ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= base_url('assets/admin') ?>/dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
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