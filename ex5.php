<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>exercicios</title>

</head>

<body>

    <h1>Desenvolva um gerador de tabuada, capaz de gerar a tabuada de qualquer número inteiro entre 1 a 10.

        O usuário deve informar de qual numero ele deseja ver a tabuada. A saída deve ser conforme o exemplo abaixo:</h1>



    <?php

echo "<br><br>";
 $valor = 10;
 $contador = 1;
 while($contador <=10){
    $total = $valor * $contador;
    echo "$valor X $contador = $total";
    $contador = $contador + 1;
    echo "<br>";
 }



?>

