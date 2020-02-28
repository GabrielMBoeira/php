<?php


//Operadores de comparação

// == igual
// != não é igual
// === estritamente igual
// !== estritamente diferente
// <> diferente
// < menor
// > maior
// <= menos igual
// >= maior igual
// <=> space ship:  Retorno o lado 1 ou -1  .. se for igual retorna 0


echo var_dump(20 <=> 30); // lado esquerdo menor => -1 
echo "<br>";
echo var_dump(20 <=> 15); // lado esquerdo maior => +1
echo "<br>";
echo var_dump(20 <=> 20); // se for igual ambos os lado => 0
echo "<br>";


if(10 == "10"):
    echo "Positivo";
else:
    echo "Negativo";
endif;