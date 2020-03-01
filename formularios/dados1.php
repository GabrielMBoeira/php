<?php

//POST -> Dados retornam no corpo da requisição
//GET -> Dados retornam via URL 

//(Para verificação somente alterar métodos abaixo $_POST para $_GET -> alterar também método do formulário.)

$nome = $_POST['nome'];
$email = $_POST['email'];

echo "Seu nome é $nome, e seu e-mail é $email <br>";

var_dump($_POST);