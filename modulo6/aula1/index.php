<?php 

    $arr = array('Matheus', 'Jose','Ze' );

    foreach($arr as $key => $value){
        echo $key, ' - ', $value;
        echo '<hr>';
    }


    $total = count($arr);

    for($i=0; $i < $total; $i++){
        echo $arr[$i];
    }


?>