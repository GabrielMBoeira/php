<!DOCTYPE html>

<?php
//Conexão 
require_once "db_connect.php";

//Sessões
session_start();
 
//Botão enviar
    if(isset($_POST['btn-entrar'])) {
        $erros = array();
        $login = mysqli_escape_string($connect, $_POST['login']); //limpar os inputs - Segurança
        $senha = mysqli_escape_string($connect, $_POST['senha']); //limpar os inputs - Segurança

        if (empty($login) or empty($senha)) {
            $erros[] = "<li> Senha ou login não estão preenchidos </li>";
        } else {
            $sql = "SELECT login FROM usuarios WHERE login = '$login'";
            $resultado = mysqli_query($connect, $sql);
            
            if (mysqli_num_rows($resultado) > 0) {
                $senha = md5($senha);
                $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) == 1) {
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: home.php');

                } else {
                    $erros[] = "<li>Usuário e senha não conferem </li>";
                }
                
            } else {
                $erros[] = "<li>Usuário inexistente</li>";
            }

        }

    }
?>


<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<?php
    if (!empty($erros)) {
        foreach($erros as $erro) {
            echo $erro;
        }
    }
?>

<h1>Login</h1>

<hr>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Login:  <input type="text" name="login"><br>
Senha: <input type="password" name="senha"><br>
<button type="submit" name="btn-entrar">Entrar</button>
</form>
    
</body>
</html>