<html>
<body>

<?php
/*Sanitizações
Funções (filter_input - filter_var)

FILTER_SANITIZE_SPECIAL_CHARS -> Deixa escapar todos os códigos html sem criar botão, etc.. 
FILTER_SANITIZE_NUMBER_INT -> Limpa todo o texto e deixa somente o numero inteiro. 
FILTER_SANITIZE_EMAIL -> Limpa os caracteres especiais dentro do email (Deixando somente o email).
FILTER_VALIDATE_URL -> Limpa os caracteres especiais dentro da url (Deixando somente a url).
*/
?>

<?php
    if(isset($_POST['enviar-formulario'])){
        //Array de erros
        $erros = array();
        
        //Sanitize
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS); 

        $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
        if(!filter_var($idade, FILTER_SANITIZE_NUMBER_INT)){
            $erros[] = "Idade precisa ser um inteiro";
        }

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
            if(!filter_var($email, FILTER_SANITIZE_EMAIL)){
                $erros[] = "Email inválido";
            }

        $url = filter_input(INPUT_POST, "url", FILTER_SANITIZE_URL);
            if(!filter_var($url, FILTER_VALIDATE_URL)) { 
                $erros[] = "URL Inválida.";
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