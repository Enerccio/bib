<?php
  require_once 'init.php';
  require_once 'entities/entities.php';

  foreach ($_SESSION["basket"] as $key => $value) {
    $entityManager->find('bib_entry', $value)->to_bib_tex();
    echo PHP_EOL;
  }
?>
