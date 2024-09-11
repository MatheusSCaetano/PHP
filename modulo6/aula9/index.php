<?php 

/*
$arr1 = array('Matheus', 'José');
$arr2 = array(23,43);

$result = array_merge($arr1,$arr2);

$tamanho = count($result);

print_r( $result);
echo $tamanho;
*/

//array intersect key: Mostra apensa valores em que houber intersecção

$arr3 = array("chave1"=> "valor1", "chave2"=> "valor2");
$arr4 = array("chave1"=> "valor1", "chave4"=> "valor2");


print_r(array_intersect_key($arr3,$arr4))


?>