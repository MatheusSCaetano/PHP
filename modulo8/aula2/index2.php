<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

$id = 3;

$sql = $pdo->prepare("UPDATE `clientes` SET nome='Joao' , sobrenome='Caetano' WHERE id=$id ");

$sql->execute();

if($sql->execute()){
    echo 'Cadastro atualizado';
}

?>
