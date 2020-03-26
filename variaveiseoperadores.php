<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>VARIÁVEIS E OPERADORES ARITMÉTICOS PHP</title>
  </head>
  <body>

    <?php

    $nome = "Junio";
    $idade = 17;
    echo "$nome tem $idade anos de idade <br><br>";

    $n1 = 5; $n2 = 2; $n3 = 8; $n4 = 9; $n5 = 4.7;

    $soma = $n1 + $n3;
    echo "A soma entre $n1 e $n3 é igual a $soma <br><br>";
    $subtracao = $n3 - $n2;
    echo "A diferença entre $n3 e $n2 é igual a $subtracao <br><br>";
    $multiplicacao = $n2 * $n3;
    echo "A multiplicação entre $n2 e $n3 é igual a $multiplicacao <br><br>";
    $divisao = $n3 / $n2;
    echo "A divisão entre $n3 e $n2 é igual a $divisao <br><br>";
    $modulo = $n1 % $n2;
    echo "O módulo entre $n1 e $n2 é igual a $modulo <br><br>";

    echo "A valor de $n4 <sup>$n2</sup> é igual a ".pow($n4, $n2); //POTENCIAÇÃO
    echo "<br><br> A raiz quadrada de $n4 é igual a ".sqrt($n4); //RAIZ QUADRADA
    echo "<br><br> O valor arredondado de $n5 é igual a ".round($n5); //ARREDONDAMENTO
    echo "<br><br> A parte inteira de $n5 é igual a ".intval($n5); //PARTE INTETIRA DE UM NÚMERO
    echo "<br><br> Número formatado: ".number_format($n3, 2, ",", "."); //FORMATAÇÃO DE NÚMEROS

     ?>

  </body>
</html>
