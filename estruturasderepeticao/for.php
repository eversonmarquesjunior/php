<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ESTRUTURA DE REPETIÇÃO FOR</title>
  </head>
  <body>

    <?php

    for ($i = 0; $i <= 50 ; $i += 5) {
      echo "$i ";
    }

    echo "<br>";
    echo "<br>";


    for ($i = 20; $i >= 0 ; $i--) {
      echo "$i ";
    }

    echo "<br>";
    echo "<br>";

    for ($i = 0; $i <= 1000 ; $i += 100) {
      echo "$i ";
    }

    echo "<br>";
    echo "<br>";

    for ($i = 40; $i >= 0 ; $i -= 2) {
      echo "$i ";
    }

     ?>

     <br><br>

     <form action="for-tabuada.php" method="get">

       Número: <select name="n">

         <?php

         for ($i = 1; $i <= 10 ; $i++) {
           echo "<option value='$i'>$i</option>";
         }

          ?>

       </select>

       <br><br>
       <input type="submit" value="Tabuada">


  </body>
</html>
