<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ESTRUTURA DE REPETIÇÃO WHILE</title>
  </head>
  <body>

    <?php

    /*$c = 1;

    while ($c <= 10) {      //ENQUANTO - TESTE LÓGICO NO INÍCIO
      echo " $c";
      $c ++;
    }*/

     ?>

     <form action="while.php" method="get">

       <?php
       $c = 1;

       while ($c <= 5) {
              echo "Valor $c: <input type='number' name='$c' value=0 max=100 min=0><br>";
              $c ++;
       }

       ?>
       <input type="submit" value="Confirmar">

     </form>


  </body>
</html>
