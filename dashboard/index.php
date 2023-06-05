<?php 
require_once "../vendor/autoload.php";

?>
<!doctype html>
<html lang="es">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo BOOTSTRAP_MIN_CSS; ?>">
    <link href="<?php echo FONTS_STYLE_CSS ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo LIBS_STYLE_CSS ?>">
    <link rel="stylesheet" href="<?php echo FONTAWESOME_ALL_CSS ?>">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
            <?php require_once "_layout/navbar.php"; ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
            <?php require_once "_layout/sidebar.php"; ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
            <?php require_once "_layout/content.php"; ?>
                    
                
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <?php require_once "_layout/footer.php"; ?>
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1 -->
        <script src="<?php echo JQUERY_MIN_JS ?>"></script>
        <!-- bootstap bundle js -->
        <script src="<?php echo BOOTSTRAP_BUNDLE_JS ?>"></script>
        <!-- slimscroll js -->
        <script src="<?php echo JQUERY_SLIMSCROLL_JS ?>"></script>
        <!-- main js -->
        <script src="<?php echo MAIN_JS_JS ?>"></script>
</body>
 
</html>