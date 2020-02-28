<?php

function exibirNome($nome) {
    echo "Meu nome é $nome";
}

exibirNome("Gabriel Boeira");

echo "<hr>";

function calcularMedia($nome, $nota1, $nota2, $nota3, $nota4) {
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if($media >= 7) {
        echo "Aluno $nome aprovado <br>";
    } else {
        echo "Aluno $nome reprovado <br>";
    }
    
}

calcularMedia("Gabriel", 6, 7, 7, 10);