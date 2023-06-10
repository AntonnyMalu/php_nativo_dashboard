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
    <link rel="stylesheet" href="<?php asset('app\\resources\\concept\\assets\\vendor\\bootstrap\\css\\bootstrap.min.css'); ?>">
    <link href="<?php asset('app\\resources\\concept\\assets\\vendor\\fonts/circular-std\\style.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php asset('app\\resources\\concept\\assets\\libs\\css\\style.css') ?>">
    <link rel="stylesheet" href="<?php asset('app\\resources\\concept\\assets\\vendor\\fonts\\fontawesome\\css\\fontawesome-all.css') ?>">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php asset('app/favicon/apple-icon-57x57.png') ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php asset('app\\favicon\\apple-icon-60x60.png') ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php asset('app\\favicon\\apple-icon-72x72.png') ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php asset('app\\favicon\\apple-icon-76x76.png') ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php asset('app\\favicon\\apple-icon-114x114.png') ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php asset('app\\favicon\\apple-icon-120x120.png') ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php asset('app\\favicon\\apple-icon-144x144.png') ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php asset('app\\favicon\\apple-icon-152x152.png') ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php asset('app\\favicon\\apple-icon-180x180.png') ?>">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php asset('app\\favicon\\android-icon-192x192.png') ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php asset('app\\favicon\\android-icon-32x32.png') ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php asset('app\\favicon\\android-icon-96x96.png') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php asset('app\\favicon\\favicon-16x16.png') ?>">
  <link rel="manifest" href="<?php asset('app\\favicon\\manifest.json') ?>">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php asset('app\\favicon\\ms-icon-144x144.png') ?>">
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
    <script src="<?php asset('app\\resources\\concept\\assets\\vendor\\jquery\\jquery-3.3.1.min.js') ?>"></script>
    <!-- bootstap bundle js -->
    <script src="<?php asset('app\\resources\\concept\\assets\\vendor\\bootstrap\\js\\bootstrap.bundle.js') ?>"></script>
    <script src="<?php asset('app\\resources\\sweetalert2\\sweetalert2.all.min.js') ?>"></script>
    <script src="<?php asset('app\\js\\sweetalert-app.js') ?>"></script>
        <!-- slimscroll js -->
        <script src="<?php asset('app\\resources\\concept\\assets\\vendor\\slimscroll\\jquery.slimscroll.js') ?>"></script>
        <!-- main js -->
        <script src="<?php asset('app\\resources\\concept\\assets\\libs\\js\\main-js.js') ?>"></script>
</body>

</html>