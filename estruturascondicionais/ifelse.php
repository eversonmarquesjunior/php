<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ESTRUTURA CONDICIONAL IF ELSE</title>

    <style>
      #a {
        text-decoration: none;
        color: #000000;
      }
    </style>

  </head>
  <body>

    <?php

    // $ano = isset($_GET["ano"]) ? $_GET["ano"] : "[ano não informado]";
    // $idade = date("Y") - $ano;

  /*if ($idade >= 18){
      $votar = "é obrigado a votar";
      $dirigir = "já pode dirigir";      //ENTÃO
    }
    else{
      $votar = "não é obrigado a votar";
      $dirigir = "não pode dirigir";      //SENÃO
    }

    echo "Você nasceu em $ano e tem a idade de $idade anos <br>";
    echo "Você $votar e $dirigir";
*/

  //CONDIÇÕES ANINHADAS

    /*if ($idade < 16){
      $tipoVoto = "não vota";
    }
    elseif(($idade >= 16 && $idade < 18) || ($idade > 65)){
        $tipoVoto = "tem a opção de votar ou não";
    }
    else{
        $tipoVoto = "vota";
    }


      echo "Você nasceu em $ano e tem a idade de $idade anos <br>";
      echo "Você $tipoVoto";
*/

  //EXERCÍCIO

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $media = ($n1 + $n2) / 2;

    if($media < 5){
      $situacao = "REPROVADO";
    }
    elseif ($media >= 5 && $media < 7){
      $situacao = "RECUPERAÇÃO";
    }
    else {
      $situacao = "APROVADO";
    }

    echo "O aluno possui notas " .number_format($n1, 1, ".", "."). " e ".number_format($n2, 1, ".", "."). " com média " .number_format($media, 1, ".", ".");
    echo "<br>";
    echo "Situação: $situacao";

     ?>

     <br><br>

     <button> <a id="a" href="ifelse.html">Voltar</a> </button>

  </body>
</html>
