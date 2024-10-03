<?php 


class Pessoa{

    private $nome = 'zé';
    private $idade = 15;
    private $peso = 70;

private function comer(){
    echo 'comendo';
}

private function crescer(){
    $this->comer(); // para chamar o metodo dentro do objeto
}

//instanciar

}

$pessoa = new Pessoa; 

// por ser private não vai: $pessoa->comer();





?>