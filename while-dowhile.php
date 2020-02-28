<?php

$contador = 0;

while ($contador <= 10):
    echo "Contador é $contador <br>";
    $contador++;
endwhile;

echo "<hr>";

$contador = 0;

do {
    echo "Contador é $contador <br>";
    $contador ++;
} while ($contador <= 10);