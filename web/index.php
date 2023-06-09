<?php
session_start();
require_once "../vendor/autoload.php";
use app\controller\WebController;
$auth = new WebController(true);
?>

<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
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

  <title>Cover</title>

  <!-- Bootstrap core CSS -->
  <link href="_app/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="_app/cover.css" rel="stylesheet">
</head>

<body class="text-center">

  <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner">
        <h3 class="masthead-brand">Home</h3>
        <nav class="nav nav-masthead justify-content-center">
          <?php if ($auth->USER_NAME) { ?>
            <a class="nav-link active" href="../dashboard/"><?php echo $auth->USER_NAME; ?></a>
          <a class="nav-link active" href="../logout/">Cerrar Sesión</a>
            <?php }else{ ?>
              <a class="nav-link active" href="../login/">Login</a>
              <a class="nav-link active" href="../register/">Register</a>
          <?php } ?>
        </nav>
      </div>
    </header>

    <main role="main" class="inner cover">
      <h1 class="cover-heading">Bienvenido a la página de inicio.</h1>
      <p class="lead text-center">¡Bienvenido a mi sitio web! Este es mi portafolio digital
         donde podrás encontrar información sobre mi trabajo y proyectos. Espero que 
         disfrutes navegando y descubriendo todo lo que tengo para ofrecer. Si tienes 
         alguna pregunta o comentario, no dudes en contactarme. ¡Gracias por visitar mi sitio web!</p>
      <p class="lead">
        <a href="#" class="btn btn-lg btn-secondary" id="btn_lear_more">Learn more</a>
      </p>
    </main>

    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>Todos los derechos reservados - 2023 </p>
      </div>
    </footer>
  </div>


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="_app/bootstrap/js/js/vendor/jquery-slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="_app/bootstrap/js/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="_app/bootstrap/js/js/vendor/popper.min.js"></script>
  <script src="_app/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo SWEETALERT2_JS ?>"></script>
  <script src="<?php echo SWEETALERT2_APP ?>"></script>
  <script src="_app/app.js"></script>
</body>

</html>