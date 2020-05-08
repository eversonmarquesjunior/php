<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PARTE O1</title>
  </head>
  <body>


    <?php

    $vetor = array(4, 2, 7, 5);
    var_dump($vetor);

    echo "<br>";
    echo "<br>";

    foreach ($vetor as $valor) {
      echo "$valor ";
    }

    echo "<br>";
    echo "<br>";

    $a = array(5=>10, 2=>5, 10=>50);      //INDICES PERSONALIZADOS
    var_dump($a);
    unset($a[2]);

    echo "<br>";
    echo "<br>";

    $v = array("nome" => "Juninho", "idade" => 17, "peso" => 76.5);        //INDICES ASSOCIATIVOS
    var_dump($v);

    echo "<br>";

    foreach ($v as $chave => $valor) {
      echo "$chave: $valor <br>";
    }

    echo "<br>";
    echo "<br>";

    $matriz = array (         //ARRAYS MULTIDIMENCIONAIS
      array (2, 4),
      array (5, 9),
      array (1, 7)
    );

    var_dump($matriz);
     ?>



  </body>
</html>
