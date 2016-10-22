<?php
  require_once 'init.php';
  require_once 'entities/entities.php';

  function removeDuplicate($array, $bibentry) {
    return array_diff($array, [$bibentry]);
  }

  if (array_key_exists("add", $_GET)) {
      $id = $_GET["add"];
      $_SESSION["basket"] = removeDuplicate($_SESSION["basket"], $id);
      array_unshift($_SESSION["basket"], $id);
  }

  if (array_key_exists("del", $_GET)) {
      $id = $_GET["del"];
      $_SESSION["basket"] = removeDuplicate($_SESSION["basket"], $id);
  }

  session_write_close();
?>
