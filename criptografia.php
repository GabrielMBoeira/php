<?php

$senha = "123456"; // Esta é a senha

$novaSenha = base64_encode($senha);
echo "Base 64:.$novaSenha.<br>";
echo "Sua senha é :".base64_decode($novaSenha);

echo "<hr>";

echo "MD5: ".md5($senha)."<br>";
echo "SHA1: ".sha1($senha)."<br>";

//https://crackstation.net/ (Decodificando hash)

echo "<hr>";

//Senha segura

//$options =['cost' => 10];
//$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura;

//comparando senha => password_hash

$senha_db = '$2y$10$Ux66Y3/HD6MiqT.Ul.Npxu9bIXiEJkvDH.AXAt0T9xOClGndAK54O';

if (password_verify($senha, $senha_db)) {
    echo "<br>"."Senha válida";
} else {
    echo "<br>"."Senha inválida";
}