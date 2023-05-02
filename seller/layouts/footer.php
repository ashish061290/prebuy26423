
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2022 <a href="https://sathitech.com">Sathitech</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo ADMINASSETS ?>js/jquery.min.js"></script>
<script src="<?php echo ADMINASSETS ?>js/product_js.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo ADMINASSETS ?>js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo ADMINASSETS ?>js/bootstrap.min.js"></script>
<script src="<?php echo ADMINASSETS ?>js/moment.js"></script>
<!-- Slimscroll -->
<script src="<?php echo ADMINASSETS ?>js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->

<script src="<?php echo ADMINASSETS ?>js/fastclick.js"></script>
<!-- DataTables -->
<script src="<?php echo ADMINASSETS ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo ADMINASSETS ?>js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo ADMINASSETS ?>js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo ADMINASSETS ?>js/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo ADMINASSETS ?>js/demo.js"></script>
<script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"
        type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#open1").change(function(){
                var str = document.getElementById('open1').value;
                 document.getElementById("open").innerHTML= str;
               //alert(str);
               // $.post("addName.php", {q: str});
            });
            $("#close1").change(function(){
                var str = document.getElementById('close1').value;
                document.getElementById("close").innerHTML= str;
                //alert(str);
               // $.post("gethint.php", {q: str});
            });
        });
    </script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script type="text/javascript">
        $(function () {
            $('#lstFruits').multiselect({
                includeSelectAllOption: true
            });

        });
    </script>
</body>
</html>
