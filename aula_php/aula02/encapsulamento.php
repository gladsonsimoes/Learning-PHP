<?php
class Pai
{
    public $idade;
    private $nome;
    protected $id;

    function getIdade()
    {
        return $this->idade;
    }

    function setIdade($idade)
    {
        $this->idade = $idade; //sem o cifrao porque esta puxando uma variavel
    }

    function __get($variavel)
    {
        return $this->$variavel;
    }

    function __set($variavel, $valor)
    {
        $this->$variavel = $valor; //neste caso tem cifrao porque o nome da variavel vai esta dentro
    }

}

$pai = new Pai();

//atributo Idade (public)

//com a funcao set global
$pai->setIdade('30');
echo $pai->getIdade();
echo '<br>';

//sem a funcao set global
$pai->idade = 40;
echo $pai->getIdade();
echo '<br>';

//atributo nome (private)

//com a funcao set global
$pai->__set('nome','Marcos');
echo $pai->__get('nome');
echo '<br>';

//sem a funcao set global
$pai->nome = 'Luan';
echo $pai->__get('nome');
echo '<br>';

//atributo id (protected)



?>