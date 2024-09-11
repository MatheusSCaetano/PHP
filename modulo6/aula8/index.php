<?php 


$nome = 'Zé';

    switch($nome){
        case 'Matheus':
            echo 'Minha var é ', $nome;
            break;
        case 'Zé':
            echo 'é Zé';
            break;            
    }        

    for($i =0; $i <10 ; $i++){
        echo $i;
        if($i == 6){
            break;
        }
    }
?>