<?php
  require_once 'init.php';
  require_once 'entities/entities.php';

  print_r($_POST);

  $newb = new bib_book();
  $newb->set_authors($_POST["authors"]);
  $newb->set_name($_POST["title"]);
  $newb->set_publisher($_POST["publisher"]);
  $newb->set_year($_POST["year"]);
  $newb->set_volume($_POST["volume"]);
  $newb->set_series($_POST["series"]);
  $newb->set_edition($_POST["edition"]);
  $newb->set_month($_POST["month"]);
  $newb->set_key($_POST["key"]);
  $newb->set_note($_POST["note"]);

  $entityManager->persist($newb);
  $entityManager->flush();
?>
