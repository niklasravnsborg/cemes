<?php 

$page = $_POST['editor1'];
$id = $_POST['id'];
$datei = fopen("../../pages/".$id.".html",'w');
fwrite($datei, $page);
fclose($datei);
echo($page);
echo($id);
header("Location: ../");
?>