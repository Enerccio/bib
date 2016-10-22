<?php
  require_once 'init.php';
  require './libs/Smarty.class.php';
  $smarty = new Smarty;

  $page = $_GET["page"];
  $query = $entityManager->createQuery("SELECT entry FROM bib_entry entry");
  $query->setMaxResults(5);
  $query->setFirstResult($page*5);
  $data = $query->getResult();

  $numpages = ceil(floatval($entityManager->createQuery("SELECT count(entry) FROM bib_entry entry")->getSingleScalarResult()) / 5.0);

  $basket = array();
  foreach ($_SESSION["basket"] as $key => $value) {
    $basket[$key] = $entityManager->find('bib_entry', $value);
  }

  $smarty->assign('bibentries', $data);
  $smarty->assign('bibmaxpage', $numpages);
  $smarty->assign('bibcpage', $page);
  $smarty->assign('basket', $basket);
  $smarty->display('display.tpl');
?>
