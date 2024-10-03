<?php 


$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

if(isset($_POST['enviar'])){


$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$momento_registro = date('Y-m-d H:i:s');



$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?,?,?)");

$sql->execute(array($nome,$sobrenome,$momento_registro));

echo 'Cliente inserido com sucesso!';

}

?>

<html>

<body>

<form method="POST" action="">
    <input type="text" name="nome" placeholder="Digite o nome" required><!--required dá a obrgatoriedade de preenchimento -->
    <input type="text" name="sobrenome" placeholder="Digite o sobrenome" required>

    <input type="submit" value="Enviar" name="enviar">

</form>

</body>

</html>