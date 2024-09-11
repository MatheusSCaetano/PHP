<?php 

$conteudo = "Em linguística, a noção de texto é ampla e ainda aberta a uma 
definição mais precisa. Grosso modo, pode ser entendido como manifestação 
linguística das ideias de um autor, que serão interpretadas pelo leitor de 
acordo com seus conhecimentos linguísticos e culturais.
Em linguística, a noção de texto é ampla e ainda aberta a uma definição mais 
precisa. Grosso modo, pode ser entendido como manifestação linguística das 
ideias de um autor, que serão interpretadas pelo leitor de acordo com seus 
conhecimentos linguísticos e culturais.";

//recortar string
echo substr($conteudo,0, 250);

//explode
$nome ='Matheus Silva Caetano';

//transformando em uum array com um separador
$nomes= explode(' ', $nome);
print_r($nomes);

//implode
$nomes = implode(' ',$nomes);
echo $nomes;


?>