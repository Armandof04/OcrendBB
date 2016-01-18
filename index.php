<?php

/*
  1- En class.Categorias.php borrar los temas también, asociados a el foro que se borra cuando se borra una categoría.
*/

require('core/core.php');

if(isset($_GET['view'])) {
  if(file_exists('core/controllers/' . strtolower($_GET['view']) . 'Controller.php')) {
    include('core/controllers/' . strtolower($_GET['view']) . 'Controller.php');
  } else {
    include('core/controllers/errorController.php');
  }
} else {
  include('core/controllers/indexController.php');
}

?>
