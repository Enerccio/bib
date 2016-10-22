<?php
  require_once 'init.php';
  require './libs/Smarty.class.php';

  $smarty = new Smarty;
  $smarty->display('index.tpl');
?>
