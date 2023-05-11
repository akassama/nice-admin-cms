<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        //variable settings
        $page_title = "Content Details";
        $active_sidebar = "";
        $active_sidebar_item = "content-blocks-item";
       ?>
      <!--// include header resouces -->
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

    <!--// include view -->
    <?php include '../includes/views/content-block-details-view.php';?>
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
