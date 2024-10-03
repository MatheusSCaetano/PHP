<?php 

$pdo = new PDO('mysql:host=localhost;dbname=db_teste','root','');
/*
$sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY nome ASC");
$sql->execute();
$info = $sql->fetchAll();

foreach ($info as $key => $value) {
    echo'id: '.$value['id'];
    echo'<br>';        
    echo'nome: '.$value['nome'];
    echo'<br>';        
    echo'cargo: '.$value['cargo'];
    echo'<hr>';        
}
*/

$sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id` ");
$sql->execute();

$info2 = $sql->fetchAll();

foreach ($info2 as $key => $value) {
    echo'ID: '.$value['id'];
    echo'<br>';
    echo'nome: '.$value['nome'];
    echo'<br>';

    if(empty($value['nome_cargo'])){
    echo'cargo: Não definido';
    }else{echo'cargo: '.$value['nome_cargo'];}
    echo'<hr>';
}

?>