<?php
//Conexão 
require_once "db_connect.php";

//Sessões
session_start();

//Verificação
if (!isset($_SESSION['logado'])) {
    header('Location: index.php');
}

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado); 
mysqli_close($connect);
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Página restrita</title>
</head>
<body>


<h1>Olá <?php echo  $dados['nome']; ?></h1>
<a href="logout.php">Sair</a>
    
</body>
</html>