<html lang="en">

<?php echo @$head; ?>
 
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php echo @$sidebar; ?>
  

 <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
      <div id="content">

<?php echo @$header; ?>


 <?php echo @$content; ?>

</div>
 <?php echo @$footer; ?>
  
   </div>
    <!-- End of Content Wrapper -->

  </div>

 <?php echo @$js; ?>
 
</body>

</html>