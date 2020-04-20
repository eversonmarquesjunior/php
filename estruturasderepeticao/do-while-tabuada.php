<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EXERCÍCIO TABUADA</title>
  </head>
  <body>

    <?php

    $numeros = isset($_GET["numeros"]) ? $_GET["numeros"] : 1;
    $c = 1;
    $m = 1;
    echo "Tabuada do $numeros <br><br>";

    do {
      $m = $numeros * $c;
      echo "$numeros x $c = $m <br>";
      $c++;
    } while ($c <= 10);

     ?>

  </body>
</html>
