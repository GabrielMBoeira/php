<?php

//Conexão com o banco de dados

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crudphp";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error($connect)) {
    echo "Erro na conexao ".mysqli_connect_error();
}