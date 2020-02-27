<?php

//ARRAY NUMÉRICOS
$carros = array("BMW", "Veloster", "Fusca");
//echo $carros; Não exibe
print_r($carros);
echo "<hr>";

echo $carros[1];
echo "<hr>";

$tipo = array(3=>"Homem", 4=>"Mulher"); //configurando indice
echo $tipo[3];
echo "<br>";

$tipo[] = "Crianca"; // adicionando no array
$tipo[10] = "Bebe"; // adicionando no array e configurando indice
print_r($tipo);
echo "<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[] = "Harley";
$motos[5] = "Suzuki";
print_r($motos);
echo "<hr>";

$clientes = ["Gabriel", "Pedro", "Ana"];
print_r($clientes);
echo "<hr>";

//COUNT => Contagem de elementos

echo count($clientes). "<br>";
$totalClientes = count($clientes);
echo $totalClientes;
echo '<hr>';

//Foreach => Contagem de elementos

foreach($carros as $valor) {
    echo $valor."<br>";
}
echo "<hr>";

//ARRAY ASSOCIATIVOS
$pessoa = array("nome" => "Gabriel", "idade" => 31, "altura" => 1.72);
print_r($pessoa);
echo "<br>";
echo $pessoa["nome"];

$pessoa["cidade"] = "Itabuna";
print_r($pessoa);
echo "<br>";

foreach($pessoa as $indice => $valor) {
    echo $indice." ".$valor."<br>";
}
echo "<br>";

//ARRAY MULTIDIMENSIONAL
$times = array("cariocas" => array("campeao" => "flamengo", "vice" => "vasco", "terceiro" => "botafogo"),
               "paulistas" => array("Palmeiras", "São Paulo", "Santos"),
               "baianos" => array("vitoria", "bahia", "itabuna"));

 
echo $times["paulistas"][1];

echo "<hr>";

foreach ($times["paulistas"] as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}