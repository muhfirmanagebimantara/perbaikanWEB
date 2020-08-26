<script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/js/sb-admin-2.min.js');?>"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('assets/vendor/chart.js/Chart.min.js');?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url('assets/js/demo/chart-area-demo.js');?>"></script>
  <script src="<?= base_url('assets/js/demo/chart-pie-demo.js');?>"></script>


    <!-- jQuery, Datepicker js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <script>
  $(".datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        minDate: "01/01/1995",
        maxDate: "12/31/2001",
        beforeShowDay: function(date) {
            var showDay = true;

            // menggunakan fungsi jquery inArray
            return [showDay];
        }
    });

</script>