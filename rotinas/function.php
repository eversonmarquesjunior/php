<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FUNÇÃO EM PHP</title>
  </head>
  <body>

    <?php

    /*function divisao ($a, $b){   //PROCEDIMENTO NÃO RETONRA VALOR
      $d = $a / $b;
      echo "O resultado da divisão é: $d";
    }

    divisao (8, 2);*/

    echo "<br>";

    /*function soma ($a, $b){
      $s = $a + $b;;
      return $s;                  //RETORNA VALOR
    }

    $x = 5;
    $y = 1;
    $r = soma($x, $y);
    echo "A soma entre $x e $y é igual: $r";*/

    echo "<br>";

    /*function soma(){            //FUNÇÃO COM MÚLTIPLOS PARÂMETROS
      $p = func_get_args();     //ARGUMENTOS DENTRO DE UM VETOR
      $total = func_num_args(); //TOTAL DE ARGUMENTOS PASSADOS
      $s = 0;
      for ($i = 0; $i < $total; $i++) {
        $s = $s + $p[$i];
      }
      return $s;
    }

    $r = soma(1, 5, 6, 9, 2);
    echo "Soma dos valores igual a: $r";*/

    include "include.php";
    raiz(9);
    echo "<br>";
    nome("Junior");
    echo "<br>";
    media(6, 10, 5);

     ?>

  </body>
</html>
