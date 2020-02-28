<?php
 
 //Operadores lógicos

 //e (&& ou and)
 //ou (|| ou or)
 //ou exclusivo (xor) -> ou é um ou é outro não pode ser os dois.
 //negação (!)


$idade = 25;
$nome = "Gabriel";

if(($idade == 25) && ($nome == "Gabriel")): // Comparação pode ser && ou and.
    echo "É verdadeiro";
else:
    echo "É falso";
endif;

echo "<hr>";

if(($idade == 25) xor ($nome == "Gabriel")): // ou é um ou é outro não pode ser os dois.
    echo "É verdadeiro";
else:
    echo "É falso";
endif;

echo "<hr>";

if(!($idade == 25) && ($nome == "Gabriel")): // ou é um ou é outro não pode ser os dois.
    echo "É verdadeiro";
else:
    echo "É falso";
endif;