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

    <title>Concept | Recuperar</title>
</head>

<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        padding-right: 40px;
        background-image: url(../img/img.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>

<body>
    <!-- ============================================================== -->
    <!-- register page  -->
    <!-- ============================================================== -->
    <form class="splash-container">
        <div class="splash-container">
            <div class="card" style="width: 350px;">
                <div class="card-header text-center "><a href="../web/"><img class="logo-img mb-5" src="../img/images/logo.png" alt="logo"></a>
                    <span class="splash-description">
                        <h2 class="text-primary">Recuperar contraseña</h2>
                    </span>
                </div>
                <div class="card-body">
                    <form>
                        <p>No te preocupes, te enviaremos un correo electrónico para restablecer tu contraseña.</p>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="Ingrese su Correo" autocomplete="off">
                        </div>
                        <div class="form-group pt-1"><a class="btn btn-block btn-primary btn-xl" href="../index.html">Restablecer contraseña</a></div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <span>¿No estas registrado? <a href="../register/">Registrarme</a></span>
                </div>
            </div>
        </div>
    </form>

    <!-- ============================================================== -->
    <!-- end register page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="<?php echo JQUERY_MIN_JS ?>"></script>
    <!-- bootstap bundle js -->
    <script src="<?php echo BOOTSTRAP_BUNDLE_JS ?>"></script>
</body>

</html>