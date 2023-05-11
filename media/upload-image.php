<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        //variable settings
        $page_title = "Upload Images";
        $active_sidebar = "media-nav";
        $active_sidebar_item = "images-item";
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
    <?php include '../includes/forms/image-upload-form.php';?>
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
