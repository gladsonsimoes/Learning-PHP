<?php

/* Explicação sobre o construtor em PHP  */

class Pessoa
{
    public $nome = null;

    function __construct($nome)
    {
        echo 'Objeto criado';
        $this->nome = $nome;
    }

    function __get($variavel)
    {
        echo $this->$variavel;
    }

    function __set($variavel, $valor)
    {
        $this->$variavel = $valor;
    }
}

//Objetos

$pessoa = new Pessoa("Roberto");
echo "<hr>";
echo $pessoa->__get('nome');
$pessoa->__set('idade', 22);
echo "<hr>";
echo $pessoa->__get('idade');


?>