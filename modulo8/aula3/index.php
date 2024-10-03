<?php $pdo  = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

$id = 3;

$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");
$sql->execute(array($id));
?>