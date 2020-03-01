<html>
<body>

<?php
/*Sanitizações
Funções (filter_input - filter_var)

FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_INT
FILTER_SANITIZE_EMAIL
FILTER_VALIDATE_URL
*/
?>

<?php
    if(isset($_POST['enviar-formulario'])){
        //Array de erros
        $erros = array();
        
        //Validações
        if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
            $erros[] = "Idade precisa ser um inteiro.";
        }

        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            $erros[] = "Email inválido.";
        }

        if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
            $erros[] = "Peso precisa ser um float.";
        }

        if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
            $erros[] = "Ip inválido.";
        }

        if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
            $erros[] = "URL inválida.";
        }

        //Exibindo mensagens
        if(!empty($erros)) {
            foreach($erros as $erro) {
                echo "<li> $erro </li>";
            }
        } else {
            echo "Parabéns, seus dados estão corretos";
        }

    }
?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        Email: <input type="email" name="email"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario">Enviar</button>
    </form>
</body>
</html>