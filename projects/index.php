<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        //variable settings
        $page_title = "Blank";
        $active_sidebar = "blank-nav";
        $active_sidebar_item = "blank-item";
       ?>
      <!--// include header resources -->
      <?php include '../includes/header_resources.php';?>
</head>

<body>
  <!--// include header -->
  <?php include '../includes/header.php';?>

    <!--// include sidebar -->
    <?php include '../includes/sidebar.php';?>

  <main id="main" class="main">
    <!--// include breadcrumb -->
    <?php include '../includes/breadcrumb.php';?>

    <!--// include table -->
    <?php include '../includes/tables/projects-table.php';?>
  </main>
  <!-- End #main -->

    <!--// include footer -->
    <?php include '../includes/footer.php';?>

    <!--// include modals -->
    <?php include '../includes/modals.php';?>

   <!--// include footer resources -->
   <?php include '../includes/footer_resources.php';?>
</body>

</html>
