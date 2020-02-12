<?php
/************** ESCALARES ***************/

$nome = "Gabriel";
var_dump($nome);

if(is_string($nome)):
    echo "E uma String";
else:
    echo "Nao e uma String";
endif;
echo "<hr>";

//int
$idade = 31;
var_dump($idade);

if(is_int($idade)):
    echo "E inteiro";
else:
    echo "Nao e inteiro";
endif;
echo "<hr>";

//float
$altura = 1.77;
var_dump($altura);

if(is_float($altura)):
    echo "E float";
else:
    echo "Nao e float";
endif;
echo "<hr>";

//boolean
$admin = false;

var_dump($admin);

if(is_bool($admin)):
    echo "E um boolean";
else:
    echo "Nao e um boolean";
endif;
echo "<hr>";

/*************** COMPOSTOS ****************/

$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);

var_dump($carros);

/*************** Object ****************/

class Cliente {

    public $nome;
    public function atribuirNome($nome) {
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Gabriel");
var_dump($cliente);

if(is_object($cliente)):
    echo "E um Objeto";
else:
    echo "Nao e um Objeto";
endif;
echo "<hr>";

/*************** Especiais ****************/

NULL
$cidade = NULL;
var_dump($cidade);

/*************** Resource ****************/