<?php

/*
MANIPULAÇÃO DE ARQUIVOS

fopen() = abre arquivo
fclose() = fecha arquivo
fwrite() = escreve no arquivo 
!feof() = não for o final do arquivo
fgets() = pegar o conteudo de cada linha
filesize() = pegar o tamanho do arquivo


ABRINDO ARQUIVO E ESCREVENDO NELE
$arquivo = 'arquivo.txt';
$conteudo = "Conteudo teste \n";

$arquivoAberto = fopen($arquivo, 'a');          //  => modo escrita

fwrite($arquivoAberto, $conteudo);

fclose($arquivoAberto);
*/


//LENDO ARQUIVO 
$arquivo = 'arquivo.txt';

$tamanhoArquivo = filesize($arquivo);

$arquivoAberto = fopen($arquivo, 'r');           // => modo leitura


while(!feof($arquivoAberto)):
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha."<br>";
endwhile;





/*
MODES

‘r’ Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.

‘r+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.

‘w’ Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

‘w+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

‘a’ Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

‘a+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

‘x’ Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.

‘x+’ Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.
*/