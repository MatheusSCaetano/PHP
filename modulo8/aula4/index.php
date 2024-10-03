<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

// $sql = $pdo->prepare("SELECT * FROM  posts WHERE categoria_id = 2 ");
// $sql->execute();

// $info = $sql->fetchAll(); //todas as informaçções do banco de dados

// // echo'<pre>';
// // print_r($info);
// // echo'<pre>';

// //Trazedno as informações com foreach atraves da variavel $info que está com os dados armazenados.
// foreach($info as $key => $value){

//     echo'Titulo: '.$value['titulo'];
//     echo'<br>';
//     echo'Conteudo: '.$value['conteudo'];
//     echo'<hr>';
// }



//PUXANDO CATEGORIA E CONTEUDO DEPOIS:
// $sql = $pdo->prepare("SELECT * FROM categorias ");
// $sql->execute();
// $info = $sql->fetchAll();

// foreach ($info as $key => $value) {
//     $categoria_id = $value['id']; //categoria_id recebe o id da tabela 'categorias' que está alocada na variavel info

//     echo 'Exibindo posts de: ' . $value['nome'];

//     echo '<br>';

//     $sql = $pdo->prepare("SELECT * FROM posts WHERE $categoria_id = categoria_id"); //SQL AGORA ESTA COM O CONTEUDO DA TABELA POSTS

//     $sql->execute();

//     $info_posts = $sql->fetchAll(); //info_posts recebe o conteudo da tabela POSTS

//     foreach ($info_posts as $key => $value) { //EXTRAINDO O CONTEUDO DA TABELA POSTS COM FOREACH E APRESENTANDO NA TELA
//         echo 'Titulo: ' . $value['titulo'];
//         echo '<br>';
//         echo 'Conteudo: ' . $value['conteudo'];
//         echo '<hr>';
//     }

// }



//FAZENDO UNINDO AS TABLES:

$sql = $pdo->prepare("SELECT `posts`.*,`categorias`.*, `posts`.`id` AS `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id` "); //unindo as tables posts e categorias, porem unindo dados apenas quando a categoria_id da table (posts) for igual a id da tabela (categorias) para que os dados venham em conformidade e não una dados de uma categoria a posts de outra categoria;
$sql->execute();
$info2 = $sql->fetchAll(PDO::FETCH_ASSOC);


    echo'<pre>';
    print_r($info2);
    echo'<pre>';




?>