<?php 
$pdo = new PDO('mysql:host=localhost;dbname=treino','root','');
if($_POST['enviar']){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $momento_cadastro = date('Y-m-d H:i:s');

    $sql = $pdo->prepare("INSERT INTO `usuario` VALUE(null,?,?,?)");

    $sql->execute(array($nome,$sobrenome,$momento_cadastro));
}

?>

<html>
<body>
    <form method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome:">
        <input type="text" name="sobrenome" placeholder="Digite seu sobrenome:">
        <input type="submit" name="enviar" value="Enviar">
   
</body>

</html>