<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>OPERADORES DE ATRIBUIÇÃO</title>
  </head>
  <body>

    <?php

    $a = 3; $b = 7; $c = 6; $d = 10; $e = 8; $f = "Junio";

    echo "Atribuição soma: ".($a = $a += 2);
    echo "<br><br> Atribuição subtração: ".($b = $b -= 7);
    echo "<br><br> Atribuição divisão: ".($c = $c /= 3);
    echo "<br><br> Atribuição multiplicação: ".($d = $d *= 5);
    echo "<br><br> Atribuição módulo: ".($e = $e %= 3);
    echo "<br><br> Atribuição concatenação: ".($f = $f .= " Marques");
 
    $p = 20;
    $p -= ( $p * 10/100 ); //EXEMPLO DESCONTO
    echo "<br><br> Produto com desconto: R$".number_format($p, 2, ",", ".");

    // OPERADORES DE INCREMENTO E DECREMENTO
    // PRÉ: ++$a, --$a
    // PRÓ: $a++, $a--

    $anoatual = 2020;
    echo "<br><br> O ano atual é $anoatual e o passado foi o ano de " .--$anoatual; //EXEMPLO OPERADOR DE DECREMENTO

    //VARIÁVEIS REFERENCIADAS

    $x = 5;
    $y = &$x; //A VARIÁVEL $y ESTÁ LIGADA A VARIAVÉL $x
    $y *= 6;
    echo "<br><br> $x";
    echo "<br><br> $y";


     ?>

  </body>
</html>
