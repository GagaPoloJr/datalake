  <!-- General JS Scripts -->


  <script src="<?php echo base_url() . 'assets/modules/jquery.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/modules/popper.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/modules/tooltip.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/modules/bootstrap/js/bootstrap.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/modules/nicescroll/jquery.nicescroll.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/modules/moment.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/js/stisla.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/modules/datatables/datatables.min.js'?>"></script>
  <script src="<?php echo base_url() . 'assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js'?>"></script>
  <script src="<?php echo base_url() . 'assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js'?>"></script>
  <script src="<?php echo base_url() . 'assets/modules/jquery-ui/jquery-ui.min.js'?>"></script>
  <script src="<?php echo base_url() . 'assets/js/page/modules-datatables.js'?>"></script>
  

  <script>
        function hapus(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
        function konfirmasi(url) {
            $('#btn-confirm').attr('href', url);
            $('#confirmModal').modal();
        }

        function keluar(url) {
            $('#btn-logout').attr('href', url);
            $('#logout').modal();
        }
    </script>

<script>
    $(function() {
      $("#example1").DataTable();
      $('#table-artikel').DataTable({
        "paging": true,
        // "pageLength": 10,
        // "ajax":           '/api/data',
        // "scrollY":        500,
        "scrollX": true,
        // "deferRender":    true,
        "scrollCollapse": true,
        // "responsive": true,
        // "lengthMenu": [10],
        "searching": false,
       
        "info": true,
        "autoWidth": true
      });
    });
  </script>