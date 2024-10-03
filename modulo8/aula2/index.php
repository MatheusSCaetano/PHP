<?php 


$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');


$id =3;

$sql = $pdo->prepare("UPDATE `clientes` SET nome='Matheusinho', sobrenome='Silva Caetano' WHERE id=$id" );

$sql->execute();
echo'Cliente atualizado com sucesso!';

?>