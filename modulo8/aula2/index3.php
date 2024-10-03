<?php 
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

$id = 4;

$sql = $pdo->prepare("UPDATE `clientes` SET nome='Jair',sobrenome='José da Silva' WHERE id = $id");
//$sql = $pdo->prepare("UPDATE `clientes` SET nome='Jair',sobrenome='José da Silva' WHERE nome = $nome AND sobrenome = $sobrenome OR sobrenome=$segundo_sobrenome");

if($sql->execute()){
    echo 'Cliente atualizado com sucesso!';
}

?>