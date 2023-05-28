<?php

/*
A Herança possibilita que as classes compartilhem seus atributos, 
métodos e outros membros da classe entre si. 
Para a ligação entre as classes, a herança adota um relacionamento esquematizado hierarquicamente
*/

//classe base
class Veiculo
{
    public $placa;
    public $cor;
    public $marca;

    function freiar()
    {
        echo 'Freiando';
    }
}


class Carro extends Veiculo
{
    function __get($variavel)
    {
        return $this->$variavel;
    }

    function __set($variavel, $valor)
    {
        $this->$variavel = $valor;
    }

    function abrirTeto()
    {
        echo 'Abrindo Teto';
    }

}

class Moto extends Veiculo
{
    function __get($variavel)
    {
        return $this->$variavel;
    }

    function __set($variavel, $valor)
    {
        $this->$variavel = $valor;
    }

    function empinar()
    {
        echo 'Empinando';
    }

}

//variavel instanciando o objeto Carro
$car = new Carro();

//adicionando valores nas variaveis disponiveis na Classe base
$car->__set('placa', 'ody-2588');
$car->__set('cor', 'vermelho');
$car->__set('marca', 'honda');
echo '<br>';

//pegando a funcao da classe base 
$car->freiar();

print_r($car);

echo '<br>';

$moto = new Moto();
$moto->__set('placa', 'yyd-8080');
$moto->__set('cor', 'branco');
$moto->__set('marca', 'yamaha');
echo '<br>';
$moto->empinar();
print_r($moto);

?>
