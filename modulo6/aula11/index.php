<?php 




$nome = @$_GET['nome'];
$email = @$_GET['email'];
echo $nome;
echo $email;






?>
<html>
    <body>
    <form>
        <input type="text" name="nome">
        <input type="text" name="email">
        <input type="submit" name="enviar" value="Enviar">


    </form>

    </body>
</html>