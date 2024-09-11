<?php


function mostrarNome($nome, $idade){
    echo '<h2>Nome é </h2>'.$nome;
    echo "<h2>A idade é $idade</h2>";
}

    mostrarNome('Mateus', 22);


    function calculadora($num1=10,$num2=5){
        echo $num1 + $num2;
    }
    calculadora(5,5);
?>
