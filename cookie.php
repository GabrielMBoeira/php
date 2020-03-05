<?php

//COOKIE

setcookie('user', 'Gabriel Boeira', time()+3600);

setcookie('email', 'gboeira777@gmail.com', time()+3600);

setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

//var_dump($_COOKIE);

echo $_COOKIE['ultima_pesquisa'];