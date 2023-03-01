<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2022 Tran Quy.</strong> 
     All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> x.x.x
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
  <script src="/templates/admin/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="/templates/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="/templates/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="/templates/admin/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="/templates/admin/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <!-- <script src="/templates/admin/plugins/jqvmap/jquery.vmap.min.js"></script> -->
  <!-- <script src="/templates/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
  <!-- jQuery Knob Chart -->
  <!-- <script src="/templates/admin/plugins/jquery-knob/jquery.knob.min.js"></script> -->
  <!-- daterangepicker -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
  <script src="/templates/admin/plugins/moment/moment.min.js"></script>
  <script src="/templates/admin/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="/templates/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="/templates/admin/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <!-- <script src="/templates/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
  <!-- AdminLTE App -->
  <script src="/templates/admin/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/templates/admin/dist/js/demo.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  
  
  <script type="text/javascript">
    $(document).ready(function() {
      $('#sort').on('change', function() {
        var url = $(this).val();
        if(url) {
          window.location = url;
        }
        return false;
      });
    });
  </script>
  </body>
</html>

<?php
  ob_end_flush();
?>