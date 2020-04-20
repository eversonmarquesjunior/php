<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ESTRUTURA DE REPETIÇÃO FOR</title>

    <style>
      #a {
        text-decoration: none;
        color: #000000;
      }
    </style>

  </head>
  <body>

    <?php

    $n = $_GET["n"] ? $_GET["n"] : 1;
    $m = 1;
    echo "Tabuada do $n";
    echo "<br><br>";

    for ($i = 1; $i <= 10 ; $i ++) {
      $m = $n * $i;
      echo "$n x  $i = $m <br>";
    }

     ?>

     <br><br>

     <button> <a id="a" href="for.php">Voltar</a> </button>


  </body>
</html>
