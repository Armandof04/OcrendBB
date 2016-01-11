<?php
/*
  EL NÚCLEO DE LA APLICACIÓN!
*/

session_start();

#Constantes de conexión
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','ocrendbb');

#Constantes de la APP
define('HTML_DIR','html/');
define('APP_TITLE','OcrendBB');
define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' Ocrend Software.');
define('APP_URL','http://localhost/GitHub/OcrendBB/');

#Estructura
require('vendor/autoload.php');
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/Users.php');

$users = Users();

?>
