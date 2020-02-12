<?php

$nome = "Gabriel Boeira";

$a =1;
$b = 3;
$c = 6;

function exibeNome() {
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";
///////////////////////////

function exibeCidade() {
    //Escopo local

    //definindo como variavel global
    global $cidade;
    $cidade = "Rio de Janeiro";
}
exibeCidade();
echo $cidade;
echo "<hr>";
///////////////////////////

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();


