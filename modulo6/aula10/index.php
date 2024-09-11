<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php
    
    if (isset($_GET['enviar'])) {
        $nome = @$_GET['name'];
        $email = @$_GET['email'];

        echo $nome;
        echo '<hr>';
        echo $email;
    }


    if (isset($_POST['enviar'])) {
        $nome = @$_POST['name'];
        $email = @$_POST['email'];

        echo $nome;
        echo '<hr>';
        echo $email;
    }






    ?>

    <form class="formulario-cadastro">
        <input type="text" name="name" />
        <input type="text" name="email" />
        <input type="submit" name="enviar" value="Enviar">


    </form>
</body>

</html>