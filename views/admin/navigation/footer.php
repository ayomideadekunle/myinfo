</div>
</div>
<footer>
  <div class="pull-right">
    <b><i>Ayomide</i></b> Personal Website <a href="#"></a>
  </div>
  <div class="clearfix"></div>
</footer>
<script src="<?php echo USER_ASSETS;?>js/bootstrap-3.1.1.min.js"></script>
<script src="<?php echo ADMIN_ASSETS;?>build/js/custom.min.js"></script>
<script src="<?php echo ADMIN_ASSETS;?>datepicker/bootstrap-datepicker.js"></script>

  <!-- Datatables -->
  <script src="<?php echo ADMIN_ASSETS;?>js/jquery.dataTables.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS;?>js/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS;?>js//dataTables.buttons.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS;?>js/buttons.bootstrap.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS;?>js/buttons.flash.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS;?>js/buttons.html5.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS;?>js/buttons.print.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS;?>js/dataTables.fixedHeader.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS;?>js/dataTables.keyTable.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS;?>js/dataTables.responsive.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS;?>js/responsive.bootstrap.js"></script>
  <!-- <script src="<?php echo ADMIN_ASSETS;?>js/datatables.scroller.min.js"></script> -->
  <!-- <script src="vendors/jszip/dist/jszip.min.js"></script>
  <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="vendors/pdfmake/build/vfs_fonts.js"></script> -->

  <!-- Datatables -->
  <script>
    $(document).ready(function() {
      var handleDataTableButtons = function() {
        if ($("#datatable-buttons").length) {
          $("#datatable-buttons").DataTable({
            dom: "Bfrtip",
            buttons: [
              {
                extend: "copy",
                className: "btn-sm"
              },
              {
                extend: "csv",
                className: "btn-sm"
              },
              {
                extend: "excel",
                className: "btn-sm"
              },
              {
                extend: "pdfHtml5",
                className: "btn-sm"
              },
              {
                extend: "print",
                className: "btn-sm"
              },
            ],
            responsive: true
          });
        }
      };

      TableManageButtons = function() {
        "use strict";
        return {
          init: function() {
            handleDataTableButtons();
          }
        };
      }();

      $('#datatable').dataTable();

      $('#datatable-keytable').DataTable({
        keys: true
      });

      $('#datatable-responsive').DataTable();

      $('#datatable-scroller').DataTable({
        ajax: "js/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
      });

      $('#datatable-fixed-header').DataTable({
        fixedHeader: true
      });

      var $datatable = $('#datatable-checkbox');

      $datatable.dataTable({
        'order': [[ 1, 'asc' ]],
        'columnDefs': [
          { orderable: false, targets: [0] }
        ]
      });
      $datatable.on('draw.dt', function() {
        $('input').iCheck({
          checkboxClass: 'icheckbox_flat-green'
        });
      });

      TableManageButtons.init();
    });
  </script>

</body>
</html>
