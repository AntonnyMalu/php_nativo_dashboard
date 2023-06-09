<?php
session_start();
require_once "../vendor/autoload.php";
use app\controller\DashboardController;
$auth = new DashboardController();
$auth->isAmdin();

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
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo FAVICON_57 ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo FAVICON_60 ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo FAVICON_72 ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo FAVICON_76 ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo FAVICON_114 ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo FAVICON_120 ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo FAVICON_144 ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo FAVICON_152 ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo FAVICON_180 ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo FAVICON_192 ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo FAVICON_32 ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo FAVICON_96 ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo FAVICON_16 ?>">
    <link rel="manifest" href="<?php echo FAVICON_MANIFEST ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo FAVICON_MSAPLICATION ?>">
    <meta name="theme-color" content="#ffffff">
    <title>Concept | Dashboard</title>
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