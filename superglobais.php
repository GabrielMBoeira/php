<?php

//Superglobais
/*
    $GLOBALS ->É UM ARRAY = permite acesso global das variaveis dentro do escopo
    $_SERVER ->É UM ARRAY = buscar informação do arquivo 'PHP_SELF', nome do servidor 'SERVER_NAME'..etc
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/


//----------$GLOBALS------------
$x = 10;
$y = 15;

function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y']; //GLOBALS é um array =>  essa variavel perimite acesso de uma variavel que está global dentro do escopo local
}
soma();

echo "<hr>";


//----------$_SERVER------------
echo $_SERVER['PHP_SELF']."<br>"; //nome do arquivo
echo $_SERVER['SERVER_NAME']."<br>"; //nome do servidor
echo $_SERVER['SCRIPT_FILENAME']."<br>"; //caminho absoluto do script em execução
echo $_SERVER['DOCUMENT_ROOT']."<br>"; // diretorio raiz do script em execução
echo $_SERVER['SERVER_PORT']."<br>"; //retorna a porta do servidor web
echo $_SERVER['REMOTE_ADDR']."<br>"; //retorno o endereçõ ip do usuário que está visualizando a pagina






