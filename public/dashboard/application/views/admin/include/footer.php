  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="#">Bansal and sons Jewellers</a>, Developed by <a href="https://www.softication.com">SoftiCation Technology</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
     <a href="https://softication.com/contact.php/"><b>Developer Contact</b></a>
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
<script src="<?php echo base_url('cmn/admin/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('cmn/admin/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('cmn/admin/plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('cmn/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('cmn/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js');?>"></script>
<script src="<?php echo base_url('cmn/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('cmn/admin/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('cmn/admin/dist/js/demo.js');?>"></script>

<!-- old to past jQuery UI 1.11.4 -->
<script src="<?php echo base_url('cmn/admin/plugins/jquery-ui/jquery-ui.min.js');?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- ChartJS -->
<script src="<?php echo base_url('cmn/admin/plugins/chart.js/Chart.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('cmn/admin/plugins/sparklines/sparkline.js');?>"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('cmn/admin/plugins/jqvmap/jquery.vmap.min.js');?>"></script>
<script src="<?php echo base_url('cmn/admin/plugins/jqvmap/maps/jquery.vmap.usa.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('cmn/admin/plugins/jquery-knob/jquery.knob.min.js');?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('cmn/admin/plugins/moment/moment.min.js');?>"></script>
<script src="<?php echo base_url('cmn/admin/plugins/daterangepicker/daterangepicker.js');?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('cmn/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js');?>"></script>
<!-- Summernote -->
<script src="<?php echo base_url('cmn/admin/plugins/summernote/summernote-bs4.min.js');?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('cmn/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('cmn/admin/dist/js/pages/dashboard.js');?>"></script>
<script src="<?php echo base_url('cmn/admin/dist/js/demo.js');?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
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
