<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>exercicios</title>

</head>

<body>

    <h1>Faça um programa que calcule o fatorial de um número inteiro fornecido pelo usuário. Ex.: 5!=5.4.3.2.1=120.</h1>


     

    <?php



$numero = 5;



$v = array_product(range($numero, 1));

print_r('O numero fatorial de '.$numero.' é '.$v);




$i = 5;

$calc = 1;

while ($i > 1){

    $calc *= $i;

    $i--;

}

echo '<br>';

echo 'O numero fatorial de '.$numero.' é '.$calc;














?>

</body>

</html>