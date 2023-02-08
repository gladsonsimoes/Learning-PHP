<?php

class Pessoa{
    public $nome = null;

    function __construct($nome){
        echo 'Objeto criado';
        $this->nome = $nome;
    }

    function __get($variavel){
        echo $this->$variavel;
    }
}

$pessoa = new Pessoa("Roberto");
echo "<hr>";
echo $pessoa -> __get('nome');

?>