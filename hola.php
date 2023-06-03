<?php
require_once "vendor/autoload.php";
echo cerosIzquierda(1,7);
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
//echo $_SERVER['DOCUMENT_ROOT'];
echo BOOTSTRAP_CSS;
echo "<br>";
echo url_origin($_SERVER);
?>