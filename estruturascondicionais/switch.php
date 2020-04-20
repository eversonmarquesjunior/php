<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CONDIÇÕES DE MÚLTIPLOS CASOS (SWITCH)</title>

    <style>
      #a {
        text-decoration: none;
        color: #000000;
      }
    </style>

  </head>
  <body>


    <?php

    $numero = isset($_GET["numero"]) ? $_GET["numero"] : 0;
    $operacao = isset($_GET["operacao"]) ? $_GET["operacao"] : d;

    switch ($operacao) {
      case 'd' : $resultado = $numero * 2;
        break;
      case 'c' : $resultado = $numero * $numero * $numero; //BUGOU O SINAL DE ELEVADO
        break;
      case 'rq' : $resultado = sqrt($numero);
        break;
    }

    echo "O resultado da operação selecionada é: $resultado";

    echo "<br><br>";

    // SWITCH COM MÚLTIPLAS VARIÁVEIS

    $ds = isset($_GET["ds"]) ? $_GET["ds"] : 0;

    switch ($ds) {
      case 2 :
      case 3 :
      case 4 :
      case 5 :
      case 6 :
        echo "Dia de estudar";
        break;
      case 7:
      case 8:
        echo "Não precisa estudar";
        break;

      default:
        echo "Dia da semana não informado";

    }

     ?>

     <br><br>

     <button> <a id="a" href="switch.html">Voltar</a> </button>

  </body>
</html>
