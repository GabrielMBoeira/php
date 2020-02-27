<?php

$numero = 10;

if ($numero == 10):
    echo "É igual a 10";
elseif($numero <=9):
    echo "É menor ou igual a 9";
else:
    echo "É diferente de 10";
endif;

echo "<hr>";

$media = 7;

echo ($media >= 7) ? "Aprovado" : "Reprovado"; //Condição - operador ternário.

echo "<hr>";

//SWITCH CASE

$cor = "azul";

switch ($cor) {
    case 'vermelho':
        echo "Sua cor preferida é vermelho";
        break;
    case 'verde':
        echo "Sua cor preferida é verde";
        break;
    case 'azul':
        echo "Sua cor preferida é azul";
        break;
    default:
        echo "Sua cor preferida não é vermelho, verde ou azul";
}