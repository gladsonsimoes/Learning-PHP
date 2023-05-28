<?php


/*
Definimos Polimorfismo como um princípio a partir do qual as classes derivadas 
de uma única classe base são capazes de invocar os métodos que,
embora apresentem a mesma assinatura,
comportam-se de maneira diferente para cada uma das classes derivadas.
*/

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

    //polimorfismo - a mesma funcao usada na classe Veiculo (só foi sobreescrito para moto!)
    function passarMarcha()
    {
        return 'Segurar com a mao na embreagem colocar com o pe na marcha';
    }

}

class Caminhao extends Veiculo
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

//Classe Base
class Veiculo
{
    public $placa;
    public $cor;
    public $marca;

    function freiar()
    {
        echo 'Freiando';
    }

    //Adicionar uma funcao passar marcha
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
echo $car->passarMarcha();

echo '<br>';

$moto = new Moto();
$moto->__set('placa', 'yyd-8080');
$moto->__set('cor', 'branco');
$moto->__set('marca', 'yamaha');
// $moto->empinar();
// print_r($moto);

echo 'Moto';
// usando o polimorfismo da mesma funcao vai ser a mesma, só que sobreescrito
echo $moto->passarMarcha();

$caminhao = new Caminhao();
$caminhao->__set('placa', 'AAA-4025');
$moto->__set('cor', 'vermelho');
$moto->__set('marca', 'volvo');

echo '<br>';
echo 'Caminhao';
//usando o polimorfismo d mesma funcao vai ser a mesma, sem escrever outra funcao aproveitando a classe Pai chamada Veiculo 
echo $caminhao->passarMarcha();




?>
