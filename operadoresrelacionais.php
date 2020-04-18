<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>OPERADORES RELACIONAIS</title>
  </head>
  <body>

    <?php

  /* $a <> $b ou $a != $b -- DIFERENTE
     $a == $b -- IGUAL (POSSUEM O MESMO VALOR INTERNO)
     $a === $b -- IDÊNTICO (IGUAL E DO MESMO TIPO)
  */

    // $a = 9; $b = 7;
    // $maior = $a > $b ? $a : $b; //OPERADOR TERNÁRIO
    // echo "O valor maior é: $maior";

    echo "<br>";

    /*EXEMPLO 1

     $n1 = $_GET["a"]; //RECEBE VALOR DA URL
     $n2 = $_GET["b"];
     $operacao = $_GET["op"];

     $resultado = ($operacao == "s") ? $n1 + $n2 : $n1 * $n2;
     echo "Os valores passados pela URL foram $n1 e $n2 <br>";
     echo "O resultado da operação é: $resultado <br>";

    EXEMPLO 2

     $nota1 = $_GET["n1"];
     $nota2 = $_GET["n2"];
     $m = ($nota1 + $nota2) / 2;

     $aprovacao = ($m > 6) ? "O aluno está aprovado" : "O aluno está reprovado";
     echo "A média do aluno é $m <br>";
     echo $aprovacao;
     */

    //OPERADOR LÓGICO EXEMPLO

    $ano = $_GET["an"];
    $idade = 2020 - $ano;
    $voto = ($idade >= 18 && $idade < 65)? "Você é obrigado a votar" : "Você não é obrigado a votar";
    echo "Quem nasceu em $ano tem idade de $idade anos <br>";
    echo $voto;


     ?>

  </body>
</html>
