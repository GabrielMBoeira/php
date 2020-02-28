<?php

//Funções para Strings

/*
    strtoupper => converte string para maiúscula
    strtolower => converte string para minúscula
    substr => divide a string 
    str_pad => adiciona caracteres e comprimento
    str_repeat => repete a string quantas vezes for especificada
    strlen => retorna o comprimento do texto
    str_replace => serve para substituir uma palavra em um texto
    strpos => retorna uma posição de uma palavra em um texto
*/


$nome = "gabriel machado boeira";
$novoNome = strtoupper($nome);
echo $novoNome;

echo "<br>";

$pessoa = "ANA CLARA COUTO";
$novaPessoa = strtolower($pessoa);
echo $novaPessoa;

echo "<hr>";

$mensagem = "Olá mundo";
echo substr($mensagem, 4, 4); // substr($mensagem, 4 indice, 4 cumprimento);

echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_LEFT); // str_pad($objeto VARIAVEL, 10 NUM.CARACTERES, "*" TIPO, STR_PAD_LEFT ADICIONAR NA ESQUERDA -> STR_PAD_BOTH ADICIONA NO MEIO)
echo $novoObjeto; // ex: *****mouse

echo "<hr>";

$string = str_repeat("Sucesso ", 5);
echo $string;

echo "<hr>";

$mensagem = "Olá mundo";
echo strlen($mensagem); //10

echo "<hr>";

$texto = "A seleção Argentina será campeã da copa do mundo de 2018";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;

echo "<hr>";

echo strpos($texto, "copa");



