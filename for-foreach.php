<?php

for ($contador = 0; $contador <= 10; $contador++):
    echo " 8 x $contador  = ".($contador * 8)."<br>";
endfor;

echo "<hr>";


$cores = array("Verde", "Amarelo", "Azul");

foreach ($cores as $indice => $valor): //Percorre o array e atribui na variável valor. 
    echo $indice."-".$valor."<br>";
endforeach;