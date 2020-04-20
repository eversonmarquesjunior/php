<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ESTRUTURA DE REPETIÇÃO DO WHILE</title>

    <style>
      #a {
        text-decoration: none;
        color: #000000;
      }
    </style>


  </head>
  <body>

    <?php

    /*$c = 0;

    do {
      echo " $c";
      $c += 2;
    } while ($c <= 20);           //REPITA - TESTE LÓGICO NO FINAL
*/

  /*$v = isset($_GET["v"]) ? $_GET["v"] : 1;
  $c = $v;
  $fatorial = 1;
  do {
    $fatorial = $fatorial * $c;
    $c --;
  } while ($c >= 1);

  echo "$v ! = $fatorial";*/

     ?>
     <br><br>

     <!-- DO WHILE TABUADA -->

     Número:
     <form method="get" action="do-while-tabuada.php">

     <select name="numeros">

       <?php
       $c = 1;
       while ($c <= 10) {
         echo "<option value= '$c'> $c </option>";
         $c++;
       }
       ?>
       
     </select>

     <input type="submit" value="Tabuada">
   </form>

     <br><br>

     <button> <a id="a" href="do-while.html">Voltar</a> </button>

  </body>
</html>
