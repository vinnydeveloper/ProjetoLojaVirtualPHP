<?php
include "funcoes.php";
$usuario = logarUsuario("Vinicius Oliveira", 1);
//$usuario = "";

$produtos = [
    "produto1" => ["nome"=>"Curso Fullstack","descricao"=>"O curso fullstack ensina programação","preco"=> 1200,"img"=>"img/produto1.jpg"],
    "produto2" => ["nome"=>"Curso Mobile android","descricao"=>"O curso te ensina a criar apps","preco"=>1400,"img"=>"img/produto2.jpg"],
    "produto3" => ["nome"=>"Curso Marketing Digital","descricao"=>"O curso te ensina a criar apps","preco"=>1100, "img" => "img/produto3.png"],
    "produto4" => ["nome"=>"Curso Mobile android","descricao"=>"O curso te ensina a criar apps","preco"=>1400, "img"=>"img/produto2.jpg"]
];

$produtos = addProduto("Curso de UX","Curso incrivel", 2000,'img/produto3.png',$produtos);
$produtos = addProduto("Curso de Data Analytics","Curso incrivel", 3000,'img/produto3.png',$produtos);

$categorias = ["Cursos", "Tutoriais", "Artigos", "Forum", "Códigos"];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Virtual</title>
    <!-- -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>