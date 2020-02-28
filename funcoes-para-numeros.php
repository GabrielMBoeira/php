<?php

//Funçoes para números

/*
    number_format => alterar formato do numero
    round => arredonda para baixo ou para cima
    ceil => arredonda somente para cima
    floor => arredonda somente para baixo
    rand
*/

$db = 1234.56;

$preco = number_format($db, 2, ",","."); //number_format($db, 2 decimais, "," separador decimal,"." separador de milhares)

echo "O valor do produto é: R$ $preco";

echo "<hr>";

echo round(3.6); //4 
echo"<br>";
echo ceil(8.1); //9
echo"<br>";
echo floor(8.9); //8