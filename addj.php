<?php
  require_once 'init.php';
  require_once 'entities/entities.php';

  $newj = new bib_journal();
  $newj->set_authors($_POST["authors"]);
  $newj->set_name($_POST["aname"]);
  $newj->set_journal_name($_POST["jname"]);
  $newj->set_year($_POST["year"]);
  $newj->set_volume($_POST["volume"]);
  $newj->set_number($_POST["number"]);
  $newj->set_pages($_POST["pages"]);
  $newj->set_month($_POST["month"]);
  $newj->set_key($_POST["key"]);
  $newj->set_note($_POST["note"]);

  $entityManager->persist($newj);
  $entityManager->flush();
?>
