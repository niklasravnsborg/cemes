<?php 

$page = $_GET['page'];
$id = $_GET['id'];
$datei = fopen("../../pages/".$id.".html",'w');
fwrite($datei, $page);
fclose($datei);
header("Location: ../");
?>