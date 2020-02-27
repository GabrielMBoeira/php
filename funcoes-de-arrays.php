<?php

$nomes = array("Gabriel", "Ana", "Gabriela", "Vinicius"); //MEU ARRAY

echo is_array($nomes); //é um array?

var_dump(is_array($nomes)); //Mostra elemento detalhado => true

if(is_array($nomes)):
    echo "É um array";
else:
    echo "Não é um array";  
endif;

echo "<br>";

echo in_array("Gabriel", $nomes); // se existir elemento no array .. retorna 1 - se náo: não retorna nada. 

echo "<br>";

if(in_array("Gabriel",$nomes)): // condição se Gabriel existe no array.
    echo "Existe no array";
else:
    echo "Não existe no array";
endif;

echo "<br>";

$familia = array("Pai" => "Gabriel", "Mãe" => "Ana", "Filha" => "Gabriela", "Filho" => "Vinicius");

$keys = array_keys($familia); //essa função pega os indices do array anterior.
print_r($keys);

echo "<br>";

$values = array_values($familia); //essa função pega os valores dos arrays.
print_r($values);

echo "<hr>";

$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb100");
$veiculos = array_merge($carros, $motos); //essa função une os dois arrays. 
print_r($veiculos);

echo "<br>";

$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
echo "<br>";
//echo array_pop($carros); //essa função retira o último elemento do array. //SE Colocar um echo no array_pop -> ele mostra o elemento excluido.
echo "<br>";
print_r($carros);

echo "<br>";

$car = array_shift($carros); // essa função retira o primeiro elemento do array. 
echo $car;
echo "<br>";
print_r($carros);

echo "<hr>";

$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "Manga", "Acerola", "Morango"); //essa funçao serve para adicionar elementos no array.
print_r($frutas);





