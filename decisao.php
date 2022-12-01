<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisão</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <?php
$nome = "Julia";
$idade = 16;
$fumante = false;
echo "<p>IC do cliente: $nome <br>";
echo "idade do cliente $idade <br>";
echo "fumante: $fumante </p>";




echo 20*3;
echo "<br>";

 //OPERADORES RELACIONAIS 

 echo 20>10;
 echo "<br>";

  // ESTRUTURA DE DECISÃO

  // UMA PESSOA COM 75 ANOS NÃO PODE ENTRAR NA FESTA DA MELYSSA
  //  SE FOR FUMANTE NÃO PODE ENTRAR
  // idade não pode ser <10 anos

  // IF SIMPLES - TERÁ NO MAXIMO2 RESPOSTA DIFERENTES
  echo "<br>";
  $idade = 10;
  $fumante = false;
  // if = SE
  if($idade > 75 || $fumante == true || $idade <= 10){
    echo "PROIBIDO A ENTRADA ACIMA DE 75 ANOS NA FESTA, NAO PODE SER FUMANTE E NÃO ENTRA ABAIXO DE 10 ANOS";
  }else{
      echo "pode entrar, seja bem vindo";
  }


// UM ALUNO, SE TIRAR UMA NOTA ACIMA DE 8 ELE É APROVADO
// SE TIRAR UMA NOTA ENTRE 5 E 8 RECUPERAÇÃO
// SE ELE TIRAR ABAIXO DE 5 ESTARÁ REPROVADO

// IF COMPOSTO - TERÁ MAIS DE 2 RESPOSTAS DIFERENTES

$nota =10;
if($nota >= 8){
    echo "Aprovado(a)";
}else if ($nota >= 5){
    echo "Recuperação";
}else{
    echo "Reprovado(a)";
}


// vcs irão no Senac somente se:
// estiver uniformisado
// chegou no horário
// mensagem: Verdadeiro ------ PARABÉNS, VC PODE IR
//                FALSO ------ FERROU, VC VAI FICAR NA SALA DO VALDEIR 
  

  echo "<br><br>";
  $uniforme = true;
  $horario = true;
  echo ($uniforme == true && $horario == true) ? "PARABÉNS, VC PODE IR" : "FERROU, VC VAI FICAR NA SALA DO VALDEIR";

  // SUA COR FAVORITA PODE SER: VERMELHO, AZUL, VERDE 
  // SWITCH - ESCOLHER UMA DAS OPÇÕES

  $cor = "Preto";
  switch ($cor) {
     case 'azul':
        echo "<br>";
        echo "Sua cor favorita é $cor";
        break;
        case 'verde':
            echo "<br>";
            echo "Sua cor favorita é $cor";
            break;
        case 'vermelho':
            echo "<br>";
            echo "Sua cor favorita é $cor";
            break;
        default;
        echo "<br><br>";
        echo "Sua cor favorita não é azul, verde ou vermelho";
        break;
  }

//dias da semana ---- 1 domingo, 2 segunda, 3 terça, 4 quarta, 5 quinta, 6 sexta e 7 - sábado
echo "<br><br>";
$dia = 3;
switch ($dia) {
    case '1':
        echo "Domingo";
        break;
    case '2':
        echo "Segunda-Feira";
        break;
    case '3':
        echo "Terça-feira";
        break;  
    case '4':
        echo "Quarta-feira";
        break;  
    case '5':
        echo "Quinta-Feira";
        break;  
    case '6':
        echo "Sexta-Feira";
         break; 
    case '7':
        echo "Sábado";
        break; 
  }
// escolha um presente para o professor em seu aniversário:
// 1 - Um pote de Sorvete
// 2 - Mouse quebrado
// 3 - Celular da biqueira funcionando desbloqueado
// 4 - Fone usado
// 5 - mouse pad rasgado
// 6 - 1 kg feijão
// 7 - 1 kg feijão
echo "<br><br>";
$presente = 3;
switch ($dia) {
    case '1':
        echo "um pote de sorvete";
        break;
    case '2':
        echo "Mouse quebrado";
        break;
    case '3':
        echo "Celular da biqueira funcionando desbloqueado";
        break;  
    case '4':
        echo "Fone usado";
        break;  
    case '5':
        echo "mouse pad rasgado";
        break;  
    case '6':
        echo "1 kg feijão";
         break; 
    case '7':
        echo "1 kg feijão";
        break; 
  }




?>
</body>
</html>