<?php
  session_start();
  if (!array_key_exists("basket", $_SESSION)) {
    $_SESSION["basket"] = array();
  }

  require_once "vendor/autoload.php";

  use Doctrine\ORM\Tools\Setup;
  use Doctrine\ORM\EntityManager;

  $dbParams = array(
      'driver'   => 'pdo_mysql',
      'user'     => 'root',
      'password' => 'heslo',
      'dbname'   => 'bib',
  );

  $paths = array("./entities");
  $isDevMode = true;
  $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
  $entityManager = EntityManager::create($dbParams, $config);

  require_once 'entities/entities.php';
?>
