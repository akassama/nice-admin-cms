<!DOCTYPE html>
<html lang="en">

<head>
       <?php 
        //variable settings
        $page_title = "Top Menu";
        $active_sidebar = "menus-nav";
        $active_sidebar_item = "top-menu-item";
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

    <!--// include form -->
    <?php include '../includes/tables/menus-table.php';?>
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
