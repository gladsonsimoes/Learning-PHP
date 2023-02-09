<?php
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

class Veiculo
{
    public $placa;
    public $cor;
    public $marca;

    function freiar()
    {
        echo 'Freiando';
    }

    //Adicionar uma funcao
    function passarMarcha()
    {
        return 'Pisar o pé na embreagem colocar com a mao a marcha';
    }
}

$car = new Carro();
$car->__set('placa', 'ody-2588');
$car->__set('cor', 'vermelho');
$car->__set('marca', 'honda');
// $car->freiar();
// print_r($car);


echo 'Carro';
//polimorfismo acessando o metodo diretamente da classe 
echo $car->passarMarcha();

echo '<br>';

$moto = new Moto();
$moto->__set('placa', 'yyd-8080');
$moto->__set('cor', 'branco');
$moto->__set('marca', 'yamaha');
// $moto->empinar();
// print_r($moto);

echo 'Moto';
echo $moto->passarMarcha();

?>
