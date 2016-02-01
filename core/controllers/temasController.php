<?php

if(isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id'] >= 1) {
  
} else {
  header('location: ../index.php?view=index');
}

?>
