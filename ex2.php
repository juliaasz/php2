<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça um Programa que peça dois números e imprima o maior deles.</title>
</head>
<body>
<h1>Faça um Programa que leia três números e mostre o maior deles.</h1>
<?php


$n1 = 200;
$n2 = 300;
$n3 = 100;
if($n1 > $n2 && $n1 > $n3){
   echo 'o primeiro valor é o maior: '.$n1;
}elseif($n2 > $n1 && $n2 > $n3){
    echo 'o segundo valor é o maior: '.$n2;
}else{
     echo 'o terceiro valor é o maior: '.$n3;
}




?>