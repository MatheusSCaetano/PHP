<?php 

$pdo = new PDO('mysql:host=localhost,dbname=modulo_8','root','');

if($_POST['enviar']){

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$data_cadastro = date('Y-m-d H:');

$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?) ");

$sql->execute(array($nome,$sobrenome,$data_cadastro));

echo'Cadastro realizado com sucesso';

}


?>