<?php 

$pdo = new PDO('mysql:host=localhost;dbname=db_teste','root','');


$sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY NOME ASC "); //ORDER PARA ORDENAR POR ID, CARGO OU NOME (ALFABÉTICO)
$sql->fetchAll();
$sql->execute();
foreach($sql as $key => $value){
    echo'ID: '.$value['id'];
    echo'<br \>';
    echo'Nome: '.$value['nome'];
    echo'<br \>';
    echo'Cargo: '.$value['cargo'];
    echo'<hr>';

}
?>