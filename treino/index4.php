<?php 
$pdo = new PDO('mysql:host=localhost;dbname=treino','root','');

$id=2;
$sql = $pdo->prepare("UPDATE `usuario` SET nome='Bolsa', sobrenome='Naro'  WHERE $id= id");

if($sql->execute()){
    echo'Cadastro atualizado';
}

?>