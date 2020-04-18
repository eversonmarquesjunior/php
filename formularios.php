<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FORMULÁRIOS</title>

    <style>
      #a {
        text-decoration: none;
        color: #000000;
      }
    </style>

  </head>
  <body>

    <?php

    // $valor = $_GET["v"];
    // echo "A raiz quadrada do valor $valor é igual a " .sqrt($valor). "<br>";

    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "(não informado)";
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "(não informado)";
    $idade = date("Y") - $ano;
    echo "$nome nasceu em $ano, possui a idade de $idade anos e é do sexo $sexo";

     ?>
     <br><br>

     <button> <a id="a" href="formularios.html">Voltar</a> </button>

  </body>
</html>
