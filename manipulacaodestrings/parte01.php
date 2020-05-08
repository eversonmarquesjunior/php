<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PARTE 01</title>
  </head>
  <body>

    <?php

    $produto = "arroz";
    $preco = 15.0;

    echo "O preço do $produto é R$ $preco";

    echo "<br>";

    printf ("O preço do %s é de R$ %.2f", $produto, $preco);      //MOSTRA A STRING JÁ FORMATADA

    echo "<br>";
    echo "<br>";

    $v[0] = 5;
    $v[1] = 8;
    $v[2] = 3;

    print_r($v);      //TESTE DE VETORES
    echo "<br>";

    $a = array (4, 7, 8, 9, 12);
    print_r($a);

    echo "<br>";
    echo "<br>";

    $texto = "Já sabemos que basquete é uma das paixões de Luka Doncic, e por isso ele se tornou tão bom no esporte que pratica. Em seu tempo livre, entretanto,
      o prodígio não é muito diferente de outros garotos de sua geração.";
    $r = wordwrap($texto, 60, "<br>\n", false);      //QUEBRA LINHAS DE TEXTOS EXTENSOS
    echo $r;

    echo "<br>";
    echo "<br>";

    $txt = "Juninho Play";
    $c = strlen($txt);      //CALCULA O TAMANHO DE UMA STRING
    echo "O tamanho da string $txt é de $c caracteres";

    echo "<br>";
    echo "<br>";

    $frase = "Eu quero te possuir quero você todinha para mim";
    $cont = str_word_count($frase, 0);       //CALCULA A QUANTIDADE DE PALAVRAS EM UMA STRING
    echo $cont;

    echo "<br>";
    echo "<br>";



    ?>


  </body>
</html>
