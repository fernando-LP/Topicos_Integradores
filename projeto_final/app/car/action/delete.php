<?php


$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/projeto_final/';

require $dirProjeto . 'classes/db/MySQL.php';


$MySQL = new MySQL();
$DB = $MySQL->connectDB();

$id = $_GET['id'];
$MySQL->deleteByid($DB, 'carrs', $id);
header('Location: ../list.php');